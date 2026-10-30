$(document).ready( () => {
  
  $("#button-menu-responsivo").click( data => {
    $("#div-opacity").css("display", "block");
    $(".div-menu-responsivo").css("left", "0px");
  });

  $("#div-opacity").click( data => {
    $(".div-menu-responsivo").css("left", "-550px");
    $("#div-opacity").css("display", "none");
  });

  $("#div-close").click( data => {
    $(".div-menu-responsivo").css("left", "-550px");
    $("#div-opacity").css("display", "none");
  });
});

// PESQUISA TEMP 
$('#conteudo-pesquisa').hide();
function exibirFormulario(param){
    if(param == true){
        $('#conteudo-pesquisa').show().animate({top:0}, 1000, function() {
            
        });
        $('#li_pesquisa').hide();
        $('#btn-hidden-pesquisa').hide();
    }else{
        $('#conteudo-pesquisa').hide();
        $('#li_pesquisa').show();
        $('#btn-hidden-pesquisa').show();
    }
}
