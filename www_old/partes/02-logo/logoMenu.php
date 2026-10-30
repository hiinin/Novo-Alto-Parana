<div class="cor-fundo">
  <div class="container topo-bandeira">
    <div class="topo-pref">
      <div class="busca-redes">
        <div id="conteudo-pesquisa" class="col-lg-10 col-md-10 hidden-xs">
          <form name="buscanews" action="<?= $CAMINHO ?>/index.php?sessao=<?= verifica($sequencia . $buscar . $complemento); ?>" method="POST" id="form-pesquisa" onSubmit="return validaBusca();">
            <div class="input-group">
              <input type="text" class="acessibilidade form-control placeholder1" id="ipt-pesquisa" name="busca" value="<?= $_POST['ipt-pesquisa'] ?>" title="Campo pesquisar">
              <span class="input-group-addon" style="border: 1px solid #0339A6;">
                <!-- <button class="fa fa-search" style="background:transparent;border:none;color: #c3b6b6;" aria-label="Pesquisar"></button> -->
                <img src="<?= $CAMINHO ?>images/lupa.svg" class="responsive-img" alt="Lupa" />
              </span>
            </div>
          </form>
        </div>
        <div class="pesquisa hidden-lg hidden-md hidden-sm hidden-xs">
          <a href="#openModal">
            <img src="<?= $CAMINHO ?>/assets/images/procurar.svg" alt="Procurar"/>
          </a>
        </div>
      </div>

      <div class="logo-pref">
        <a href="<?= $CAMINHO ?>">
          <img src="<?= $CAMINHO ?>images/Logo.png" class="responsive-img" alt="Logo"/>
        </a>
      </div>

      <div class="acesso-rapido hidden-xs">
        <li class="dropdown">
          <a href="#" class="titulo-acesso dropdown-toggle acessibilidade" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            ACESSO R&Aacute;PIDO 
            <i class="fa fa-bars" aria-hidden="true"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Diario Oficial </a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Portal da Transparencia</a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Legislacao</a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Licitacoes</a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Nota Fiscal Eletronica</a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Tributos WEB</a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Concursos</a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Portal do Cidadao</a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Bolsa Familia</a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Requerimentos</a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Hospitais e Postos</a></li>
            <li><a class="acessibilidade" href="<?= $CAMINHO ?>index.php?sessao=b054603368n5b0">Instituicoes de Ensino</a></li>
          </ul>
        </li>
      </div>

    </div>
  </div>

  <div id="openModal" class="modalDialog">
    <div> <a href="#close" title="Close" class="close">X</a>

      <div class="overlay-content">
        <form name="buscanews" class="" action="<?= $CAMINHO ?>index.php?sessao=<?= verifica($sequencia . $buscar . $complemento); ?>" method="post" onSubmit="return validaBusca();" id="form-pesquisa">
          <div class="col-lg-12 busca">
            <input type="text" class="input-text" placeholder="O que voc&ecirc; est&aacute; procurando?" name="search">
            <button type="submit btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>