<div class="controller-inferior">
    <div class="container container-inferior">
        <div class="menu-inferior acessibilidade">
            <div class="logoInforma">
                <a href="<?= $CAMINHO ?>" target="_blank" class="linkLogo">
                    <img class="imgLogo" src="<?= $CAMINHO ?>/images/logo-rodape.png" alt="Logo Rodapé">
                </a>

                <div class="infoRodape">
                    <a href="https://www.google.com/maps/search/?api=1&query=R.+José+de+Anchieta,+1641,+Alto+Paraná,+PR"
                        target="_blank">
                        <div class="menu-rodape">
                            <img src="<?= $CAMINHO ?>/images/pin-rodape.svg" alt="Endereço">
                            <p class="txtInfo acessibilidade">
                                <?= $configuracao['endereco'] ?> - CEP
                                <?= $configuracao['cep'] ?> - Planaltina do Paran&aacute; - PR
                            </p>
                        </div>
                    </a>
                    <span class="separador-rodape"></span>
                    <a href="https://wa.me/5544997211407" target="_blank">
                        <div class="menu-rodape" style="width: 200px;">
                            <img src="<?= $CAMINHO ?>/images/telefone-rodape.svg" alt="Telefone">
                            <p class="txtInfo acessibilidade"><strong>
                                    <?= $configuracao['telefone'] ?>
                                </strong></p>
                        </div>
                    </a>
                    <span class="separador-rodape"></span>
                    <a href="mailto:pmaltopr@altoparana.pr.gov.br" target="_blank">
                        <div class="menu-rodape">
                            <img src="<?= $CAMINHO ?>/images/e-mail-rodape.svg" alt="E-mail">
                            <p class="txtInfo acessibilidade">
                                <?= $configuracao['email'] ?>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>