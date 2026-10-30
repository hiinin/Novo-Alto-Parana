<style>
    <?php include "ultimasNoticias.css"; ?>
</style>

<?php
$qryUltimaNoticia = mysql_query("SELECT id, 
                                            titulo, 
                                            artigo
                                       FROM pref_noticia 
                                      WHERE tipo = 'U' 
                                        AND status_registro = 'A' 
                                        AND (data_final_publicacao >= NOW() OR data_final_publicacao is NULL)
                                        AND id_cliente = '$cliente' 
                                   ORDER BY id DESC 
                                      LIMIT 3");
if (mysql_num_rows($qryUltimaNoticia) > 0) {
    $vetor_ultimas = array();
    $indice = 0;
    while ($ultimasnoticias = mysql_fetch_assoc($qryUltimaNoticia)) {
        $vetor_ultimas[$indice]['link'] = $CAMINHO . "index.php?sessao=" .  verifica($sequencia . $noticiaVisualiza . $complemento) . "&id=" . verifica($ultimasnoticias['id']);
        $vetor_ultimas[$indice]['id'] = $ultimasnoticias['id'];
        $vetor_ultimas[$indice]['titulo'] = $ultimasnoticias['titulo'];
        $vetor_ultimas[$indice]['artigo'] = $ultimasnoticias['artigo'];
        $foto = mysql_fetch_assoc(mysql_query("SELECT foto, 
                                                          legenda 
                                                     FROM pref_noticia_foto 
                                                    WHERE id_artigo = '$ultimasnoticias[id]' 
                                                      AND status_registro = 'A'
                                                 ORDER BY id DESC
                                                    LIMIT 1"));
        $vetor_ultimas[$indice]['foto'] = $CAMINHOIMG . "/" . $foto['foto'];
        $vetor_ultimas[$indice]['legenda'] = $foto['legenda'];
        $indice++;
    }
}
?>

<div class="fundo-noticias">
    <div class="container noticias">
        <div class="row hidden-xs hidden-sm hidden-md col-lg-12">
            <div class="acessibilidade titulo-noticias hidden-xs hidden-sm hidden-md col-lg-12">
                &Uacute;ltimas Not&iacute;cias
                <div class="tracado-div-noticias">
                    <p class="tracado"></p>
                </div>
            </div>
            <div class="ultima hidden-xs col-sm-12 col-md-4 col-lg-4 no-padding">
                <?php foreach ($vetor_ultimas as $key => $ultimas) { ?>
                    <div class="item-ultimas itemUltimas col-xs-6 col-sm-6 col-md-12 col-lg-12 no-padding">
                        <a href="<?= $ultimas['link'] ?>">
                            <figure class="imageCard">
                                <img src="<?= $ultimas['foto'] ?>" alt="<?= $ultimas['titulo'] ?>">
                                <figcaption class="acessibilidade tituloUltimas"><?= $ultimas['titulo'] ?></figcaption>
                            </figure>
                        </a>
                    </div>
                <?php } ?>
            </div>

            <div class="botao-ver-todas col-xs-12 alinha-center">
                <a href="<?= $CAMINHO ?>index.php?sessao=<?= $sequencia . $noticiaLista . $complemento ?>" class="acessibilidade botao-ver">Ver todas as not&iacute;cias</a>
            </div>
        </div>
    </div>
</div>