<?php
$vetor_agenda = array();

$qryAgenda = mysql_query("SELECT id,
                                 evento,
                                 data,
                                 horario,
                                 local,
                                 observacao
                            FROM pref_agenda_prefeito
                           WHERE id_cliente = '$cliente'
                             AND status_registro = 'A'
                             AND data >= CURDATE()
                        ORDER BY data ASC, horario ASC
                           LIMIT 6");

if ($qryAgenda && mysql_num_rows($qryAgenda) > 0) {
    $indice = 0;
    while ($agenda = mysql_fetch_assoc($qryAgenda)) {
        $vetor_agenda[$indice]['id']         = $agenda['id'];
        $vetor_agenda[$indice]['evento']     = $agenda['evento'];
        $vetor_agenda[$indice]['data']       = $agenda['data'];
        $vetor_agenda[$indice]['horario']    = $agenda['horario'];
        $vetor_agenda[$indice]['local']      = $agenda['local'];
        $vetor_agenda[$indice]['observacao'] = $agenda['observacao'];

        $meses = [
            1  => 'JANEIRO',
            2  => 'FEVEREIRO',
            3  => 'MARÇO',
            4  => 'ABRIL',
            5  => 'MAIO',
            6  => 'JUNHO',
            7  => 'JULHO',
            8  => 'AGOSTO',
            9  => 'SETEMBRO',
            10 => 'OUTUBRO',
            11 => 'NOVEMBRO',
            12 => 'DEZEMBRO',
        ];
        $dt = DateTime::createFromFormat('Y-m-d', $agenda['data']);
        $vetor_agenda[$indice]['dia'] = $dt ? $dt->format('d') : '';
        $vetor_agenda[$indice]['mes'] = $dt ? $meses[(int)$dt->format('n')] : '';

        $vetor_agenda[$indice]['horario_fmt'] = $agenda['horario'] ? $agenda['horario'] . 'hs' : '';

        $indice++;
    }
}
?>
