<div class="navbar-lateral" id="navbar-lateral">
    <a href="https://wa.me/5544997211407" target="_blank" rel="noopener noreferrer" class="navbar-lateral__item" title="Telefone / WhatsApp">
        <img src="<?= $CAMINHO ?>/images/telefone-navbar.svg" alt="Telefone / WhatsApp">
        <span class="navbar-lateral__label">(44) 99721-1407</span>
    </a>
    <a href="mailto:pmaltopr@altoparana.pr.gov.br" class="navbar-lateral__item" title="E-mail">
        <img src="<?= $CAMINHO ?>/images/email-navbar.svg" alt="E-mail">
        <span class="navbar-lateral__label">pmaltopr@altoparana.pr.gov.br</span>
    </a>
    <a href="https://www.google.com/maps/search/?api=1&query=Rua+José+Anchieta,+1641,+Planaltina+do+Paraná,+PR" target="_blank" rel="noopener noreferrer" class="navbar-lateral__item" title="Localização">
        <img src="<?= $CAMINHO ?>/images/pin-navbar.svg" alt="Localização">
        <span class="navbar-lateral__label">Rua Jos&eacute; Anchieta, 1641 &ndash; Planaltina do Paran&aacute;, PR</span>
    </a>
    <a href="https://webmail.altoparana.pr.gov.br/" target="_blank" rel="noopener noreferrer" class="navbar-lateral__item" title="Webmail">
        <img src="<?= $CAMINHO ?>/images/webmail-navbar.svg" alt="Webmail">
        <span class="navbar-lateral__label">Webmail</span>
    </a>
</div>


<script>
(function () {
    var navbar = document.getElementById('navbar-lateral');
    var banner = document.querySelector('.video_full');

    function updateNavbar() {
        if (!navbar) return;

        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (!banner) {
            if (scrollTop > 100) {
                navbar.classList.add('navbar-lateral--visible');
            } else {
                navbar.classList.remove('navbar-lateral--visible');
            }
            return;
        }

        var bannerBottom = banner.getBoundingClientRect().bottom + window.pageYOffset;

        if (scrollTop >= bannerBottom) {
            navbar.classList.add('navbar-lateral--visible');
        } else {
            navbar.classList.remove('navbar-lateral--visible');
        }
    }

    window.addEventListener('scroll', updateNavbar);
    window.addEventListener('resize', updateNavbar);
    updateNavbar();
})();
</script>
