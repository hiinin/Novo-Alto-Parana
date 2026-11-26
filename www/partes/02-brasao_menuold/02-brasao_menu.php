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
                <a href="<?= $CAMINHO ?>/index.php?sessao=b054603368ctb0" class="link_fale acessibilidade">Fale Conosco</a>
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
                                <a class="a-submenu" id="sub_menu" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $servico['link'] . $complemento); ?>"><?= utf8_encode($servico['menu']); ?></a>
                            </li>
                            <li role="separator" class="divider"></li>

                        <?php
                        }
                        $qryServico2 = mysql_query("SELECT * FROM pref_submenu_modelo WHERE id IN (SELECT id_submenu FROM pref_submenu_site WHERE id_cliente = '$cliente' AND status = 'Ativado')ORDER BY menu ASC");
                        while ($servico2 = mysql_fetch_assoc($qryServico2)) {
                            array_push($servicos, $servico2);
                        ?>
                            <li class="li-submenu">
                                <a class="a-submenu" id="sub_menu" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $servico2['link'] . $complemento); ?>"><?= utf8_encode($servico2['menu']); ?></a>
                            </li>
                            <li role="separator" class="divider"></li>

                        <?php
                        }
                        $qryServico3 = mysql_query("SELECT * FROM pref_menu_auxiliar WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY menu ASC");
                        while ($servico = mysql_fetch_assoc($qryServico3)) {

                        ?>
                            <li class="li-submenu">
                                <a class="a-submenu" id="sub_menu" href="<?= $servico['link'] ?>" target="_blank"> <?= utf8_encode($servico['menu']); ?></a>
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