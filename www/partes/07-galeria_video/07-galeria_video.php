<?php
$clienteSql = mysql_real_escape_string($cliente);

$qryVideos = mysql_query("SELECT id,
                                 titulo,
                                 link,
                                 descricao
                            FROM pref_video
                           WHERE id_cliente = '$clienteSql'
                             AND status_registro = 'A'
                        ORDER BY id DESC
                           LIMIT 5");

$videos = [];

if ($qryVideos && mysql_num_rows($qryVideos) > 0) {
    while ($video = mysql_fetch_assoc($qryVideos)) {
        $urlId = idVideo($video['link']);

        $videos[] = [
            'url'       => $urlId,
            'titulo'    => $video['titulo'],
            'descricao' => $video['descricao'],
            // hqdefault sempre existe, evita get_headers() (1 requisição HTTP por vídeo)
            'thumb'     => "https://i.ytimg.com/vi/{$urlId}/hqdefault.jpg",
        ];
    }
}
?>

<?php if (!empty($videos)) { ?>
    <div class="fundo-galeria-mult">
        <div class="container container_videos">
            <div class="control_titulo">
                <p class="tituloNoticias">Galeria de <strong>V&iacute;deos</strong></p>
                <div class="barra"></div>
            </div>

            <div class="controle-videos-mult">

                <div class="mult-destaque">
                    <div class="embed-responsive embed-responsive-16by9 img_video_destaque" id="videoPlayerWrapper">
                        <iframe
                            id="videoPlayer"
                            class="embed-responsive-item"
                            src="https://www.youtube.com/embed/<?= $videos[0]['url'] ?>?rel=0"
                            allowfullscreen
                            allow="autoplay; encrypted-media">
                        </iframe>
                    </div>
                    <p class="txt-titulo" id="videoTitulo"><?= resumo_artigo($videos[0]['descricao'], 150) ?></p>
                    <!-- <p class="txt-descricao" id="videoDescricao"><?= resumo_artigo($videos[0]['descricao'], 150) ?></p> -->
                </div>

                <?php if (count($videos) > 1) { ?>
                    <div class="lista-videos-mult" id="listaVideos">
                        <?php foreach ($videos as $i => $v) { ?>
                            <div class="item-video<?= $i === 0 ? ' active' : '' ?>"
                                data-url="<?= $v['url'] ?>"
                                data-titulo="<?= resumo_artigo($v['titulo'], 110) ?>"
                                data-descricao="<?= resumo_artigo($v['descricao'], 110) ?>">

                                <a class="controle_itens" href="javascript:void(0);" title="<?= $v['titulo'] ?>">
                                    <img class="tumb_video" src="<?= $v['thumb'] ?>" alt="<?= $v['titulo'] ?>" loading="lazy">
                                    <div class="titulo_desc_video">
                                        <p class="titulo-video"><?= resumo_artigo($v['titulo'], 100) ?></p>
                                        <p class="descricao-video"><?= resumo_artigo($v['descricao'], 115) ?></p>
                                    </div>
                                </a>
                                <div class="barra_bottom"></div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script>
        (function() {
            var items = document.querySelectorAll('#listaVideos .item-video');
            var player = document.getElementById('videoPlayer');
            var titulo = document.getElementById('videoTitulo');
            var descricao = document.getElementById('videoDescricao');

            items.forEach(function(item) {
                item.querySelector('a').addEventListener('click', function() {
                    var url = item.getAttribute('data-url');

                    player.src = 'https://www.youtube.com/embed/' + url + '?autoplay=1&rel=0';
                    titulo.textContent = item.getAttribute('data-titulo');
                    descricao.textContent = item.getAttribute('data-descricao');

                    // Troca o active
                    items.forEach(function(el) {
                        el.classList.remove('active');
                    });
                    item.classList.add('active');
                });
            });
        }());
    </script>
<?php } ?>