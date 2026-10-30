<? 
  $qryObra = mysql_query("SELECT * FROM pref_obras WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY id DESC");
            if (mysql_num_rows($qryObra) > 0)
            {
                $vetor_obras = array();
                $indice = 0;
                while($obra = mysql_fetch_assoc($qryObra)){
                    $vetor_obras[$indice]['link'] = $CAMINHO . "index.php?sessao=" .  verifica($sequencia.$obraVisualuza.$complemento) . "&id=" . verifica($obra['id']); 
                    $vetor_obras[$indice]['id'] = $obra['id'];
                    $vetor_obras[$indice]['obra'] = $obra['obra'];
                    $vetor_obras[$indice]['descricao'] = $obra['descricao'];
                    $foto = mysql_fetch_assoc(mysql_query("SELECT * FROM pref_obras_foto WHERE id_artigo = '$obra[id]' ORDER BY ordem DESC LIMIT 1"));
                    $vetor_obras[$indice]['foto'] = $CAMINHOIMG. "/tb_" . $foto['foto'];
                    $indice++;
                }
            }

  $qryEvento = mysql_query("SELECT * FROM pref_evento WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY data DESC");
              if (mysql_num_rows($qryEvento) > 0)
              {
                  $vetor_Evento = array();
                  $indice = 0;
                  while($evento = mysql_fetch_assoc($qryEvento)){
                      $vetor_Evento[$indice]['link'] = $CAMINHO . "index.php?sessao=" .  verifica($sequencia.$eventoVisualiza.$complemento) . "&id=" . verifica($evento['id']); 
                      $vetor_Evento[$indice]['id'] = $evento['id'];
                      $vetor_Evento[$indice]['titulo'] = $evento['titulo'];
                      $foto = mysql_fetch_assoc(mysql_query("SELECT * FROM pref_evento_foto WHERE id_artigo = '$evento[id]' ORDER BY ordem DESC LIMIT 1"));
                      $vetor_Evento[$indice]['foto'] = $CAMINHOIMG. "/tb_" . $foto['foto'];
                      $indice++;
                  }
              }

  $qryAudio = mysql_query("SELECT * FROM pref_audio WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY id DESC");
            if (mysql_num_rows($qryAudio) > 0)
            {
                $vetor_Audio = array();
                $indice = 0;
                while($evento = mysql_fetch_assoc($qryAudio)){
                    $vetor_Audio[$indice]['id'] = $evento['id'];
                    $vetor_Audio[$indice]['titulo'] = $evento['titulo'];
                    $indice++;
                }
            }
?>

<div class="div-galeria acessibilidade">
  <div class="container">
    <div class="div-h1">
      <h1>GALERIAS</h1>
    </div>
    <div class="div-carousel">
      <div class="div-obra">
          <div id="carouselVideo" class="carousel slide" data-ride="carousel">
            <div class="card-video"><p>V&iacute;deos</p></div>
            <div class="carousel-inner">

              <?php
                for($i = 0; $i < sizeof($vetor_obras); $i++){ 
              ?>

                  <div class="item <?= $i == 0 ? 'active' : '' ?>">
                    <a href="<?=$vetor_obras[$i]['link']?>">
                      <img class="img-obra" src="<?=$vetor_obras[$i]['foto']?>" alt="<?=$vetor_obras[$i]['obra']?>" style="width:252px;height:168px;">
                      <div class="carousel-galeria">
                        <span><?=$vetor_obras[$i]['obra']?></span>
                      </div>
                    </a>
                    
                  </div>

              <?php
                }
              ?>
          
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#carouselVideo" data-slide="prev">
              <div class="div-icon-banner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
              </div>
            </a>
            <a class="right carousel-control" href="#carouselVideo" data-slide="next">
              <div class="div-icon-banner">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </div>
            </a>
          </div>
        </div>

      <div class="div-obra">
          <div id="carouselObras" class="carousel slide" data-ride="carousel">
            <div class="card-obra"><p>Obras</p></div>
            <div class="carousel-inner">

              <?php
                for($i = 0; $i < sizeof($vetor_obras); $i++){ 
              ?>

                  <div class="item <?= $i == 0 ? 'active' : '' ?>">
                    <a href="<?=$vetor_obras[$i]['link']?>">
                      <img class="img-obra" src="<?=$vetor_obras[$i]['foto']?>" alt="<?=$vetor_obras[$i]['obra']?>" style="width:252px;height:168px;">
                      <div class="carousel-galeria">
                        <span><?=$vetor_obras[$i]['obra']?></span>
                      </div>
                    </a>
                    
                  </div>

              <?php
                }
              ?>
          
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#carouselObras" data-slide="prev">
              <div class="div-icon-banner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
              </div>
            </a>
            <a class="right carousel-control" href="#carouselObras" data-slide="next">
              <div class="div-icon-banner">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </div>
            </a>
          </div>
        </div>

        <div class="div-obra">
          <div id="carouselEvento" class="carousel slide" data-ride="carousel">
            <div class="card-evento"><p>Eventos</p></div>
            <div class="carousel-inner">

              <?php
                for($i = 0; $i < sizeof($vetor_Evento); $i++){ 
              ?>

                  <div class="item <?= $i == 0 ? 'active' : '' ?>">
                    <a href="<?=$vetor_Evento[$i]['link']?>">
                      <img class="img-obra" src="<?=$vetor_Evento[$i]['foto']?>" alt="<?=$vetor_Evento[$i]['evento']?>" style="width:252px;height:168px;">
                      <div class="carousel-galeria">
                        <span><?=$vetor_Evento[$i]['titulo']?></span>
                      </div>
                    </a>
                    
                  </div>

              <?php
                }
              ?>
          
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#carouselEvento" data-slide="prev">
              <div class="div-icon-banner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
              </div>
            </a>
            <a class="right carousel-control" href="#carouselEvento" data-slide="next">
              <div class="div-icon-banner">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </div>
            </a>
          </div>
        </div>

        <div class="div-obra">
          <div id="carouselAudio" class="carousel slide" data-ride="carousel">
            <div class="card-audio"><p>&Aacute;udios</p></div>
            <div class="carousel-inner">

              <?php
                for($i = 0; $i < sizeof($vetor_Audio); $i++){ 
              ?>

                  <div class="item <?= $i == 0 ? 'active' : '' ?>">
                    <a href="<?=$CAMINHO?>index.php?sessao=b054603368yhb0" target="_blank">
                    <img class="img-obra" src="<?=$CAMINHO?>/images/audio.png" style="width:252px;height:168px;">
                      <div class="carousel-galeria">
                        <span><?=resumo_artigo($vetor_Audio[$i]['titulo'],70)?></span>
                      </div>
                    </a>
                    
                  </div>

              <?php
                }
              ?>
          
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#carouselAudio" data-slide="prev">
              <div class="div-icon-banner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
              </div>
            </a>
            <a class="right carousel-control" href="#carouselAudio" data-slide="next">
              <div class="div-icon-banner">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </div>
            </a>
          </div>
        </div>

    </div>
  </div>
</div>