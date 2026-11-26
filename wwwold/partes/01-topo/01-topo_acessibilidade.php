<div class="fundo_topo">
    <div class="container container_topo">
        <div class="controle_topo">
            <span class="dropVlibras">
                <a class="t_acessi" href="https://www.gov.br/governodigital/pt-br/vlibras/">
                    <img class="img-libras" src="<?= $CAMINHO ?>/images/maos.svg" alt="Libras">
                </a>
                <div class="dropVlibras-content">
                    <a href="https://www.gov.br/governodigital/pt-br/vlibras/">
                        <img src="https://www.ingadigital.com.br/transparencia/images/vlibras.gif">
                    </a>
                    <p class="infoVlibras">
                        <a href="https://www.gov.br/governodigital/pt-br/vlibras/">O conte&uacute;do desse site pode ser acess&iacute;vel em Libras usando o <b>VLibras</b></a>
                    </p>
                </div>
            </span>
            <span class="traco"></span>
            <div class="contraste">
                <button class="t_acessi acessibilidade" onClick="fonte('a');" title="Aumentar fonte dos textos" alt="Aumentar fonte dos textos">A+</button>
                <button class="t_acessi acessibilidade" onClick="fonte('d');" title="Diminuir fonte dos textos" alt="Diminuir fonte dos textos">A-</button>
                <button class="t_acessi" id="contrast"><img class="img-contraste acessibilidade" src="<?= $CAMINHO ?>/images/contraste.svg" alt="contraste"></button>
            </div>
            <span class="traco"></span>
            <a uk-toggle href="#offcanvas-flip" class="link_acess">
                <p class="t_acessi acessibilidade">Acessibilidade</p>
                <img class="img_acess" src="<?= $CAMINHO ?>/images/acessibilidade.svg" alt="acessibilidade">
            </a>
        </div>
    </div>
</div>

<div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <hr style="margin-top: 10px;">
        <h3>Acessibilidade</h3>
        <div class="font-topo location-AB">
            <button class="t_acessi" onClick="fonte('a');" title="Aumentar fonte dos textos" alt="Aumentar fonte dos textos"><strong>A+</strong></button>
            <button class="t_acessi" onClick="fonte('d');" title="Diminuir fonte dos textos" alt="Diminuir fonte dos textos"><strong>A-</strong></button>
            <button class="t_acessi" onClick="fonte('n');" title="Resetar fonte dos textos" alt="Resetar fonte dos textos"><strong>A</strong></button>
            <span class="dropVlibras">
                <a href="https://www.gov.br/governodigital/pt-br/vlibras/" target="__blank" style="color: #ffff;">
                    <img class="img-libras" src="<?= $CAMINHO ?>/images/maos.svg" alt="Libras">
                </a>
                <div class="dropVlibras-content">
                    <a href="https://www.gov.br/governodigital/pt-br/vlibras/">
                        <img src="http://www.ingadigital.com.br/transparencia/images/vlibras.gif">
                    </a>
                    <p class="infoVlibras">
                        <a href="https://www.gov.br/governodigital/pt-br/vlibras/">O conte&uacute;do desse site pode ser acess&iacute;vel em Libras usando o <b>VLibras</b></a>
                    </p>
                </div>
            </span>
        </div>
        <br>
        <hr style="margin-top: 10px;">
        <h3>Audio</h3>
        <button class="t_acessi" id="audioBtn">
            <i class="fa fa-assistive-listening-systems" style="font-size: 25px;" aria-hidden="true"></i>
        </button>
        <br>
        <hr>
        <div class="informa">
            <ul class="uk-list">
                <h3>Visualiza&ccedil;&atilde;o</h3>
                <li>
                    <p>Os seguintes recursos melhoram a visualiza&ccedil;&atilde;o das informa&ccedil;&otilde;es:</p>
                </li>
                <li>
                    <p>Tamanho do texto</p>
                </li>
                <li>
                    <p>Para recursos relacionados ao tamanho do texto, utilize os bot&otilde;es localizados na parte superior esquerda.</p>
                </li>
            </ul>
            <ul class="uk-list">

                <li>
                    <p><strong>A+</strong> : Aumentar o tamanho do texto </p>
                </li>
                <li>
                    <p><strong>A-</strong> : Diminuir o tamanho do texto </p>
                </li>
                <li>
                    <p><strong>A</strong> : Reseta o tamanho do texto </p>
                </li>
                <hr>
                <li>
                    <h3>Alto-Contraste</h3>
                    <p>Para o recurso de alto-contraste, utilize o bot&atilde;o localizado na parte superior direita.</p>
                    <p><img class="img-contraste acessibilidade" src="<?= $CAMINHO ?>/images/noturno.png" alt=""> : Altera para tema escuro </p>

                </li>
                <hr>
                <li>
                    <h3>Libras</h3>
                    <p>O conte&uacute;do do Portal da Transpar&ecirc;ncia est&aacute; acess&iacute;vel em Libras atrav&eacute;s do VLibras , o tradutor autom&aacute;tico da L&iacute;ngua Portuguesa para a L&iacute;ngua Brasileira de Sinais. Utilize o bot&atilde;o localizado na parte superior direita.</p>
                    <p><img class="img-libras" src="<?= $CAMINHO ?>/images/maos.svg" alt="Libras"> : Traduzir o texto para Libras </p>

                </li>
                <hr>
                <li>
                    <h3>Navega&ccedil;&atilde;o</h3>
                    <p>Para conhecer a estrutura de do site, utilize o mapa do site.</p>
                    <a href="http://altoparana.pr.gov.br/index.php?sessao=115499dbbbma11">
                        <img class="img-libras" src="<?= $CAMINHO ?>/images/mapa_site.svg" alt="Libras">
                        <span>Mapa Site</span>
                    </a>

                </li>
            </ul>
        </div>
    </div>
</div>