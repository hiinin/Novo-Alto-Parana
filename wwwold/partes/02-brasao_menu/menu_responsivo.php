<div class="hidden-lg hidden-md hidden-sm">
    <div class="container">
        <div class="controle_responsivo">
            <button class="uk-button uk-button-default uk-margin-small-right " id="btn_responsivo" type="button" uk-toggle="target: #offcanvas-usage"><span uk-icon="menu"></span> Menu Site</button>
        </div>
    </div>
</div>



<div id="offcanvas-usage" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>
        
        <h3>MENU SITE</h3>

        <div class="controle_responsivo_menu">
            <li class="dropdown controll_dropdown">
                <a href="#" class="dropdown-toggle t-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="zoomIn">A Prefeitura</a>
                <ul class="dropdown-menu">
                    <?php
                    $qryNossaCidade = mysql_query("SELECT * FROM pref_nossa_cidade WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY nome_menu");
                    while ($menuNossaCidade = mysql_fetch_assoc($qryNossaCidade)) {
                    ?>
                        <li class="li-submenu">
                            <a class="a-submenu" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $nossacidade . $complemento); ?>&id=<?= $menuNossaCidade['id'] ?>"><?= $menuNossaCidade['nome_menu']; ?></a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="li-submenu">
                            <a class="a-submenu" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $gestaoatual . $complemento); ?>">Conhe&ccedil;a o Prefeito</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="li-submenu">
                            <a class="a-submenu" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $galeriaPrefeito . $complemento); ?>">Galeria de Prefeitos</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </li>

            <li class="dropdown controll_dropdown">
                <a href="#" class="dropdown-toggle t-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="zoomIn">Secretarias</a>
                <ul class="dropdown-menu">
                    <?php
                    $qrySecretaria = mysql_query("SELECT * FROM pref_secretaria WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY nome_menu");
                    while ($menuSecretaria = mysql_fetch_assoc($qrySecretaria)) {
                    ?>
                        <li class="li-submenu">
                            <a class="a-submenu" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $secretariaVisualiza . $complemento); ?>&id=<?= $menuSecretaria['id'] ?>"><?= $menuSecretaria['nome_menu']; ?></a>
                        </li>
                        <li role="separator" class="divider"></li>
                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li class="dropdown controll_dropdown">
                <a href="#" class="dropdown-toggle t-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="zoomIn">Servi&ccedil;os</a>
                <ul class="dropdown-menu">
                    <?php
                    $qryServico = mysql_query("SELECT * FROM pref_menu_modelo WHERE id IN (SELECT id_menu FROM pref_menu_site WHERE id_cliente = '$cliente' AND status = 'Ativado')ORDER BY menu ASC");
                    while ($servico = mysql_fetch_assoc($qryServico)) {

                    ?>
                        <li>
                            <a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $servico['link'] . $complemento); ?>"><?= utf8_encode($servico['menu']); ?></a>
                        </li>
                        <li role="separator" class="divider"></li>

                    <?php
                    }
                    $qryServico2 = mysql_query("SELECT * FROM pref_submenu_modelo WHERE id IN (SELECT id_submenu FROM pref_submenu_site WHERE id_cliente = '$cliente' AND status = 'Ativado')ORDER BY menu ASC");
                    while ($servico2 = mysql_fetch_assoc($qryServico2)) {
                        array_push($servicos, $servico2);
                    ?>
                        <li>
                            <a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $servico2['link'] . $complemento); ?>"><?= utf8_encode($servico2['menu']); ?></a>
                        </li>
                        <li role="separator" class="divider"></li>

                    <?php
                    }
                    $qryServico3 = mysql_query("SELECT * FROM pref_menu_auxiliar WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY menu ASC");
                    while ($servico = mysql_fetch_assoc($qryServico3)) {

                    ?>
                        <li>
                            <a class="acessibilidade" href="<?= $servico['link'] ?>" target="_blank"> <?= utf8_encode($servico['menu']); ?></a>
                        </li>
                        <li role="separator" class="divider"></li>

                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li class="dropdown controll_dropdown">
                <a href="<?= $CAMINHO ?>/index.php?sessao=b054603368n5b0" class="dropdown-toggle t-toggle">Not&iacute;cias</a>
            </li>
            <li class="dropdown controll_dropdown">
                <a href="<?= $CAMINHO ?>/index.php?sessao=b054603368obb0" class="dropdown-toggle t-toggle">Obras</a>
            </li>
            <li class="dropdown controll_dropdown">
                <a href="https://www.ingadigital.com.br/transparencia/?id_cliente=86" class="dropdown-toggle t-toggle">Transpar&ecirc;ncia</a>
            </li>
            <li class="dropdown controll_dropdown">
                <a href="https://www.ingadigital.com.br/transparencia/?id_cliente=86&sessao=b054603368ljb0&ntipo" class="dropdown-toggle t-toggle">Legisla&ccedil;&atilde;o</a>
            </li>
            <li class="dropdown controll_dropdown">
                <a href="#" class="dropdown-toggle t-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="zoomIn">Contato</a>
                <ul class="dropdown-menu drop_contato">
                    <li class="li-submenu">
                        <a class="a-submenu" href="<?= $CAMINHO ?>/index.php?sessao=b054603368fpb0">Fale com o Prefeito</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li class="li-submenu">
                        <a class="a-submenu" href="<?= $CAMINHO ?>/index.php?sessao=b054603368ctb0">Fale Conosco</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li class="li-submenu">
                        <a class="a-submenu" href="https://www.ingadigital.com.br/transparencia/index.php?id_cliente=86&sessao=6d4e437c9euv6d">Ouvidoria</a>
                    </li>
                </ul>
            </li>
        </div>
    </div>
</div>