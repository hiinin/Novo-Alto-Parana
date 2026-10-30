<div class="div-horario-atendimento">
  <div class="container">
    <div class="row">
      <div class="col-sm horario">
        <span class="fonte-horario"><span style="font-weight: bold; ">HOR&Aacute;RIO DE ATENDIMENTO:</span>  <?= $configuracao['horario_atendimento'] ?></span>
      </div>
    </div>
  </div>
</div>

<div class="" id="fundoBanner">
  <div class="container">
    <div class="endereco-baixo">
      <div class="box-logo-baixo">
        <a class="logo" href="<?= $CAMINHO ?>">
          <div class="div-logo-baixo">
            <img src="<?= $CAMINHO ?>/images/logo2.svg" alt="Logo">
          </div>
        </a>

      </div>
      <div class="div-endereco-rodape acessibilidade">
          <div class="box-topo">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <?= $configuracao['endereco'] ?>
            <span class="span-traco-left">|</span>
          </div>
          <div class="box-topo">
            <i class="fa fa-phone" aria-hidden="true"></i> <b><?= $configuracao['telefone'] ?></b>
            <span class="span-traco-left">|</span>
          </div>
          <div class="box-topo">
            <i class="fa fa-commenting" aria-hidden="true"></i> <b>0800-649 3472</b>
            <span class="span-traco-left">|</span>
          </div>
          <div class="box-topo">
            <i class="fa fa-envelope" aria-hidden="true"></i> <?= $configuracao['email'] ?>
          </div>

        </div>
    </div>
  </div>
</div>


<div class="div-menu-rodape acessibilidade1">
  <div class="container">
    <div class="menu-baixo">
      <div class="col-sm-2 municipio">
        <div class="titulo-municipio">
          <h5>PREFEITURA</h5>
        </div>
        <?php
        $qryNossaCidade = mysql_query("SELECT * 
                                                FROM pref_nossa_cidade 
                                                WHERE id_cliente = '$cliente' 
                                                AND status_registro = 'A' 
                                                ORDER BY nome_menu");?>
      <div class="dropdown">
      <button class="btn btn-rodape btn-primary dropdown-toggle" style="border-radius: 0px;" type="button" data-toggle="dropdown">Munic&iacute;pio
    <span class="caret"></span></button>
          
        

        <?php  while ($menuNossaCidade = mysql_fetch_assoc($qryNossaCidade)) {
        ?>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $nossacidade . $complemento); ?>&id=<?= $menuNossaCidade['id'] ?>"><?= $menuNossaCidade['nome_menu']; ?></a>
        </div>
        <?php
        }
        ?>
        </div>
      </div>

      <div class="box-links">
        <div class="titulo-municipio">
          <h5>LINKS</h5>
        </div>
        <div class="links">
          <a href="https://www1.consignet.com.br/portal/#!/ivaipora" target="_blank">
            <img src="<?= $CAMINHO ?>/images/consignet.svg">
          </a>
          <a href="https://api.whatsapp.com/send?phone=5543984389762&text=Oi!%20Estou%20entrando%20em%20contato%20pelo%20chat%20Whatsapp%20do%20site.%20Poderia%20me%20ajudar?" target="_blank">
            <img src="<?= $CAMINHO ?>/images/iluminacao_publica.svg">
          </a>
          <a href="https://www.eprefeituras.com.br/ouvidoria/ivaipora/ouvidoria-inicio.php" target="_blank">
            <img src="<?= $CAMINHO ?>/images/ouvidoria-rodape.svg">
          </a>
          <a href="http://www.salasdoempreendedor.com.br/consulta.php?cidade=78" target="_blank">
            <img src="<?= $CAMINHO ?>/images/sala_empreendedor_rodape.svg">
          </a>
        </div>
      </div>

      <div class="box-canais">
        <div class="titulo-municipio">
          <h5>CANAIS</h5>
        </div>
        <div class="canais">
          <a href="https://www.facebook.com/prefeituramunicipalivaipora/" target="_blank">
            <img src="<?= $CAMINHO ?>/images/facebook_rodape.svg">
          </a>
          <a href="https://www.instagram.com/prefeituramunicipaldeivaipora/" target="_blank">
            <img src="<?= $CAMINHO ?>/images/instagram_rodape.svg">
          </a>
        </div>
      </div>

      <div class="box-atendimento">
        <div class="titulo-municipio">
          <h5>ATENDIMENTO</h5>
        </div>
        <div>
          <a href="" class="btn-solicitacao">FA&Ccedil;A SUA SOLICITA&Ccedil;&Atilde;O</a>
        </div>
      </div>

    </div>
  </div>
</div>