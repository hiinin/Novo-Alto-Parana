/*
HOW TO USE
$(document).ready(function()
{
	var $a = jQuery.noConflict()
	$a('header').raqfaelmln_acessibilidade(
	{
	    'color' : '#fff',
	    'background' : 'rgba(0,0,0,0.1)',
		'item_menuprincipal' : true,
		'item_busca' : true,
		'item_conteudocentral' : true,
		'item_altocontraste' : true,
		'item_acessibilidade' : true,
		'elemento_menuprincipal' : '#menu-primario ul>li>a',
		'elemento_busca' : '.busca input[name=frase]',
		'elemento_conteudocentral' : 'section>.center',
		'estilo_altocontraste' : 'https://www.univates.br/media/acessibilidade/contraste.css'
	});
});


Atalhos

Teclando-se Alt + 3 em qualquer p�gina, chega-se diretamente ao conte�do central.
Teclando-se Alt + 4 em qualquer p�gina, chega-se diretamente ao mapa do site.
Teclando-se Alt + A em qualquer p�gina, o site ser� colocado em modo Alto Contraste.
Teclando-se Alt + I em qualquer p�gina, o site ser� direcionado para a p�gina Acessibilidade.*/

//$.noConflict();

(function($)
{
	$.fn.rafaelmln_acessibilidade = function(opcoes) 
	{
		return this.each (function(i,v)
		{
			/*CSS*/
			// var css = '<style type="text/css">';
			// css += '#menu_acessibilidade { float:left; width:100%; height: 27px; background: '+opcoes.background+';}';
            // css += '#menu_acessibilidade ul{ list-style: none; float:right; margin: 0; padding: 0; width: 100%;}';
			// css += '#menu_acessibilidade li { float: left;width: 40%; text-align: center; position: relative;}';
			// css += '#menu_acessibilidade li a { color: '+opcoes.color+'; font-weight: 600; font-size: 13px;letter-spacing: 0.3px; }';
			// css += '#menu_acessibilidade li a .fa { color: #FFF; font-size: 170%;}';
			// css += '#menu_acessibilidade li button { color: #FFF; background: transparent;}';
			// css += '#menu_acessibilidade li a#item_fale_conosco { border-left: 1px solid rgba(0,0,0,0.3); border-right: 1px solid rgba(0,0,0,0.3); margin-left: 0px; padding: 5px 10px; }';			
			// css += '#menu_acessibilidade li a#item_ingles { border-right: 1px solid rgba(0,0,0,0.3); margin-left: -10px; padding: 5px 10px 5px 0px; font-size: 13px; }';
			// //css += '#menu_acessibilidade li a:focus { border: 1px solid #fff !important;}';
			// css += '#menu_acessibilidade li a img { width:12px; height:12px; margin-top: 3px; }';
			// css += '</style>';
			// $(this).append(css);

			/*HTML*/
			// var campos = '<div id="menu_acessibilidade"><div class="center clearfix container-fluid"><ul>';			
			// if(opcoes.item_menuprincipal)
			// {
			// 	campos += '<li><a id="atalhos" style="text-decoration:none;" class="borda-acess" title="Atalhos de Acessibilidade"><i class="fa fa-wheelchair" aria-hidden="true"></i> Acessibilidade</a></li>';
			// }
			// if(opcoes.item_busca)
			// {
			// 	campos += '<li><a class="borda-acess" href=""><i class="fa fa-sitemap" aria-hidden="true"></i> Mapa do Site</a></li>';
			// }
			// if(opcoes.item_conteudocentral)
			// {
			// 	campos += '<li class=\'menor\'><a href="#" id="item_altocontraste" title="Ativar/desativar a alto contraste no site"><i class="fa fa-adjust" aria-hidden="true"></i></a></li>';
				
			// }
			// if(opcoes.item_altocontraste)
			// {
			// 	campos += '<li class=\'menor\'><button title="Aumentar fonte dos textos" alt="Aumentar fonte dos textos" onClick="fonte(\'a\');">A+</button></li><li class=\'menor\'><button title="Diminuir fonte dos textos" alt="Aumentar fonte dos textos" onClick="fonte(\'d\');">A-</button></li>'
			// }

			// campos += '</ul></div></div>';
			// $(this).prepend(campos);

			/*JS*/
			if(opcoes.item_menuprincipal)
			{
				function rafaelmln_menuprincipal()
				{
					$( opcoes.elemento_menuprincipal ).first().focus(); 
					console.log('4');
				}
				$('#item_menuprincipal').click(function(e)
				{
					e.preventDefault(); 
					rafaelmln_menuprincipal();
				});
			}
			if(opcoes.item_busca)
			{
				function rafaelmln_busca()
				{
					$(window).scrollTop(0);
					$( opcoes.elemento_busca ).focus();
				}
				$('#item_busca').click(function(e)
				{
					e.preventDefault(); 
					rafaelmln_busca();
				});
			}
			if(opcoes.item_conteudocentral)
			{
				function rafaelmln_conteudocentral()
				{
					var p = $( opcoes.elemento_conteudocentral ).position(); 
					$(window).scrollTop(p.top); 
				}
				$('#item_conteudocentral').click(function(e)
				{
					e.preventDefault(); 
					rafaelmln_conteudocentral()
				});
			}
			// if(opcoes.item_altocontraste)
			// {
				
			// }

            var li = $('#menu_acessibilidade li')[0];
            $(li).find('a').focus();            


			/*Comandos*/
			document.onkeydown = KeyDown;
			document.onkeyup = KeyUp;
			var alt_ativo = false;
			var shift_ativo = false;
			var ctrl_ativo = false;
			function KeyDown(e)
			{
			   	var KeyID = (window.event) ? event.keyCode : e.keyCode;
			   	//chrome
			   	if(alt_ativo)
			   	{
			   		if(opcoes.item_menuprincipal && KeyID == 49)
					{
				      	rafaelmln_menuprincipal();
				    }
				    else if(opcoes.item_busca && KeyID == 50)
				    {
				     	rafaelmln_busca();
				    }
				    else if(opcoes.item_conteudocentral && KeyID == 51)
				    {
				      	rafaelmln_conteudocentral();
				    }
				    else if(KeyID == 65)
					{				    	
				      	alto_contraste( !(localStorage.alto_contraste_ativo && localStorage.alto_contraste_ativo == 't') );
				    }
			   	}
			   	//ff
			   	if(alt_ativo && shift_ativo)
			   	{
			   		if(opcoes.item_menuprincipal && KeyID == 49)
					{
				      	rafaelmln_menuprincipal();
				    }
				    else if(opcoes.item_busca && KeyID == 50)
				    {
				     	rafaelmln_busca();
				    }
				    else if(opcoes.item_conteudocentral && KeyID == 51)
				    {
				      	rafaelmln_conteudocentral();
				    }
				    else if(KeyID == 65)
					{				    	
				      	alto_contraste( !(localStorage.alto_contraste_ativo && localStorage.alto_contraste_ativo == 't') );
				    }
			   	}
			   	//mac os
			   	if(alt_ativo && ctrl_ativo)
			   	{
			   		if(opcoes.item_menuprincipal && KeyID == 49)
					{
				      	rafaelmln_menuprincipal();
				    }
				    else if(opcoes.item_busca && KeyID == 50)
				    {
				     	rafaelmln_busca();
				    }
				    else if(opcoes.item_conteudocentral && KeyID == 51)
				    {
				      	rafaelmln_conteudocentral();
				    }
				    else if(KeyID == 65)
					{				    	
				      	alto_contraste( !(localStorage.alto_contraste_ativo && localStorage.alto_contraste_ativo == 't') );
				    }
			   	}
			   	//alt
			   	else if(KeyID == 18)
			   	{
			    	alt_ativo = true;
			   	}
			   	//shift
			   	else if(KeyID == 16)
			   	{
			    	shift_ativo = true;
			   	}
			   	//ctrl
			   	else if(KeyID == 17)
			   	{
			    	ctrl_ativo = true;
			   	}
			}
			function KeyUp(e)
			{
			   	var KeyID = (window.event) ? event.keyCode : e.keyCode;
			   	//alt
			   	if(KeyID == 18)
			   	{
			   		alt_ativo = false;
			   	}
			   	//shift
			   	if(KeyID == 16)
			   	{
			    	shift_ativo = false;
			   	}
			   	//ctrl
			   	if(KeyID == 17)
			   	{
			    	ctrl_ativo = false;
			   	}			   	
			}

		});
	}
})( jQuery );

function fonte(e){
	var elemento = $(".acessibilidade");
	var fonte = elemento.css('font-size');
	if (e == 'a') {
		elemento.css("fontSize", parseInt(fonte) + 1);
	} else if(e == 'd'){
		elemento.css("fontSize", parseInt(fonte) - 1);
	} else if(e =='n'){
		$(".acessibilidade").removeAttr('style');
	}
}

function alto_contraste(url)
{   

    if (localStorage.alto_contraste_ativo == 't'){
        $('head').append("<link rel='stylesheet' id='link' type='text/css' href='"+url+"'>");
        localStorage.setItem('alto_contraste_ativo', 'f');
    }else{
        $('#link').remove();
        localStorage.setItem('alto_contraste_ativo', 't');
    }
}




// alto_contraste( (localStorage.alto_contraste_ativo && localStorage.alto_contraste_ativo == 't') );

// $('#item_altocontraste').click(function(e)
// {
//     e.preventDefault();
//     alto_contraste( !(localStorage.alto_contraste_ativo && localStorage.alto_contraste_ativo == 't') );
// });
