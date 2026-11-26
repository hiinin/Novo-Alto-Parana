<?php
// DATA ATUAL PARA COMPARAÇÃO
$dataAtual = date('Y-m-d');

// CONTADOR DE OBRAS ATIVAS (status_registro = 'A')
$qryContador = mysql_query("SELECT COUNT(*) as total 
                                       FROM pref_obras 
                                       WHERE id_cliente = '$cliente' 
                                       AND status_registro = 'A'");
$totalObras = mysql_fetch_assoc($qryContador);

// CONTADOR DE OBRAS CONCLUÍDAS (data_fim < data atual E status_registro = 'A')
$qryConcluidas = mysql_query("SELECT COUNT(*) as total 
                                         FROM pref_obras 
                                         WHERE id_cliente = '$cliente' 
                                         AND status_registro = 'A'
                                         AND data_fim < '$dataAtual'");
$totalConcluidas = mysql_fetch_assoc($qryConcluidas);

// CALCULAR OBRAS EM ANDAMENTO (data_fim >= data atual)
$qryAndamento = mysql_query("SELECT COUNT(*) as total 
                                        FROM pref_obras 
                                        WHERE id_cliente = '$cliente' 
                                        AND status_registro = 'A'
                                        AND data_fim >= '$dataAtual'");
$totalAndamento = mysql_fetch_assoc($qryAndamento);




// CONSULTA PRINCIPAL COM AS OBRAS
$qryObrasDestaque = mysql_query("SELECT id, 
                                                    obra,
                                                    descricao,
                                                    data_inicio,
                                                    data_fim
                                               FROM pref_obras
                                              WHERE id_cliente = '$cliente' 
                                                AND status_registro = 'A'                                           
                                           ORDER BY id DESC 
                                              LIMIT 4");
if (mysql_num_rows($qryObrasDestaque) > 0) {
    $vetor_destaque = array();
    $indice = 0;
    while ($obras = mysql_fetch_assoc($qryObrasDestaque)) {
        $vetor_destaque[$indice]['link'] = $CAMINHO . "/index.php?sessao=" .  verifica($sequencia . $obraVisualuza . $complemento) . "&id=" . verifica($obras['id']);
        $vetor_destaque[$indice]['id'] = $obras['id'];
        $vetor_destaque[$indice]['obra'] = $obras['obra'];
        $vetor_destaque[$indice]['descricao'] = $obras['descricao'];
        $vetor_destaque[$indice]['data_inicio'] = $obras['data_inicio'];
        $vetor_destaque[$indice]['data_fim'] = $obras['data_fim'];

        // VERIFICAR SE A OBRA ESTÁ CONCLUÍDA
        $vetor_destaque[$indice]['concluida'] = (strtotime($obras['data_fim']) < strtotime($dataAtual)) ? true : false;

        $foto = mysql_fetch_assoc(mysql_query("SELECT foto, 
                                                                  legenda 
                                                             FROM pref_obras_foto 
                                                            WHERE id_artigo = '$obras[id]'  
                                                         ORDER BY id 
                                                            LIMIT 1"));
        $vetor_destaque[$indice]['foto'] = $CAMINHOIMG . "/gd_" . $foto['foto'];
        $vetor_destaque[$indice]['legenda'] = $foto['legenda'];
        $indice++;
    }
}
