<?php include "query_banner.php"; ?>

<div class="controleBanner">
    <div class="fundoBanner">
        <div class="container containerBanner">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <?php if (empty($_GET['sessao'])) { ?>
                    <div class="carousel-inner" id="controll_banner" role="listbox">
                        <?
                        $cont = 1;
                        foreach ($banners as $valor_banner) {
                        ?>
                            <div class="item <?php if ($cont == 1) {
                                                    echo "active";
                                                } ?>" id="banner">
                                <a class="linkBanner" href="<?= $valor_banner['link'] ?>">
                                    <img loading="lazy" src="<?= $CAMINHOIMG ?>/<?= $valor_banner['foto']; ?>" title="<?= $valor_banner['titulo'] ?>" class="imgBanner" alt="<?= $valor_banner['titulo'] ?>">
                                </a>
                            </div>
                        <? ++$cont;
                        } ?>
                    </div>
                    <!-- Controls -->
                    <a class="left seta_esquerda carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <img class="imgSetas1" src="<?= $CAMINHO ?>/images/setab_esquerda.svg" alt="">
                    </a>
                    <a class="right seta_direita carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <img class="imgSetas2" src="<?= $CAMINHO ?>/images/setab_direita.svg" alt="">
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>