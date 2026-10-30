<!-- Popup -->
<?php
// if(detect_mobile() == false){
	$qryPopup = mysql_query("SELECT popup.*
						   	   FROM (
						     SELECT subpopup.*,
							     IF (data_inicial_publicacao < CURRENT_DATE() 
							     OR (data_inicial_publicacao = CURRENT_DATE 
							    AND (hora_inicial_publicacao IS NULL 
						         OR CAST(hora_inicial_publicacao AS time) <= CURRENT_TIME())), 'S', 'N') AS inicio,
							     IF (data_limite IS NULL 
							     OR (data_limite > CURRENT_DATE() 
							     OR (data_limite = CURRENT_DATE() 
							    AND (hora_limite IS NULL 
						         OR CAST(hora_limite AS time) >= CURRENT_TIME()))), 'S', 'N') AS fim 
						       FROM pref_popup AS subpopup
						      WHERE status_registro = 'A'
							    AND id_cliente = '$cliente') AS popup
						      WHERE popup.inicio = 'S'
							    AND popup.fim = 'S'
					       ORDER BY id DESC
						      LIMIT 4");

	$lista_popup = array();
	$contador = 0;
	while ($popup = mysql_fetch_assoc($qryPopup)) {
    	$lista_popup[$contador] = $popup;
    	$contador++;
  	}
	if(mysql_num_rows($qryPopup) > 0){
		$contador_popup = 1;
		foreach ($lista_popup as $valor_popup) {
?>
	<div id="popup-modal_<?= $contador_popup ?>" class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true">
    	<div class="modal-dialog">
      		<div class="modal-content" style="border: none; box-shadow: none;background: transparent; text-align: center;">
			  	<button style="font-size: 35px; color: #fff; opacity: 1; background-color: red; border-radius: 20px; width: 35px; height: 35px; position: absolute; right: 0; z-index: 1;"type="button" class="close" data-dismiss="modal">&times;</button>
        		<div class="modal-body" style="padding: 0;">
          			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding-left-right">
            			<a href="<?= $valor_popup['link'] != "" ? $valor_popup['link'] : "#" ?>" target="_blank">
              				<img src="<?= $CAMINHOIMG ?>/<?= $valor_popup['foto'] ?>" class="img-responsive" style="width: 100%; padding-top: 18px; padding-right: 18px;">
            			</a>
          			</div>
				</div>
    		</div>
  		</div>
	</div>
  	<?
	  	$contador_popup++;
        }
	}
// }
?>