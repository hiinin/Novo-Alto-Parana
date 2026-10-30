<div class=" fundo-rodape-menu ">

    <div class="container">

        <div class="rodape-menu ">
            <div class="menu-rodape hidden-xs col-sm-12 col-md-12 col-lg-12 ">
                <div class="municipio col-lg-2 col-md-2 col-sm-2  col-menu ">
                    <li style="list-style: none" class="acessibilidade rodape-titulo acessibilidade">O Munic&iacute;pio</li>
                    <ul class="sub-rodape">
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

                                <li class="sub-rodape-titulo">
                                    <a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $nossacidade . $complemento); ?>&id=<?= $menuNossaCidade['id'] ?>">
                                        <?= $menuNossaCidade['nome_menu']; ?>
                                    </a>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="gestao col-lg-3 col-md-3 col-sm-3  col-menu">
                    <li style="list-style: none" class="acessibilidade rodape-titulo acessibilidade">Gest&atilde;o Atual</li>
                    <ul class="sub-rodape">
                        <li class="sub-rodape-titulo"><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368vpb0">Conhe&ccedil;a o Prefeito</a></li>
                        <li class="sub-rodape-titulo"><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368fpb0">Fale com o Prefeito</a></li>
                    </ul>
                </div>
                <div class="secretaria col-lg-3 col-md-3 col-sm-2 no-padding col-menu">
                    <li style="list-style: none;" class="acessibilidade  rodape-titulo acessibilidade">Secretarias</li>
                    <ul class="sub-rodape">
                        <?php
                        $qrySecretaria = mysql_query("SELECT * 
                                                        FROM pref_secretaria 
                                                        WHERE id_cliente = '$cliente' 
                                                        AND status_registro = 'A' 
                                                    ORDER BY nome_menu");
                        while ($menuSecretaria = mysql_fetch_assoc($qrySecretaria)) {
                        ?>
                            <li class="sub-rodape-titulo">
                                <a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $secretariaVisualiza . $complemento); ?>&id=<?= $menuSecretaria['id'] ?>"><?= $menuSecretaria['nome_menu']; ?></a>

                            </li>

                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="servicos col-lg-3 col-md-2 col-sm-3  col-menu">
                    <li style="list-style: none;" class="rodape-titulo acessibilidade">Servi&ccedil;os</a></li>
                    <ul class="sub-rodape">
                        <?php
                        $qryServico = mysql_query("SELECT * FROM pref_menu_modelo WHERE id IN (SELECT id_menu FROM pref_menu_site WHERE id_cliente = '$cliente' AND status = 'A')");
                        while ($servico = mysql_fetch_assoc($qryServico)) {
                            array_push($servicos, $servico);
                        ?>
                            <li class="sub-rodape-titulo">
                                <a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $servico['link'] . $complemento); ?>"><?= $servico['menu']; ?></a>
                            </li>
                        <?php
                        }
                        $qryServico2 = mysql_query("SELECT * FROM pref_submenu_modelo WHERE id IN (SELECT id_submenu FROM pref_submenu_site WHERE id_cliente = '$cliente' AND status = 'A')");
                        while ($servico2 = mysql_fetch_assoc($qryServico2)) {
                            array_push($servicos, $servico2);
                        ?>
                            <li class="sub-rodape-titulo">
                                <a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $servico2['link'] . $complemento); ?>"><?= $servico2['menu']; ?></a>
                            </li>
                        <?php
                        }
                        $qryServico3 = mysql_query("SELECT * FROM pref_menu_auxiliar WHERE id_cliente = '$cliente' AND status_registro = 'A'");
                        while ($servico = mysql_fetch_assoc($qryServico3)) {
                            array_push($servicos, $servico);
                        ?>
                            <li class="sub-rodape-titulo">
                                <a class="acessibilidade" href="<?= $servico['link'] ?>" target="_blank"> <?= $servico['menu']; ?></a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2 no-padding col-menu">
                    <a href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0" class="rodape-titulo-imprensa acessbilidade"> Imprensa </a>

                    <ul>
                        <li style="list-style: none" class="acessibilidade rodape-titulo distanciamento-menu acessibilidade">CONTATO</li>
                        <ul class="sub-rodape">
                            <li class="sub-rodape-titulo"><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368fpb0">Fale com o Prefeito</a></li>
                            <li class="sub-rodape-titulo"><a class="acessibilidade" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $contato . $complemento); ?>">Fale Conosco</a></li>
                            <li class="sub-rodape-titulo"><a class="acessibilidade" href="http://www.ingadigital.com.br/transparencia/index.php?id_cliente=<?= $cliente ?>&sessao=6d4e437c9euv6d" target="_blank">Ouvidoria</a></li>
                        </ul>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>