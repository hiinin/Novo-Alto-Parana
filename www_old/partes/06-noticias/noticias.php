<?php
$qryNoticiaDestaque = mysql_query("SELECT noticia.id,
                                              noticia.titulo  
                                         FROM (
                                       SELECT subnoticia.*,
                                           IF (data_inicial_publicacao < CURRENT_DATE()
                                           OR data_inicial_publicacao IS NULL 
                                           OR (data_inicial_publicacao = CURRENT_DATE 
                                          AND (hora_inicial_publicacao IS NULL 
                                           OR CAST(hora_inicial_publicacao AS time) <= CURRENT_TIME())), 'S', 'N') AS inicio,
                                           IF (data_final_publicacao IS NULL 
                                           OR (data_final_publicacao > CURRENT_DATE() 
                                           OR (data_final_publicacao = CURRENT_DATE() 
                                          AND (hora_final_publicacao IS NULL 
                                           OR CAST(hora_final_publicacao AS time) >= CURRENT_TIME()))), 'S', 'N') AS fim 
                                         FROM pref_noticia AS subnoticia
                                        WHERE status_registro = 'A'
                                          AND id_cliente = '$cliente'
                                          AND tipo = 'F') AS noticia
                                        WHERE noticia.inicio = 'S'
                                          AND noticia.fim = 'S'
                                     ORDER BY id DESC
                                        LIMIT 3");
                             
    if (mysql_num_rows($qryNoticiaDestaque) > 0){
        $vetor_destaque = array();
        $indice = 0;
        while($noticias = mysql_fetch_assoc($qryNoticiaDestaque)){
            $vetor_destaque[$indice]['link'] = $CAMINHO . "index.php?sessao=" .  verifica($sequencia.$noticiaVisualiza.$complemento) . "&id=" . verifica($noticias['id']); 
            $vetor_destaque[$indice]['id'] = $noticias['id'];
            $vetor_destaque[$indice]['titulo'] = $noticias['titulo'];
            $foto = mysql_fetch_assoc(mysql_query("SELECT foto, legenda 
                                                     FROM pref_noticia_foto 
                                                    WHERE id_artigo = '$noticias[id]'  
                                                    AND status_registro = 'A'
                                                 ORDER BY id LIMIT 1"));
            if(!empty($foto['foto']))                                      
                $vetor_destaque[$indice]['foto'] = $CAMINHOIMG. "/gd_" . $foto['foto'];
            else
                $vetor_destaque[$indice]['foto'] = $CAMINHO. "/images/sem_foto.jpg";
            $vetor_destaque[$indice]['legenda'] = $foto['legenda'];
            $indice++;
        }
    }

    $qryUltimaNoticia = mysql_query("SELECT noticia.id,
                                            noticia.titulo,
                                            noticia.artigo  
                                       FROM (
                                     SELECT subnoticia.*,
                                         IF (data_inicial_publicacao < CURRENT_DATE()
                                         OR data_inicial_publicacao IS NULL 
                                         OR (data_inicial_publicacao = CURRENT_DATE 
                                        AND (hora_inicial_publicacao IS NULL 
                                         OR CAST(hora_inicial_publicacao AS time) <= CURRENT_TIME())), 'S', 'N') AS inicio,
                                         IF (data_final_publicacao IS NULL 
                                         OR (data_final_publicacao > CURRENT_DATE() 
                                         OR (data_final_publicacao = CURRENT_DATE() 
                                        AND (hora_final_publicacao IS NULL 
                                         OR CAST(hora_final_publicacao AS time) >= CURRENT_TIME()))), 'S', 'N') AS fim 
                                       FROM pref_noticia AS subnoticia
                                      WHERE status_registro = 'A'
                                        AND id_cliente = '$cliente'
                                        AND tipo = 'E') AS noticia
                                      WHERE noticia.inicio = 'S'
                                        AND noticia.fim = 'S'
                                   ORDER BY id DESC
                                      LIMIT 4");
                                   
    if (mysql_num_rows($qryUltimaNoticia) > 0){
        $vetor_ultimas = array();
        $indice = 0;
        while($noticias = mysql_fetch_assoc($qryUltimaNoticia)){
            $vetor_ultimas[$indice]['link'] = $CAMINHO . "index.php?sessao=" .  verifica($sequencia.$noticiaVisualiza.$complemento) . "&id=" . verifica($noticias['id']); 
            $vetor_ultimas[$indice]['id'] = $noticias['id'];
            $vetor_ultimas[$indice]['titulo'] = $noticias['titulo'];
            $vetor_ultimas[$indice]['artigo'] = $noticias['artigo'];
            $foto = mysql_fetch_assoc(mysql_query("SELECT foto, legenda 
                                                     FROM pref_noticia_foto 
                                                    WHERE id_artigo = '$noticias[id]' 
                                                    AND status_registro = 'A' 
                                                 ORDER BY id LIMIT 1"));
            if(!empty($foto['foto']))                                      
                $vetor_ultimas[$indice]['foto'] = $CAMINHOIMG. "/gd_" . $foto['foto'];
            else
                $vetor_ultimas[$indice]['foto'] = $CAMINHO. "/images/semfoto.png";
            $vetor_ultimas[$indice]['legenda'] = $foto['legenda'];
            $indice++;
        }
    }
?>

<div class="div-noticias acessibilidade">
  <div class="container">
    <div class="div-h1">
      <h1><span class="tittle-icon"></span><span class="tittle-icon-bold">NOT&Iacute;CIAS EM DESTAQUE</span></h1>
      <div class="tracado-div-noticias hidden-xs hidden-sm">
                <p class="tracado">.</p>
              </div>
    </div>
    <div class="div-bloco-noticias">

      <div class="div-destaque">
        <div id="carouselNoticia" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            <?php
              for($i = 0; $i < sizeof($vetor_destaque); $i++){ 
            ?>

                <div class="item <?= $i == 0 ? 'active' : '' ?>">
                  <a href="<?=$vetor_destaque[$i]['link']?>">
                    <img class="img-destaque" src="<?=$vetor_destaque[$i]['foto']?>" alt="<?= utf8_decode($vetor_destaque[$i]['titulo'])?>" style="width:100%;">
                    <div class="carousel-caption">
                      <p class="noticia-principal-texto"><?= utf8_decode($vetor_destaque[$i]['titulo'])?></p>
                    </div>
                  </a>
                  
                </div>

            <?php
              }
            ?>
        
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#carouselNoticia" data-slide="prev">
            <div class="div-icon-banner seta-esquerda">
              <img src="<?= $CAMINHO ?>images/noticia-e.svg" alt="Seta para a esquerda de Noticias"></i>
            </div>
          </a>
          <a class="right carousel-control" href="#carouselNoticia" data-slide="next">
            <div class="div-icon-banner seta-direita">
              <img src="<?= $CAMINHO ?>images/noticia-d.svg" alt="Seta para a direita de Noticias"></i>
            </div>
          </a>
        </div>
      </div>
      <div class="div-outras">

        <?php
          for($i = 0; $i < 2; $i++){
        ?> 
            <div class="bloco-outras">
              <a href="<?=$vetor_ultimas[$i]['link']?>">
                <img src="<?=$vetor_ultimas[$i]['foto']?>" alt="<?= utf8_decode($vetor_ultimas[$i]['legenda'])?>">
                <div class="descricao-outras">
                  <p class="noticia-secundaria-texto"><?= utf8_decode($vetor_ultimas[$i]['titulo'])?></p>
                </div>
              </a>
            </div>
        
        <?php
          }
        ?>

      </div>
    </div>
  </div>
</div>