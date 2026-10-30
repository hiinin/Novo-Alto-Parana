<!-- <script src="<?=$CAMINHO?>/partes/7-menu_rodape/menu_dropdown_rodape/menu_dropdown_rodape.js"></script> -->

<nav class="nav-menu-responsivo">

  <ul class="rodape">
    <li>
      <div class="div-menu-responsivo">
          <li class="li-menu-responsivo acessibilidade titulo">
            <h5 class="titulo">SERVI&Ccedil;OS</h5>
            <ul class="ul-submenu-responsivo">
              <?php
                $qrySubmenu = mysql_query("SELECT pref_submenu_site.id_submenu, pref_submenu_modelo.* 
                                            FROM pref_submenu_site, pref_submenu_modelo
                                            WHERE pref_submenu_site.id_submenu = pref_submenu_modelo.id 
                                            AND pref_submenu_modelo.id_menu = 5 
                                            AND pref_submenu_site.id_cliente = '$cliente'
                                            AND pref_submenu_site.status = 'Ativado' 
                                        ORDER BY menu");
                while($menuServicos = mysql_fetch_assoc($qrySubmenu)) {
              ?>

                <li class="li-submenu">
                  <a class="a-submenu" href="<?=$CAMINHO ?>index.php?sessao=<?= verifica($sequencia.$menuServicos['link'].$complemento); ?>" target="<?= $menuServicos['target']; ?>"><?= $menuServicos['menu']; ?></a>
                </li>

              <?php } ?>

              <?php 
                $qrySubmenu2 = mysql_query("SELECT * 
                                        FROM pref_menu_auxiliar 
                                        WHERE id_cliente = '$cliente' 
                                            AND status_registro = 'A'
                                        ORDER BY menu");
                while($servico = mysql_fetch_assoc($qrySubmenu2)) {
              ?>

                  <li class="li-submenu">
                    <a class="a-submenu" href="<?= $servico['link']  ?>" target="<?= $servico['target']; ?>"><?= $servico['menu']; ?></a>
                  </li>

              <?php } ?>
                
              <?php
                $qrymenusPrinci = mysql_query("SELECT pref_menu_site.id_menu, pref_menu_modelo.* 
                                                FROM pref_menu_site, pref_menu_modelo
                                                WHERE pref_menu_site.id_menu = pref_menu_modelo.id
                                                AND pref_menu_site.id_menu = '5'
                                                AND pref_menu_site.id_cliente = '$cliente'
                                                AND pref_menu_site.status = 'Ativado' 
                                            ORDER BY pref_menu_site.id_menu");
                while($menuPrinc = mysql_fetch_assoc($qrymenusPrinci)) {
              ?>

                  <li class="li-submenu">
                    <a class="a-submenu" href="<?=$CAMINHO ?>index.php?sessao=<?= verifica($sequencia.$menuPrinc['link'].$complemento); ?><?= $menuPrinc['link'] == 'nc' ? '&id=1622' : '' ?>" target="<?= $menuPrinc['target']; ?>"><?= $menuPrinc['menu']; ?></a>
                  </li>

              <?php } ?>
            </ul>
          </li>
          <li class="li-menu-responsivo acessibilidade">
            <h5 class="titulo">IMPRENSA</h5>
            
            <ul class="ul-submenu-responsivo">
              <li class="li-submenu">
                <a class="a-submenu" href="<?=$CAMINHO ?>index.php?sessao=<?= verifica($sequencia.$agendaLista.$complemento); ?>">Agenda Cultural</a>
              </li>
              <li class="li-submenu">
                <a class="a-submenu" href="<?=$CAMINHO ?>index.php?sessao=<?= verifica($sequencia.$eventoLista.$complemento); ?>">Galeria de Eventos</a>
              </li>
              <li class="li-submenu">
                <a class="a-submenu" href="<?=$CAMINHO ?>index.php?sessao=<?= verifica($sequencia.$videoLista.$complemento); ?>">Galeria de V&iacute;deos</a>
              </li>
              <li class="li-submenu">
                <a class="a-submenu" href="<?=$CAMINHO ?>index.php?sessao=<?= verifica($sequencia.$informativoLista.$complemento); ?>">Informativos</a>
              </li>
              <li class="li-submenu">
                <a class="a-submenu" href="<?=$CAMINHO ?>index.php?sessao=<?= verifica($sequencia.$noticiaLista.$complemento); ?>">Not&iacute;cias</a>
              </li>
            </ul>
          </li>
          <li class="li-menu-responsivo acessibilidade titulo">
            <h5 class="titulo">CONTATO</h5>
            <ul class="ul-submenu-responsivo">
              <li class="li-submenu">
                <a class="a-submenu" href="http://www.ingadigital.com.br/transparencia/?id_cliente=<?= $cliente ?>&sessao=<?= verifica($sequencia.$contato.$complemento); ?>" target="_blank">Contato</a>
              </li>
              <li class="li-submenu">
                <a class="a-submenu" href="<?=$CAMINHO ?>index.php?sessao=<?= verifica($sequencia.$controladoria.$complemento); ?>">Controladoria</a>
              </li>
              <li class="li-submenu">
                <a class="a-submenu" href="<?=$CAMINHO ?>index.php?sessao=<?= verifica($sequencia.$falePrefeito.$complemento); ?>">Fale com o Prefeito</a>
              </li>
              <li class="li-submenu">
                <a class="a-submenu" href="http://www.ingadigital.com.br/transparencia/?id_cliente=<?= $cliente?>&sessao=b054603368uvb0" target="_blank">Ouvidoria</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div id="div-opacity"></div>
    </li>
  </ul>
</nav>