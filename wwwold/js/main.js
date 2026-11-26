
$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
}); 

$('.lightbox').attr({
 'data-toggle': 'lightbox'
});

function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
}

$('.modal').on('show.bs.modal', centerModal);

$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});

$( document ).ready(function() {
    if($('#popup-modal').length != 0){
        inicioPopup(8, $('#timer_popup'));
        $('#popup-modal').modal('show');

    }
});

var modal_status = true;

$('#popup-modal').on('hidden.bs.modal', function () {
    modal_status = false;
})

function inicioPopup(duracao, texto_html) {

    var tempo = duracao, minutos, segundos;

    setInterval(function () {
        minutos = parseInt(tempo / 60, 10)
        segundos = parseInt(tempo % 60, 10);

        minutos  = minutos < 10 ? "0" + minutos : minutos;
        segundos = segundos < 10 ? "0" + segundos : segundos;

        texto_html.text(minutos + ":" + segundos);
        $('#porcetagem_popup').animate({width:'0%'},8000, "linear");
        
        if(minutos == 00 && segundos == 00){
            if(modal_status){
                $('#popup-modal').modal('hide');
            }
        }

        if (--tempo < 0) {
            tempo = duracao;
        }
    }, 1000);
}
