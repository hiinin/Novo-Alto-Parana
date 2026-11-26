<div class="fundo_logo">
    <div class="container container_fundo_logo">
        <div class="controleTopo">
            <a href="<?= $CAMINHO ?>" class="link_logo">
                <img src="<?= $CAMINHO ?>/images/brasao.png" alt="" class="img_logo">
            </a>
            <div class="controle_busca">
                <form class="form-pesquisa" name="buscanews" action="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $buscar . $complemento); ?>" method="POST" id="form-pesquisa" onSubmit="return validaBusca();">
                    <div class="barra_pesquisa">
                        <input type="text" class="acessibilidade  placeholder1" id="ipt-pesquisa" placeholder="Busca Site..." name="busca" value="<?= $_POST['ipt-pesquisa'] ?>" title="Campo de pesquisa">
                    </div>
                </form>
                <div class="dropdown dropdown_acesso_rapido">
                    <a href="#" class="link_fale acessibilidade dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span>Acesso R&aacute;pido</span>
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu drop_acesso_rapido">
                        <li><a class="acessibilidade" href="#" data-toggle="modal" data-target="#diario">Di&aacute;rio Oficial</a></li>
                        <li><a class="acessibilidade" href="https://www.ingadigital.com.br/transparencia/?id_cliente=86" target="_blank">Portal da Transpar&ecirc;ncia</a></li>
                        <li><a class="acessibilidade" href="http://www.ingadigital.com.br/transparencia/?id_cliente=86&sessao=b054603368ljb0&ntipo" target="_blank">Legisla&ccedil;&atilde;o</a></li>
                        <li><a class="acessibilidade" href="http://www.ingadigital.com.br/transparencia/index.php?id_cliente=86&sessao=9223980d0f3m92" target="_blank">Licita&ccedil;&otilde;es</a></li>
                        <li><a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=b054603368nfb0">Nota Fiscal Eletr&ocirc;nica</a></li>
                        <li><a class="acessibilidade" href="http://www.altoparana.pr.gov.br/index.php?sessao=b054603368ixb0&id=3046" target="_blank">Tributos WEB</a></li>
                        <li><a class="acessibilidade" href="#" data-toggle="modal" data-target="#concurso-pss">Concursos / PSS</a></li>
                        <li><a class="acessibilidade" href="https://e-gov.betha.com.br/transparencia/01037-140/main.faces" target="_blank">Portal do Cidad&atilde;o</a></li>
                        <li><a class="acessibilidade" href="http://www.ingadigital.com.br/transparencia/index.php?sessao=8cf5ffc8babf8c" target="_blank">Bolsa Fam&iacute;lia</a></li>
                        <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368ixb0&id=1211">Requerimentos</a></li>
                        <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368hlb0">Hospitais e Postos</a></li>
                        <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368elb0">Institui&ccedil;&otilde;es de Ensino</a></li>
                        <li><a class="acessibilidade" href="https://minhafolha.cloud.betha.com.br/" target="_blank">Holerite Online</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="fundo_menu">
        <div class="container container_fundo_logo">
            <?php include "menu_responsivo.php" ?>
            <div class="control_menu hidden-xs">
                <li class="dropdown controll_dropdown">
                    <a href="<?= $CAMINHO ?>" class="dropdown-toggle t-toggle acessibilidade">In&iacute;cio</a>
                </li>
                <li class="dropdown controll_dropdown">
                    <a href="#" class="dropdown-toggle t-toggle acessibilidade" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="zoomIn">A Prefeitura</a>
                    <ul class="dropdown-menu dropMenu">
                        <?php
                        $qryNossaCidade = mysql_query("SELECT * FROM pref_nossa_cidade WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY nome_menu");
                        while ($menuNossaCidade = mysql_fetch_assoc($qryNossaCidade)) {
                        ?>
                            <li class="li-submenu">
                                <a class="a-submenu" id="sub_menu" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $nossacidade . $complemento); ?>&id=<?= $menuNossaCidade['id'] ?>"><?= $menuNossaCidade['nome_menu']; ?></a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li class="li-submenu">
                                <a class="a-submenu" id="sub_menu" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $gestaoatual . $complemento); ?>">Conhe&ccedil;a o Prefeito</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li class="li-submenu">
                                <a class="a-submenu" id="sub_menu" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $galeriaPrefeito . $complemento); ?>">Galeria de Prefeitos</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>

                <li class="dropdown controll_dropdown">
                    <a href="#" class="dropdown-toggle t-toggle acessibilidade" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="zoomIn">Secretarias</a>
                    <ul class="dropdown-menu dropMenu">
                        <?php
                        $qrySecretaria = mysql_query("SELECT * FROM pref_secretaria WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY nome_menu");
                        while ($menuSecretaria = mysql_fetch_assoc($qrySecretaria)) {
                        ?>
                            <li class="li-submenu">
                                <a class="a-submenu" id="sub_menu" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $secretariaVisualiza . $complemento); ?>&id=<?= $menuSecretaria['id'] ?>"><?= $menuSecretaria['nome_menu']; ?></a>
                            </li>
                            <li role="separator" class="divider"></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="dropdown controll_dropdown">
                    <a href="#" class="dropdown-toggle t-toggle acessibilidade" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="zoomIn">Servi&ccedil;os</a>
                    <ul class="dropdown-menu dropMenu">
                        <?php
                        $qryServico = mysql_query("SELECT * FROM pref_menu_modelo WHERE id IN (SELECT id_menu FROM pref_menu_site WHERE id_cliente = '$cliente' AND status = 'Ativado')ORDER BY menu ASC");
                        while ($servico = mysql_fetch_assoc($qryServico)) {

                        ?>
                            <li class="li-submenu">
                                <a class="a-submenu" id="sub_menu" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $servico['link'] . $complemento); ?>"><?= $servico['menu']; ?></a>
                            </li>
                            <li role="separator" class="divider"></li>

                        <?php
                        }
                        $qryServico2 = mysql_query("SELECT * FROM pref_submenu_modelo WHERE id IN (SELECT id_submenu FROM pref_submenu_site WHERE id_cliente = '$cliente' AND status = 'Ativado')ORDER BY menu ASC");
                        while ($servico2 = mysql_fetch_assoc($qryServico2)) {
                            array_push($servicos, $servico2);
                        ?>
                            <li class="li-submenu">
                                <a class="a-submenu" id="sub_menu" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $servico2['link'] . $complemento); ?>"><?= $servico2['menu']; ?></a>
                            </li>
                            <li role="separator" class="divider"></li>

                        <?php
                        }
                        $qryServico3 = mysql_query("SELECT * FROM pref_menu_auxiliar WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY menu ASC");
                        while ($servico = mysql_fetch_assoc($qryServico3)) {

                        ?>
                            <li class="li-submenu">
                                <a class="a-submenu" id="sub_menu" href="<?= $servico['link'] ?>" target="_blank"> <?= $servico['menu']; ?></a>
                            </li>
                            <li role="separator" class="divider"></li>

                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="dropdown controll_dropdown ">
                    <a href="<?= $CAMINHO ?>/index.php?sessao=b054603368n5b0" class="dropdown-toggle t-toggle acessibilidade">Not&iacute;cias</a>
                </li>
                <li class="dropdown controll_dropdown">
                    <a href="<?= $CAMINHO ?>/index.php?sessao=b054603368obb0" class="dropdown-toggle t-toggle acessibilidade">Obras</a>
                </li>
                <li class="dropdown controll_dropdown">
                    <a href="https://www.ingadigital.com.br/transparencia/?id_cliente=86" class="dropdown-toggle t-toggle acessibilidade">Transpar&ecirc;ncia</a>
                </li>
                <li class="dropdown controll_dropdown">
                    <a href="https://www.ingadigital.com.br/transparencia/?id_cliente=86&sessao=b054603368ljb0&ntipo" class="dropdown-toggle t-toggle acessibilidade">Legisla&ccedil;&atilde;o</a>
                </li>

                <li class="dropdown controll_dropdown">
                    <a href="#" class="dropdown-toggle t-toggle acessibilidade" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="zoomIn">Contato</a>
                    <ul class="dropdown-menu dropMenu drop_contato">
                        <li class="li-submenu">
                            <a class="a-submenu" id="sub_menu" href="<?= $CAMINHO ?>/index.php?sessao=b054603368fpb0">Fale com o Prefeito</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="li-submenu">
                            <a class="a-submenu" id="sub_menu" href="<?= $CAMINHO ?>/index.php?sessao=b054603368ctb0">Fale Conosco</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="li-submenu">
                            <a class="a-submenu" id="sub_menu" href="https://www.ingadigital.com.br/transparencia/index.php?id_cliente=86&sessao=6d4e437c9euv6d">Ouvidoria</a>
                        </li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="diario" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Di&aacute;rio Oficial</h2>
            </div>
            <div class="modal-body">
                <p><a href="http://www.ingadigital.com.br/transparencia/?id_cliente=86&sessao=b054603368d1b0" target="_blank">Prefeitura</a></p>
                <p><a href="<?= $CAMINHO ?>index.php?sessao=22baaf0c00d122" target="_blank">C&acirc;mara</a></p>
                <p></p>
                <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Fundo de Previd&ecirc;ncia
                </a>
                <div class="collapse" id="collapseExample">
                    <div class="well">
                        <a href="https://www.ingadigital.com.br/transparencia/index.php?sessao=7b8a74deb2d17b&nc=86&id_categoria=5538" target="_blank">
                            <h1>ano / 2024</h1>
                        </a>
                        <hr>
                        <br>
                        <a href="https://www.ingadigital.com.br/transparencia/index.php?sessao=7b8a74deb2d17b&nc=86&id_categoria=5772" target="_blank">
                            <h1>ano / 2025</h1>
                        </a>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="concurso-pss" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title">Concursos / PSS</h1>
            </div>
            <div class="modal-body">
                <p><a href="https://www.ingadigital.com.br/transparencia/index.php?id_cliente=86&sessao=08fdc1d0f2cs08" target="_blank">Concursos</a></p>
                <p><a href="https://www.ingadigital.com.br/transparencia/index.php?id_cliente=86&sessao=32c4d60e88c832" target="_blank">Processo Seletivo Simplificado</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>