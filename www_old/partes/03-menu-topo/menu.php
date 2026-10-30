<div class="menu-topo no-padding">
    <div class="container no-padding">
        <div class="linha col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">

            <nav class="navbar navbar-default">
                <div class="responsivo navbar-header hidden-lg hidden-md">
                    <a href="#busca-noticia" class="btn hidden-md hidden-sm hidden-lg pull-left" id="btn-hidden-pesquisa"><i class="fa fa-search" aria-hidden="true">.</i></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav menu-topo-nav">
                        <li class="dropdown hidden-xs hidden-sm">
                            <a href=" <?= $CAMINHO ?>"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle acessibilidade" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Munic&iacute;pio <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
                            <ul class="dropdown-menu">
                                <?php
                                $qryNossaCidade = mysql_query("SELECT * FROM pref_nossa_cidade WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY nome_menu");
                                if (mysql_num_rows($qryNossaCidade) > 0) {
                                    $w = false;
                                    while ($menuNossaCidade = mysql_fetch_assoc($qryNossaCidade)) {
                                        if ($w) {
                                ?>

                                        <?php
                                        }
                                        $w = true;
                                        array_push($municipio, $menuNossaCidade);
                                        ?>

                                        <li>
                                            <a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $nossacidade . $complemento); ?>&id=<?= $menuNossaCidade['id'] ?>">
                                                <?= $menuNossaCidade['nome_menu']; ?>
                                            </a>
                                        </li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                        </li>


                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle acessibilidade drop-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gest&atilde;o Atual <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368gab0">Conhe&ccedil;a o Prefeito</a></li>

                                <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368gpb0">Galeria de Prefeitos</a></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle acessibilidade" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Secretarias <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
                            <ul class="dropdown-menu">
                                <?php
                                $qrySecretaria = mysql_query("SELECT * 
                                                        FROM pref_secretaria 
                                                        WHERE id_cliente = '$cliente' 
                                                        AND status_registro = 'A' 
                                                    ORDER BY nome_menu");
                                while ($menuSecretaria = mysql_fetch_assoc($qrySecretaria)) {
                                ?>
                                    <li>
                                        <a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $secretariaVisualiza . $complemento); ?>&id=<?= $menuSecretaria['id'] ?>"><?= $menuSecretaria['nome_menu']; ?></a>

                                    </li>

                                <?php
                                }
                                ?>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle acessibilidade " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servi&ccedil;os <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
                            <ul class="dropdown-menu">
                                    <?php
                                $qryServico = mysql_query("SELECT * FROM pref_menu_modelo WHERE id IN (SELECT id_menu FROM pref_menu_site WHERE id_cliente = '$cliente' AND status = 'A')");
                                while ($servico = mysql_fetch_assoc($qryServico)) {
                                    array_push($servicos, $servico);
                                ?>
                                    <li class="acessibilidade">
                                        <a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $servico['link'] . $complemento); ?>"><?= $servico['menu']; ?></a>
                                    </li>
                                <?php
                                }
                                $qryServico2 = mysql_query("SELECT * FROM pref_submenu_modelo WHERE id IN (SELECT id_submenu FROM pref_submenu_site WHERE id_cliente = '$cliente' AND status = 'A')");
                                while ($servico2 = mysql_fetch_assoc($qryServico2)) {
                                    array_push($servicos, $servico2);
                                ?>
                                    <li class="acessibilidade">
                                        <a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $servico2['link'] . $complemento); ?>"><?= $servico2['menu']; ?></a>
                                    </li>
                                <?php
                                }
                                $qryServico3 = mysql_query("SELECT * FROM pref_menu_auxiliar WHERE id_cliente = '$cliente' AND status_registro = 'A'");
                                while ($servico = mysql_fetch_assoc($qryServico3)) {
                                    array_push($servicos, $servico);
                                ?>
                                    <li class="acessibilidade">
                                        <a class="acessibilidade" href="<?= $servico['link'] ?>" target="_blank"> <?= $servico['menu']; ?></a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>


                        <li>
                            <a href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0" class="acessibilidade">Imprensa </a>
                            <!-- <ul class="dropdown-menu">
                                <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Not&iacute;cias</a></li>
                            </ul> -->
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle acessibilidade" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contato <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
                            <ul class="dropdown-menu">

                                <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368fpb0">Fale com o Prefeito</a></li>                        
                                <li><a href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $contato . $complemento); ?>">Fale Conosco</a></li>
                                <li><a href="http://www.ingadigital.com.br/transparencia/index.php?id_cliente=<?= $cliente ?>&sessao=6d4e437c9euv6d" target="_blank">Ouvidoria</a></li>

                            </ul>
                        </li>

                        <div class="pesquisa hidden-lg hidden-sm hidden-xs hidden-md">
                            <a href="#openModal">
                                <img src="<?= $CAMINHO ?>/assets/images/pro.svg">
                            </a>
                        </div>

                    </ul>
                </div>
                <div id="busca-noticia" class="modalDialog">
                    <div> <a href="#close" title="Close" class="close">X</a>

                        <div class="overlay-content">
                            <form name="buscanews" class="" action="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $buscar . $complemento); ?>" method="post" onSubmit="return validaBusca();" id="form-pesquisa">
                                <div class="bloco-input-pesquisa col-lg-12 busca">
                                    <input type="text" class="input-text" placeholder="Buscar" name="search">
                                    <button type="submit btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </nav>

    </div>
</div>