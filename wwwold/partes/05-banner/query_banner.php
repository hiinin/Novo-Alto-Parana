  <?php
  $sqlBanner = mysql_query("SELECT * 
                                      FROM pref_banner 
                                    WHERE id_cliente = '$cliente' 
                                      AND status_registro = 'A' 
                                  ORDER BY id DESC 
                                    LIMIT 4");
  $banners = array();

  while ($foto_banner = mysql_fetch_array($sqlBanner)) {
    array_push($banners, $foto_banner);
  }
  ?>