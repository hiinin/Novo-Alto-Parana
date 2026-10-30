<?php
// Busca apenas 1 anexo em .mp4 vinculado ao artigo
$qryVideoAnexo = mysql_query("SELECT * 
                                 FROM pref_informativo_artigo_anexo 
                                WHERE id_artigo = 3615 
                                  AND status_registro = 'A'
                                  AND arquivo LIKE '%.mp4'
                             ORDER BY ordem ASC, id DESC 
                                LIMIT 1");

$videoMp4 = mysql_fetch_assoc($qryVideoAnexo);
?>



<?php if ($videoMp4) { ?>

    <div class="video_full">
        <video id="vid" autoplay loop muted playsinline>
            <source src="<?= $CAMINHOARQ ?>/<?= verifica($videoMp4['arquivo']); ?>" type="video/mp4">
        </video>
    </div>

<?php } ?>

<?php include __DIR__ . "/../navbar-lateral/navbar-lateral.php"; ?>