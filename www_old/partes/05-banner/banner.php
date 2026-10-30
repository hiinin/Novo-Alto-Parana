<div class="fundo-baner hidden-xs">
    <div class="container no-padding hidden-xs">
        <div class="row-banner">
            <?php if (empty($_GET['sessao'])) { ?>
                <div id="banner-carousel" class="carousel slide" data-ride="carousel" data-anima="esquerda">
                    <?php
                    $sqlBanner = mysql_query("SELECT * 
                                    FROM pref_banner 
                                    WHERE id_cliente = '$cliente' 
                                    AND status_registro = 'A'
                                    AND (data_limite >= NOW() OR data_limite is NULL)
                                    ORDER BY id DESC 
                                    LIMIT 3");
                    $banners = array();

                    while ($foto_destaque = mysql_fetch_array($sqlBanner)) {
                        array_push($banners, $foto_destaque);
                    }
                    ?>
                    <ol class="carousel-indicators">
                        <?php
                        $contador = 0;
                        foreach ($banners as $valor) {
                        ?>
                            <li data-target="#banner-carousel" data-slide-to="<?= $contador ?>" class="<? if ($contador == 0) {
                                                                                                            echo "active";
                                                                                                        } ?>"></li>
                        <? ++$contador;
                        } ?>
                    </ol>

                    <div class="carousel-inner">
                        <?
                        $cont = 1;
                        foreach ($banners as $valor_banner) {
                        ?>

                            <div class="item <?php if ($cont == 1) {
                                                    echo "active";
                                                } ?>" id="banner">
                                <a href="<?= $valor_banner['link']; ?>">


                                    <img src="<?= $CAMINHOIMG ?>/<?= $valor_banner['foto']; ?>" title="<?= $valor_banner['titulo'] ?>" class="img-responsive" alt="<?= $valor_banner['titulo'] ?>" style="width: 100%; height: 340px;">
                                </a>
                            </div>

                        <? ++$cont;
                        } ?>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="carousel-button-slider btn-slider hidden-xs">
        <a class="left-slider" href="#banner-carousel" data-slide="prev">
            <img src="<?= $CAMINHO ?>images/seta-e.svg" alt="Seta para a esquerda do Banner">
        </a>
        <a class="right-slider" href="#banner-carousel" data-slide="next">
            <img src="<?= $CAMINHO ?>images/seta-d.svg" alt="Seta para a direita do Banner">
        </a>
    </div>
</div>