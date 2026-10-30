<?php

$atualizacao = mysql_fetch_assoc(mysql_query("SELECT data_acesso 

                                                    FROM controle_log_acesso 

                                                   WHERE id_cliente = '$cliente' 

                                               UNION ALL 

                                                  SELECT data_acesso 

                                                    FROM di_log_acesso 

                                                   WHERE id_cliente = '$cliente' 

                                                ORDER BY data_acesso 

                                              DESC LIMIT 1"));

?>

<div class="cor-fundo-rodape">
    <div class="container">
        <div class="atualiza-rodape">
            <div class="atualizacao-rodape">
                <div>
                    <span>&Uacute;ltima atualiza&ccedil;&atilde;o do site: <?= formata_data_hora($atualizacao['data_acesso']) ?></span>
                </div>

            </div>
            <div class="logo-inga">
                <a href="http://www.ingadigital.com.br/">
                    <img src="<?= $CAMINHO ?>images/ingaLogo.svg" alt="IngaDigital">
                </a>
            </div>
        </div>
    </div>
</div>