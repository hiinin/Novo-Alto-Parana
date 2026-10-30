<div class="hidden-md hidden-sm hidden-xs" id="menu-lateral">
    <ul>
        <li>
            <a href="#">
                <img src="<?= $CAMINHO ?>images/telefone.svg" alt="Telefone da Prefeitura" class="image">
                <span class="description"><?= $configuracao['telefone'] ?></span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?= $CAMINHO ?>images/email.svg" alt="Email da Prefeitura" class="image">
                <span class="description"> <?= $configuracao['email'] ?></span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?= $CAMINHO ?>images/local.svg" alt="Endereco da Prefeitura" class="image">
                <span class="description"><?= $configuracao['endereco'] ?> - <?= $configuracao['bairro'] ?>
                    - <?= $configuracao['municipio'] ?> - <?= $configuracao['estado'] ?></span>
            </a>
        </li>
        <li>
            <a href="https://webmail.altoparana.pr.gov.br/" target="_blank">
                <img src="<?= $CAMINHO ?>images/webmail.svg" alt="Webmail da Prefeitura" class="image">
                <span class="description">Acesse o webmail</span>
            </a>
        </li>
    </ul>
</div>


<script>
    $(window).scroll(function(event) {
        if ($(window).width() > "992") {
            event.stopPropagation();
            if ($(window).scrollTop() > '10' && $(window).scrollTop() <= '1910') {
                $('#menu-lateral').show('fade');
            } else {
                $('#menu-lateral').hide('fade');
            }
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        function showAnimateLateral(element) {
            var descriptionElement = element.getElementsByClassName("description")[0];
            var prevWidth = "50px"
            descriptionElement.style.visibility = "hidden";
            descriptionElement.style.display = "block";
            element.style.width = 'auto'
            var endWidth = getComputedStyle(element).width
            element.style.width = prevWidth
            element.offsetWidth // force repaint
            element.style.transition = 'width .1s ease-in-out'
            element.style.width = endWidth
            element.addEventListener('transitionend', function transitionEnd(event) {
                if (event.propertyName == 'width') {
                    element.style.transition = ''
                    element.style.width = 'auto'
                    descriptionElement.style.visibility = "visible";
                    element.removeEventListener('transitionend', transitionEnd, false)
                }
            }, false)
        }

        function hideAnimateLateral(element) {
            var descriptionElement = element.getElementsByClassName("description")[0];
            element.style.width = getComputedStyle(element).width
            element.style.transition = 'width .1s ease-in-out'
            element.offsetWidth // force repaint
            element.style.width = '50px'
            descriptionElement.style.display = "none";
        }

        $('#menu-lateral li').mouseenter(function() {
            var element = document.getElementById('menu-lateral').children[0].children[$(this).index()];
            showAnimateLateral(element);
        }).mouseleave(function() {
            var element = document.getElementById('menu-lateral').children[0].children[$(this).index()];
            hideAnimateLateral(element);
        });
        $("#menu-lateral").mouseleave(function() {
            $(this).find('li').each(function(index) {
                hideAnimateLateral(document.getElementById('menu-lateral').children[0].children[$(this).index()]);
            });
        });
    });
</script>