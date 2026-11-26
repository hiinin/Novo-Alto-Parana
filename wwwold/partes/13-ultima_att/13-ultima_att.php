<?php
function buscarUltimaAtualizacao($cliente) {
    return mysql_fetch_assoc(mysql_query("
        SELECT data_acesso FROM controle_log_acesso WHERE id_cliente = '$cliente'
        UNION ALL
        SELECT data_acesso FROM di_log_acesso WHERE id_cliente = '$cliente'
        ORDER BY data_acesso DESC
        LIMIT 1
    "));
}
$ultima_att = buscarUltimaAtualizacao($cliente);
?>

<div class="controller-atualizacao">
    <div class="container container-att">
        <div class="atualizacao acessibilidade">
            <div class="mapa-do-site">
                <a href="<?= $CAMINHO ?>/index.php?sessao=115499dbbbma11">
                    <img src="<?= $CAMINHO ?>images/mapa-do-site.svg" alt="Mapa do site">
                    <p class="txt-mapa acessibilidade">MAPA DO SITE</p>
            </div>
            <div class="ultima-atualizacao">
                <p class="txt-att acessibilidade">&Uacute;tima atualiza&ccedil;&atilde;o do site: <?= $ultima_att['data_acesso'] ?></p>
            </div>
            <div class="logoInga">
                <a href="https://ingadigital.com.br/" target="_blank" class="logoingadigital">
                    <img src="<?= $CAMINHO ?>images/inga-rodape.png" alt="Ingá Digital">
                </a>
            </div>
        </div>
    </div>
</div>