<script src="<?= $CAMINHO ?>/partes/2-logo_menu/menu_responsivo/menu.js"></script>

<nav class="nav-menu-responsivo">
  <ul class="ul-menu">


    <li>
      <div class="div-menu-responsivo">

        <ul class="ul-menu-responsivo" id="navContainer">

          <li class="li-menu" id="button-menu-home">
            <div style="display: flex;justify-content: flex-end;">
              <a href="<?= $CAMINHO ?>"><i class="fa fa-home icons-ul acessibilidade"></i></a>
            </div>
          </li>
          <li class="dropdown li-menu-responsivo">
            <a href="#" class="acessibilidade dropdown-toggle menu-padding" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="fadeIn">
              <div class="tamanho">Munic&iacute;pio
                <i class="fa fa-chevron-down pull-right hidden-lg hidden-md hidden-sm"></i>
                <span class="caret hidden-xs"></span>
              </div>
            </a>
            <ul class="dropdown-menu">
              <?php
              $qryNossaCidade = mysql_query("SELECT * 
                                                     FROM pref_nossa_cidade 
                                                    WHERE id_cliente = '$cliente' 
                                                      AND status_registro = 'A' 
                                                 ORDER BY nome_menu");
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

                  <li class="menu-padding">
                    <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $nossacidade . $complemento); ?>&id=<?= $menuNossaCidade['id'] ?>">
                      <?= $menuNossaCidade['nome_menu']; ?>
                    </a>
                  </li>
              <?php
                }
              }
              ?>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=b054603368ppb0">Galeria de Fotos</a>
              </li>
            </ul>
          </li>
          <li class="dropdown li-menu-responsivo">
            <a href="#" class="acessibilidade dropdown-toggle menu-padding" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="fadeIn">
              <div class="tamanho">Gest&atilde;o Atual
                <i class="fa fa-chevron-down pull-right hidden-lg hidden-md hidden-sm"></i>
                <span class="caret hidden-xs"></span>
              </div>
            </a>
            <ul class="dropdown-menu">
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=b054603368vpb0">Conhe&ccedil;a o Prefeito</a>
              </li>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $visualizarVereadores . $complemento); ?>">Composi&ccedil;&atilde;o da C&acirc;mara</a>
              </li>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $galeriaPrefeito . $complemento); ?>">Galeria de Prefeitos</a>
              </li>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=b054603368d0b0">Nosso Compromisso</a>
              </li>
            </ul>
          </li>
          <li class="dropdown li-menu-responsivo">
            <a class="acessibilidade dropdown-toggle menu-padding" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="fadeIn">
              <div class="tamanho">Departamentos
                <i class="fa fa-chevron-down pull-right hidden-lg hidden-md hidden-sm"></i>
                <span class="caret hidden-xs"></span>
              </div>
            </a>
            <ul class="dropdown-menu">
              <?php
              $qrySecretaria = mysql_query("SELECT * 
                                                        FROM pref_secretaria 
                                                       WHERE id_cliente = '$cliente' 
                                                         AND status_registro = 'A' 
                                                    ORDER BY nome_menu");
              while ($menuSecretaria = mysql_fetch_assoc($qrySecretaria)) {
              ?>
                <li class="menu-padding">
                  <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $secretariaVisualiza . $complemento); ?>&id=<?= $menuSecretaria['id'] ?>">
                    <?= $menuSecretaria['nome_menu']; ?>
                  </a>
                </li>
              <?php
              }
              ?>

            </ul>

          </li>

          <li class="dropdown li-menu-responsivo">
            <a class="acessibilidade dropdown-toggle menu-padding" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="fadeIn">
              <div class="tamanho">Servi&ccedil;os
                <i class="fa fa-chevron-down pull-right hidden-lg hidden-md hidden-sm"></i>
                <span class="caret hidden-xs"></span>
              </div>
            </a>
            <ul class="dropdown-menu">
              <?php
              $qryServico = mysql_query("SELECT * 
                                                 FROM pref_menu_modelo 
                                                WHERE id IN (SELECT id_menu 
                                                               FROM pref_menu_site 
                                                              WHERE id_cliente = '$cliente' 
                                                                AND status = 'Ativado')");
              while ($servico = mysql_fetch_assoc($qryServico)) {
                array_push($servicos, $servico);
              ?>
                <li class="menu-padding">
                  <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $servico['link'] . $complemento); ?>"><?= $servico['menu']; ?></a>
                </li>
              <?php
              }
              $qryServico2 = mysql_query("SELECT * 
                                                  FROM pref_submenu_modelo 
                                                 WHERE id IN (SELECT id_submenu 
                                                                FROM pref_submenu_site 
                                                               WHERE id_cliente = '$cliente' 
                                                                 AND status = 'Ativado')");
              while ($servico2 = mysql_fetch_assoc($qryServico2)) {
                array_push($servicos, $servico2);
              ?>
                <li class="menu-padding">
                  <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $servico2['link'] . $complemento); ?>"><?= $servico2['menu']; ?></a>
                </li>
              <?php
              }
              $qryServico3 = mysql_query("SELECT * 
                                                  FROM pref_menu_auxiliar 
                                                 WHERE id_cliente = '$cliente' 
                                                   AND status_registro = 'A' 
                                              ORDER BY menu ASC");
              while ($servico3 = mysql_fetch_assoc($qryServico3)) {
                array_push($servicos, $servico);
              ?>
                <li class="menu-padding">
                  <a class="acessibilidade dpdown-font" href="<?= $servico3['link'] ?>" target="<?= $servico3['target'] ?>"> <?= $servico3['menu']; ?></a>
                </li>
              <?php
              }
              ?>

              <?php
              $qryFormulario = mysql_query("SELECT * 
                                                        FROM formulario 
                                                       WHERE id_cliente = '$cliente' 
                                                         AND status = 'A' 
                                                         AND status_registro = 'A'
                                                    ORDER BY titulo ASC");
              while ($menuFormulario = mysql_fetch_assoc($qryFormulario)) {
              ?>

                <li class="menu-padding">
                  <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $formulario . $complemento); ?>&id=<?= $menuFormulario['id'] ?>"><?= $menuFormulario['titulo']; ?></a>
                </li>

              <?php
              }
              ?>

            </ul>

          </li>

          <!-- <li class="dropdown li-menu-responsivo">
            <a class="acessibilidade dropdown-toggle menu-padding" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="fadeIn">
              <div class="tamanho">IMPRENSA
                <i class="fa fa-chevron-down pull-right hidden-lg hidden-md hidden-sm"></i>
                <span class="caret hidden-xs"></span>
              </div>
            </a>
            <ul class="dropdown-menu">
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $agendaLista . $complemento); ?>">Agenda Cultural</a>
              </li>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $eventoLista . $complemento); ?>">Galeria de Eventos</a>
              </li>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $videoLista . $complemento); ?>">Galeria de V&iacute;deos</a>
              </li>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $informativoLista . $complemento); ?>">Informativos</a>
              </li>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $noticiaLista . $complemento); ?>">Not&iacute;cias</a>
              </li>
            </ul>
          </li> -->

          <li class="dropdown li-menu-responsivo">
            <a class="acessibilidade dropdown-toggle menu-padding" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="fadeIn">
              <div class="tamanho">Contato
                <i class="fa fa-chevron-down pull-right hidden-lg hidden-md hidden-sm"></i>
                <span class="caret hidden-xs"></span>
              </div>
            </a>
            <ul class="dropdown-menu">
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="http://www.ingadigital.com.br/transparencia/?id_cliente=<?= $cliente ?>&sessao=<?= verifica($sequencia . $contato . $complemento); ?>" target="_blank">Contato</a>
              </li>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $controladoria . $complemento); ?>">Controladoria</a>
              </li>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $falePrefeito . $complemento); ?>">Fale com o Prefeito</a>
              </li>
              <li class="menu-padding">
                <a class="acessibilidade dpdown-font" href="https://www.eprefeituras.com.br/ouvidoria/ivaipora/ouvidoria-inicio.php" target="_blank">Ouvidoria</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div id="div-opacity"></div>
    </li>
    <li class="li-menu">
      <button id="button-menu-responsivo"><i class="fa fa-bars icons-ul" aria-hidden="true"></i></button>
    </li>
  </ul>
</nav>