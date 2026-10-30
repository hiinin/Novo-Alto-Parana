<?php include "query_obras.php"; ?>


<div class="galeriaObras">
    <div class="container container_obras">
        <div class="control_titulo">
            <h1 class="tituloNoticias">Di&aacute;rio de <strong>Obras</strong></h1>
            <div class="barra"></div>
        </div>

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

            <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">

                <?php foreach ($vetor_destaque as $key => $destaque) { ?>
                    <div class="item obras">
                        <div class="uk-text-center">
                            <a href="<?= $destaque['link'] ?>">

                                <div class="uk-inline-clip uk-transition-toggle obras-toggle " tabindex="0">

                                    <div class="control_obras">
                                        <p class="inicio_obra">
                                            Inicio da Obra: <?= date('d/m/Y', strtotime($destaque['data_inicio'])); ?>

                                        </p>
                                        <p class="status_obras">
                                            <?php if ($destaque['concluida']) { ?>
                                                <span class="status-concluida status">CONCLUIDA</span>
                                            <?php } else { ?>
                                                <span class="status-andamento status">EM ANDAMENTO</span>
                                            <?php } ?>
                                        </p>
                                    </div>
                                    <div class="foto_descObras">
                                        <?php if ($destaque['foto'] == '') { ?>
                                            <img class="imgObras" src="<?= $caminho ?>/css/images/semfoto.png">
                                        <?php } else { ?>
                                            <img class="imgObras" src="<?= $destaque['foto'] ?>" alt="<?= $destaque['obra'] ?>">
                                        <?php  } ?>
                                        <p id="t_Obras1" class="txt_obras acessibilidade uk-h4 uk-margin-remove"><?= resumo_artigo($destaque['obra'], 100) ?></p>
                                    </div>
                                    <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                                        <p id="t_Obras2" class="txt_obras acessibilidade uk-h4 uk-margin-remove"><?= $destaque['obra'] ?></p>

                                        <p id="t_Obras3" class="txt_obras acessibilidade uk-h4 uk-margin-remove"><?= resumo_artigo($destaque['descricao'], 150) ?></p>

                                        <p class="fim_obra">
                                            Previs&atilde;o: <?= date('d/m/Y', strtotime($destaque['data_fim'])); ?>
                                        </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>

            <a class="uk-position-center-left uk-position-small " href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small " href uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </div>
</div>

<div class="contador-obras">
    <div class="container container_contador_obras">
        <div class="controle_contador_obras">
            <div class="contador-item">
                <span class="contador-numero"><?= $totalObras['total'] ?></span>
                <span class="contador-label">Total de Obras</span>
            </div>
            <div class="barra_cont"></div>
            <div class="contador-item">
                <span class="contador-numero ativas"><?= $totalAndamento['total'] ?></span>
                <span class="contador-label">Em Andamento</span>
            </div>
            <div class="barra_cont"></div>
            <div class="contador-item">
                <span class="contador-numero concluidas"><?= $totalConcluidas['total'] ?></span>
                <span class="contador-label">Concluidas</span>
            </div>
        </div>
    </div>
</div>