<?php
$CAMINHOIMG_GALERIA = "http://www.controlemunicipal.com.br/inga/sistema/imagens/" . $cliente . "/";

$vetor_galeria = array(); // inicializa fora do if, evita foreach em variável inexistente

$qryCategoriaGaleria = mysql_query("SELECT * FROM pref_galeria_foto_categoria WHERE id_cliente = '$cliente' AND status_registro = 'A' ORDER BY id DESC");
if (mysql_num_rows($qryCategoriaGaleria) > 0) {
    $indice = 0;
    while ($categoriaGaleria = mysql_fetch_assoc($qryCategoriaGaleria)) {
        $idCategoriaGaleria = $categoriaGaleria['id'];

        $fotoCapa = mysql_fetch_assoc(mysql_query("SELECT cff.foto
                                          FROM pref_galeria_foto_foto cff
                                          INNER JOIN pref_galeria_foto cgf ON cgf.id = cff.id_artigo
                                          WHERE cgf.id_cliente = '$cliente'
                                          AND cgf.id_categoria = '$idCategoriaGaleria'
                                          AND cgf.status_registro = 'A'
                                          AND cff.foto IS NOT NULL
                                          AND cff.foto <> ''
                                          ORDER BY cff.id DESC
                                          LIMIT 1"));

        if (!$fotoCapa) {
            continue;
        }

        $qryQtdAlbuns = mysql_query("SELECT cgf.id
                                          FROM pref_galeria_foto cgf
                                          WHERE cgf.id_cliente = '$cliente'
                                          AND cgf.id_categoria = '$idCategoriaGaleria'
                                          AND cgf.status_registro = 'A'");
        $quantidadeAlbuns = mysql_num_rows($qryQtdAlbuns);

        $primeiroAlbum = mysql_fetch_assoc(mysql_query("SELECT titulo, artigo
                                          FROM pref_galeria_foto
                                          WHERE id_cliente = '$cliente'
                                          AND id_categoria = '$idCategoriaGaleria'
                                          AND status_registro = 'A'
                                          ORDER BY id DESC
                                          LIMIT 1"));

        $vetor_galeria[$indice]['link']         = $CAMINHO . "index.php?sessao=" . verifica($sequencia . $galeriaFotoLista . $complemento) . "&cat=" . verifica($idCategoriaGaleria);
        $vetor_galeria[$indice]['id']           = $idCategoriaGaleria;
        $vetor_galeria[$indice]['categoria']    = $categoriaGaleria['categoria'];
        $vetor_galeria[$indice]['quantidade']   = $quantidadeAlbuns;
        $vetor_galeria[$indice]['foto']         = $CAMINHOIMG_GALERIA . $fotoCapa['foto'];
        $vetor_galeria[$indice]['titulo_album'] = $primeiroAlbum ? $primeiroAlbum['titulo'] : $categoriaGaleria['categoria'];
        $vetor_galeria[$indice]['artigo']       = $primeiroAlbum ? resumo_artigo($primeiroAlbum['artigo'], 150) : '';
        $indice++;
    }
}
?>

<?php if (count($vetor_galeria) > 0) { ?>
    <div class="fundo-galeria-foto">
        <div class="container container-foto">

            <div class="control_titulo">
                <p class="tituloNoticias">Galeria de <strong>Fotos</strong></p>
                <div class="barra"></div>
            </div>

            <div class="galeria-grid">

                <div class="galeria-card-texto">
                    <?php if (isset($vetor_galeria[0])) { ?>
                        <p class="galeria-card-titulo acessibilidade"><?= htmlspecialchars($vetor_galeria[0]['titulo_album']) ?></p>
                        <p class="galeria-card-desc acessibilidade"><?= $vetor_galeria[0]['artigo'] ?></p>
                    <?php } ?>
                </div>

                <div class="galeria-foto-destaque">
                    <a href="<?= $vetor_galeria[0]['link'] ?>" title="<?= htmlspecialchars($vetor_galeria[0]['titulo_album']) ?>">
                        <img src="<?= $vetor_galeria[0]['foto'] ?>" alt="<?= htmlspecialchars($vetor_galeria[0]['titulo_album']) ?>" />
                    </a>
                </div>

                <?php if (isset($vetor_galeria[1])) { ?>
                    <div class="galeria-foto-lateral">
                        <a href="<?= $vetor_galeria[1]['link'] ?>" title="<?= htmlspecialchars($vetor_galeria[1]['titulo_album']) ?>">
                            <img src="<?= $vetor_galeria[1]['foto'] ?>" alt="<?= htmlspecialchars($vetor_galeria[1]['titulo_album']) ?>" />
                        </a>
                    </div>
                <?php } ?>

                <?php
                $fotos_bottom = array_slice($vetor_galeria, 2);
                if (count($fotos_bottom) > 0) { ?>
                    <div class="galeria-linha-bottom">
                        <?php foreach ($fotos_bottom as $item) { ?>
                            <div class="galeria-foto-bottom">
                                <a href="<?= $item['link'] ?>" title="<?= htmlspecialchars($item['titulo_album']) ?>">
                                    <img src="<?= $item['foto'] ?>" alt="<?= htmlspecialchars($item['titulo_album']) ?>" />
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

            </div>

        </div>
    </div>
<?php } ?>