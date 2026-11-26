<?php include "query_agenda.php"; ?>

<?php if (count($vetor_agenda) > 0) { ?>
<div class="controle-agenda">
    <div class="container container-agenda">

        <div class="control_titulo">
            <p class="tituloNoticias"><strong>Agenda</strong> Municipal</p>
            <div class="barra"></div>
        </div>

        <div class="controller-agenda">
            <?php foreach ($vetor_agenda as $item) { ?>
                <div class="agenda-card">
                    <div class="agenda-card-mes">
                        <?= htmlspecialchars($item['mes']) ?>
                    </div>
                    <div class="agenda-card-corpo">
                        <div class="agenda-card-dia">
                            <?= htmlspecialchars($item['dia']) ?>
                        </div>
                        <div class="agenda-card-info">
                            <p class="agenda-card-titulo acessibilidade"><?= htmlspecialchars($item['evento']) ?></p>
                            <?php if (!empty($item['observacao'])) { ?>
                                <p class="agenda-card-desc acessibilidade"><?= strip_tags($item['observacao']) ?></p>
                            <?php } ?>
                            <?php if (!empty($item['horario_fmt'])) { ?>
                                <p class="agenda-card-horario"><?= htmlspecialchars($item['horario_fmt']) ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="agenda-btn-wrap">
            <a href="<?= $CAMINHO ?>/index.php?sessao=b054603368prb0"
               class="agenda-btn-outros">
                OUTROS EVENTOS
            </a>
        </div>

    </div>
</div>
<?php } ?>