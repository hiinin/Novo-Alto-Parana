$(".lightbox").click(function() {
    $(this).removeAttr('href');
    var img = $(this).find("img"); 
    var modal_img = document.getElementById("imgModal");
    var modal_texto = document.getElementById("textoModal");
    $('#modalImagem').modal('show'); 
    modal_img.src = img.attr("src");

    if(img.attr("alt") != undefined){
      modal_texto.innerHTML = img.attr("alt");
    }
   
});


function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);

$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});