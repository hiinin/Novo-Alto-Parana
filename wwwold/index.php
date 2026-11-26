<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">

  <?php

  $cliente = '86';


  $responsivo = true;
  $inga_captcha = true;

  $ppb = "../../../";

  include $ppb . "controlemunicipal/privado/site/prefeitura/conexao.php";
  include $ppb . "controlemunicipal/privado/site/geral/configuracao.php";
  $CAMINHO = "https://ingainformatica.com.br/altoparana/www/";

  date_default_timezone_set('America/Sao_Paulo');
  setlocale(LC_TIME, "");
  setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

  $configuracao = mysql_fetch_assoc(mysql_query("SELECT cliente_configuracao.*, 
                                                            municipio.nome municipio,
                                                            estado.nome estado
                                                        FROM cliente_configuracao
                                                    LEFT JOIN municipio 
                                                        ON cliente_configuracao.id_municipio = municipio.id
                                                    LEFT JOIN estado 
                                                        ON municipio.id_estado = estado.id
                                                        WHERE cliente_configuracao.id_cliente = '$cliente'
                                                        AND cliente_configuracao.status_registro = 'A' LIMIT 1"));

  $sql_fotobanner = mysql_query("SELECT * 
                                    FROM pref_banner 
                                    WHERE id_cliente = '$cliente' 
                                    AND status_registro = 'A' 
                                    ORDER BY id 
                                    DESC LIMIT 9");

  $banners = array();

  while ($foto_destaque   = mysql_fetch_array($sql_fotobanner)) {
    array_push($banners, $foto_destaque);
  }

  $tipo = "P";
  $title = "Prefeitura Municipal de Alto Paran&aacute;";
  include $ppb . "controlemunicipal/privado/site/geral/tags_compartilhamento.php";
  ?>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?= $CAMINHO ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo $CAMINHOCMGERAL; ?>/js/jquery-1.11.3.min.js"></script>

  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta http-equiv="Content-Language" content="PT-BR" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Prefeitura, prefeitura municipal de Alto Paran&aacute;" />
  <meta name="author" content="Pessin - Ing&aacute; Digital Ltda. - www.ingadigital.com.br" />
  <meta name="URL" content="https://altoparana.pr.gov.br/" />
  <meta name="language" content="portuguese" />
  <meta name="revisit-after" content="2 days" />
  <meta name="document-state" content="Dynamic" />
  <meta name="document-distribution" content="Global" />

  <link rel="shortcut icon" href="<?= $CAMINHO ?>images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.10.0/css/alertify.min.css" />
  <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.10.0/css/themes/default.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Exo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= $CAMINHO ?>/css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="<?= $CAMINHO ?>/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="<?= $CAMINHO ?>/css/bootstrap-dropdownhover.min.css">
  <link rel="stylesheet" type="text/css" href="<?= $CAMINHO ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="<?= $CAMINHO ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="<?= $CAMINHO ?>/css/inga_css.css" />
  <link rel="stylesheet" type="text/css" href="<?= $CAMINHO ?>/css/media.css" />
  <link rel="stylesheet" type="text/css" href="<?= $CAMINHO ?>/cookie/style.css">

  <link rel="stylesheet" type="text/css" href="<?= $CAMINHO ?>/css/main.css">


  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.10/dist/css/uikit.min.css" />

  <!-- UIkit JS -->
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.23.10/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.23.10/dist/js/uikit-icons.min.js"></script>



  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-28GG3LXGG0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-28GG3LXGG0');
  </script>

  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


  <!-- ACESSIBILIDADE -->
  <link rel="alternate stylesheet" href="<?= $CAMINHO ?>/css/escuro.css" title="2">
  <link rel="alternate stylesheet" href="<?= $CAMINHO ?>/css/claro.css" title="1">
  <!-- ACESSIBILIDADE -->

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

  <header>
    <?php
    include "cookie/cookie.php";
    include "partes/01-topo/01-topo_acessibilidade.php";
    include "partes/02-brasao_menu/02-brasao_menu.php";

    ?>
  </header>

  <section>
    <?php
    if (empty($_GET['sessao'])) {
      include $ppb . "controlemunicipal/privado/site/prefeitura/sequencia.php";
    } else {
    ?>
      <div class="container no-padding-left-right padding-mobile" style="margin-top: 2em; min-height: 500px;">
        <?php
        include $ppb . "controlemunicipal/privado/site/prefeitura/sequencia.php";
        ?>
      </div>
    <?php
    }
    ?>

  </section>
  </div>
  <footer>
    <?php
    include "partes/08-horarioAtendimento/informacoes-rodape.php";
    include "partes/09-menuRodape/menuRodape.php";
    include "partes/10-rodape/rodape.php";
    ?>
  </footer>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/alertifyjs/1.10.0/alertify.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.iframetracker/1.1.0/jquery.iframetracker.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script>
  <script src="<?= $CAMINHO ?>/cookie/caixa.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
  <!-- <script src="https://cdnjs.com/libraries/jquery.mask"></script> -->
  <script type="text/javascript" src="<?= $CAMINHOCM ?>/js/jquery.maskedinput-1.1.2.js"></script>

  <script type="text/javascript" src="<?= $CAMINHO ?>/js/bootstrap-dropdownhover.min.js"></script>
  <script type="text/javascript" src="<?= $CAMINHO ?>/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?= $CAMINHO ?>/js/main.js"></script>
  <!-- <script type="text/javascript" src="<?= $CAMINHO ?>/js/rafaelmln_acessibilidade.js"></script> -->

  <!-- ACESSIBILIDADE -->
  <script type="text/javascript" src="<?= $CAMINHO ?>/js/acessibilidade-audio.js"></script>
  <script type="text/javascript" src="<?= $CAMINHO ?>/js/alterar-contraste.js"></script>
  <script src="<?= $CAMINHO ?>/js/fonte.js"></script>
  <!-- ACESSIBILIDADE -->


  <script type="text/javascript">
    $(document).ready(function() {
      $('#popup-modal_4').modal('show');
      $('#popup-modal_3').modal('show');
      $('#popup-modal_2').modal('show');
      $('#popup-modal_1').modal('show');

    })
  </script>

</body>

</html>