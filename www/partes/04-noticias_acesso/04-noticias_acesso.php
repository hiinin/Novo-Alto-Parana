<?php
include "query_noticias.php";
?>

<div class="noticias_acesso">
    <div class="container container_noticias_acesso">
        <div class="control_titulo">
            <h1 class="tituloNoticias">Di&aacute;rio de <strong>Not&iacute;cias</strong></h1>
            <div class="barra"></div>
        </div>
        <div class="controle_noticias_acesso">
            <div class="control_destaq_ultimas">
                <!-- Destaque Inicio -->
                <div class="noticias-destaque">
                    <div class="owl-noticia owl-carousel owl-theme owl-loaded owl-drag">
                        <?php foreach ($vetor_destaque as $key => $destaque) { ?>
                            <a style="text-decoration: none;" href="<?= $destaque['link'] ?>">
                                <? if ($destaque['foto'] == '') { ?>
                                    <img src="<?= $caminho ?>/assets/images/sem-foto.jpg">
                                <? } ?>
                                <img class="img_destaque" src="<?= $destaque['foto'] ?>" alt="<?= $destaque['titulo'] ?>">

                                <div class="control_itens_destaque">
                                    <div class="sec_data">
                                        <?php if (!empty($destaque['secretarias'])) { ?>
                                            <p class="badge-secretaria"
                                                style="background-color: <?= cor_secretaria($destaque['secretarias']) ?>;">
                                                <?= $destaque['secretarias'] ?>
                                            </p>
                                        <?php } ?>
                                        <p class="acessibilidade tituloData"><?= formata_data_abrev($destaque['data_inicial_publicacao']) ?></p>
                                    </div>

                                    <div class="titulo_artigo">
                                        <p class="acessibilidade tituloDestaque">
                                            <?= $destaque['titulo'] ?>
                                        </p>
                                        <p class="acessibilidade artigoDestaque"><?= resumo_artigo($destaque['artigo'], 150) ?></p>
                                    </div>
                                    <div class="leiamais">
                                        <p class="leia_mais">Leia mais</p>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>

                    <div class="owl-prev-custom" aria-label="Próxima">
                        <img src="<?= $CAMINHO ?>images/seta_esquerda.svg" alt="Anterior">
                    </div>
                    <div class="owl-next-custom" aria-label="Anterior">
                        <img src="<?= $CAMINHO ?>images/seta_direita.svg" alt="Anterior">
                    </div>
                </div>
                <!-- Destaque Fim -->

                <!-- Ultimas Inicio -->
                <div class="controle_ultimas">
                    <?php foreach ($vetorUltimas as $key => $ultimas) { ?>
                        <a style="text-decoration: none;" class="link_ultimas t-<?= $key ?>" href="<?= $ultimas['link'] ?>">
                            <div class="control_img_ultimas">
                                <? if ($ultimas['foto'] == '') { ?>
                                    <img class="imgUltimas t-<?= $key ?> " src="<?= $CAMINHO ?>/assets/images/sem-foto.jpg">
                                <? } ?>
                                <img class="imgUltimas t-<?= $key ?> " src="<?= $ultimas['foto'] ?>" alt="<?= $ultimas['titulo'] ?>">
                            </div>
                            <div class="titulosUltimas">
                                <?php if (!empty($ultimas['secretarias'])) { ?>
                                    <p class="badge-secretaria_ultimas"
                                        style="background-color: <?= cor_secretaria($ultimas['secretarias']) ?>;">
                                        <?= $ultimas['secretarias'] ?>
                                    </p>
                                <?php } ?>
                                <p class="acessibilidade tituloUltimas t-<?= $key ?> "><?= resumo_artigo($ultimas['titulo'], 35) ?></p>
                                <p class="acessibilidade ultimasData t-<?= $key ?> "><?= formata_data_abrev($ultimas['data_inicial_publicacao']) ?></p>
                            </div>
                        </a>
                    <?php } ?>
                </div>
                <!-- Ultimas Inicio -->
                <div class="custom-btn hidden-lg hidden-md hidden-sm">
                    <a class="btn_noticias" href="<?= $CAMINHO ?>/index.php?sessao=b054603368n5b0" class="acessibilidade botao-ver">VER MAIS NOT&Iacute;CIAS</a>
                </div>
            </div>
            <!-- Nav tabs -->
            <div class="acesso_tab">
                <div class="controll_tituloAcesso">
                    <h1 class="t_acesso_rapido">
                        Acesso <strong>R&aacute;pido</strong>
                    </h1>
                    <div class="barra"></div>
                </div>

                <ul class="nav nav-tabs controle_tabs" role="tablist">
                    <li role="presentation" class="li_tabs">
                        <a class="link_tabs acessibilidade" href="#servidor" aria-controls="servidor" role="tab" data-toggle="tab">SERVIDOR</a>
                    </li>
                    <li role="presentation" class="li_tabs active">
                        <a class="link_tabs acessibilidade" href="#cidadao" aria-controls="cidadao" role="tab" data-toggle="tab">CIDAD&Atilde;O</a>
                    </li>
                    <li role="presentation" class="li_tabs">
                        <a class="link_tabs acessibilidade" href="#empresa" aria-controls="empresa" role="tab" data-toggle="tab">EMPRESA</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="cidadao">
                        <div class="control_icones">
                            <a href="" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/diario.svg" alt="Diario" class="img_icon">
                                <p class="t_icon acessibilidade">Di&aacute;rio<br>Oficial</p>
                            </a>
                            <a href="https://www.ingadigital.com.br/transparencia/?id_cliente=86" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/transparencia.svg" alt="transparencia" class="img_icon">
                                <p class="t_icon acessibilidade">Portal<br>Transpar&ecirc;ncia</p>
                            </a>
                            <a href="http://www.ingadigital.com.br/transparencia/?id_cliente=86&sessao=b054603368ljb0&ntipo" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/legislacao.svg" alt="legislacao" class="img_icon">
                                <p class="t_icon acessibilidade">Legisla&ccedil;&atilde;o</p>
                            </a>
                            <a href="http://www.ingadigital.com.br/transparencia/index.php?id_cliente=86&sessao=9223980d0f3m92" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/licitacao.svg" alt="Licitação" class="img_icon">
                                <p class="t_icon acessibilidade">Licita&ccedil;&atilde;o</p>
                            </a>
                            <a href="<?= $CAMINHO ?>/index.php?sessao=b054603368nfb0" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/nfe.svg" alt="Nfe" class="img_icon">
                                <p class="t_icon acessibilidade">Nota Fiscal<br>Eletr&ocirc;nica</p>
                            </a>
                            <a href="http://www.altoparana.pr.gov.br/index.php?sessao=b054603368ixb0&id=3046" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/tributos.svg" alt="Tributos" class="img_icon">
                                <p class="t_icon acessibilidade">Tributos<br>Web</p>
                            </a>
                            <a href="" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/concursos.svg" alt="Concursos" class="img_icon">
                                <p class="t_icon acessibilidade">Concursos</p>
                            </a>
                            <a href="https://e-gov.betha.com.br/transparencia/01037-140/main.faces" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/portal_cidadao.svg" alt="Portal Cidadão" class="img_icon">
                                <p class="t_icon acessibilidade">Portal<br>Cidad&atilde;o</p>
                            </a>
                            <a href="http://www.ingadigital.com.br/transparencia/index.php?sessao=8cf5ffc8babf8c" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/bolsa_familia.svg" alt="Bolsa Família" class="img_icon">
                                <p class="t_icon acessibilidade">Bolsa<br>Fam&iacute;lia</p>
                            </a>
                            <a href="<? $CAMINHO ?>index.php?sessao=b054603368ixb0&id=1211" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/requerimentos.svg" alt="Requerimentos" class="img_icon">
                                <p class="t_icon acessibilidade">Requerimentos</p>
                            </a>
                            <a href="<? $CAMINHO ?>index.php?sessao=b054603368hlb0" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/hospital_postos.svg" alt="Hospitais Postos" class="img_icon">
                                <p class="t_icon acessibilidade">Hospitais<br>e Postos</p>
                            </a>
                            <a href="<? $CAMINHO ?>index.php?sessao=b054603368elb0" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/ins_ensino.svg" alt="" class="img_icon">
                                <p class="t_icon acessibilidade">Institui&ccedil;&otilde;es<br>de Ensino</p>
                            </a>
                            <a href="https://altoparana.pr.gov.br/index.php?sessao=b054603368c1b0&id=713" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/meio-ambiente.svg" alt="" class="img_icon">
                                <p class="t_icon acessibilidade">Meio Ambiente</p>
                            </a>
                            <a href="https://transparencia.betha.cloud/#/5DZvUJTkFeZDu8t2APF0UA==/consultas/48242" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/educacao-transparencia.svg" alt="" class="img_icon">
                                <p class="t_icon acessibilidade">Educa&ccedil;&atilde;o Transparente</p>
                            </a>
                            <a href="https://www.ingadigital.com.br/transparencia/index.php?id_cliente=86&sessao=699d4bbc8fat69" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/atividade-extra.svg" alt="" class="img_icon">
                                <p class="t_icon acessibilidade">Atividade Extra Curricular</p>
                            </a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSe2A026ygUTLelvrKEml1xY2J3eWE7Uh9Uy9tIyeNFdc0hQaw/viewform?usp=header" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/pesquisa-satisfacao.svg" alt="" class="img_icon">
                                <p class="t_icon acessibilidade">Pesquisa de Satisfa&ccedil;&atilde;o</p>
                            </a>
                            <a href="https://altoparana.pr.gov.br/index.php?sessao=b054603368ixb0&id=4314" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/requerimento-camera.svg" alt="" class="img_icon">
                                <p class="t_icon acessibilidade">Requirimento das C&acirc;meras</p>
                            </a>
                            <a href="https://altoparana.pr.gov.br/index.php?sessao=b054603368svb0&id=3963" class="link_icon">
                                <img src="<?= $CAMINHO ?>/images/desenvolvimento.svg" alt="" class="img_icon">
                                <p class="t_icon acessibilidade">Desenvolvimento Econ&ocirc;mico</p>
                            </a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="servidor">SER</div>
                    <div role="tabpanel" class="tab-pane" id="empresa">Empresa</div>
                </div>

            </div>
        </div>
    </div>
</div>
<style>
    .noticias-destaque {
        position: relative;
    }

    .owl-prev-custom,
    .owl-next-custom {
        position: absolute;
        top: 40%;
        transform: translateY(-50%);

        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: background 0.2s ease;
    }

    .owl-prev-custom:hover,
    .owl-next-custom:hover {
        background: rgba(255, 255, 255, 0.55);
    }

    .owl-prev-custom {
        left: 0;
    }

    .owl-next-custom {
        right: 0;
    }



    .seta-esquerda {
        transform: rotate(-135deg);
        margin-left: 4px;
    }

    .seta-direita {
        transform: rotate(45deg);
        margin-right: 4px;
    }
</style>

<script>
    $(document).ready(function() {
        var $owl = $(".owl-noticia");

        $owl.owlCarousel({
            autoplay: true,
            autoWidth: false,
            slideBy: 1,
            dots: false,
            margin: 0,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                280: {
                    items: 1
                },
                400: {
                    items: 1
                },
                550: {
                    items: 1
                },
                768: {
                    items: 1
                },
                993: {
                    items: 1
                },
                1201: {
                    items: 1
                }
            }
        });

        $(" .owl-next-custom").click(function() {
            $owl.trigger('prev.owl.carousel');
        });

        $(".owl-prev-custom").click(function() {
            $owl.trigger('next.owl.carousel');
        });
    });
</script>