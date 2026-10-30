<script type="text/javascript">

    

    function fechar(){

        document.getElementById('popup').style.display = 'none';

    }



    function abrir(){

        document.getElementById('popup').style.display = 'block';

        /* setTimeout ("fechar()", 3000); */

    }



</script>



<style>



    a {



        font-weight: bold;

        font-size: 12pt;

        padding-top: 5px;

    }



    /* POPUP */



#popup {

    

    width: 700px;

    height: 500px;

    padding: 25px;

    position: fixed;

    top: 30%;

    left: 30%;

    background: #FFF;

    border: solid 4px #4e7a1a;

    display: none;

    z-index: 999999;

}



#popup p {

    

    padding: 5px;

    font-size: 12pt;

}



#popup img { vertical-align: middle; }

#popup strong { font-size: 12pt; color: #444444; }



#popup #fechar_popup {



    position: absolute;

    top: 12px;

    right: 12px;

}



</style>



<div class="row">



    <div class="col-md-12">



        <h2 style="border-bottom: solid 1px #dddddd;">Nota Fiscal Eletr&ocirc;nica</h2>



    </div>



    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



        <ul>

            

            <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; margin-top: 20px; border: solid 1px #F4F4F4;">

                <a href="https://e-gov.betha.com.br/e-nota/login.faces?lastUrl=/selecaodemodulo.faces">

                <!--<a href="javascript:abrir()">-->

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Acesso ao sistema de emiss&atilde;o de NfeS

                </a>

            </li>

            

            <!--<li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; margin-top: 20px; border: solid 1px #F4F4F4;">

                <a href="https://e-gov.betha.com.br/e-nota/login.faces?lastUrl=/selecaodemodulo.faces" target="_blank">

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Acesso ao sistema de emiss&atilde;o de NfeS

                </a>

            </li>

            -->

            <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; margin-top: 20px; border: solid 1px #F4F4F4;">

                <a href="https://e-gov.betha.com.br/e-nota/solicitacaoacesso/pesquisa_entidade.faces?p1=ovpCnCE3QQc=&p2=6LGzv5GtzEg=" target="_blank">

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Solicita&ccedil;&atilde;o de acesso PRESTADOR DE SERVI&Ccedil;O

                </a>

            </li>          

            <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                <a href="https://e-gov.betha.com.br/e-nota/autenticidadenota.faces?p1=ovpCnCE3QQc=&p2=6LGzv5GtzEg=" target="_blank">

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Autenticidade da NOTA 

                </a>

            </li>

            <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                <a href="https://e-gov.betha.com.br/e-nota/verificar_autenticidade_rps.faces" target="_blank">

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Autenticidade do RPS 

                </a>

            </li>

            <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                <a href="https://e-gov.betha.com.br/e-nota/pesquisaprestadores.faces?p1=ovpCnCE3QQc=&p2=6LGzv5GtzEg=&externa=true" target="_blank">

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Pesquisa por prestadores habilitados &agrave; NFeS

                </a>

            </li>

            <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                <a href="https://e-gov.betha.com.br/e-nota/denunciafiscaldirect?p1=ovpCnCE3QQc=&p2=6LGzv5GtzEg=" target="_blank">

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Den&uacute;ncia Fiscal

                </a>

            </li>

            <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                <a title="Clique aqui e veja o manual de acesso para prestadores de servi&ccedil;os" href="<?= $CAMINHO ?>/arquivos/nfes__manual_de_acesso_prestadores__atualizado.pdf" target="_blank">

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Manual de acesso para PRESTADORES DE SERVI&Ccedil;O

                </a>

            </li>

            <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                <a href="https://e-gov.betha.com.br/centraldousuario/novousuario.faces" target="_blank">

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Cadastro de Usu&aacute;rio

                </a>

            </li>

            <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                <a href="https://e-gov.betha.com.br/centraldousuario/processrequest?action=resendConf&url=hXywvEMnnWrmRzziRWzHjfcxekN1vk8bFHEncwEna4JrbdG3mslSaw%3D%3D" target="_blank">

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Problemas no cadastro de Usu&aacute;rio

                </a>

            </li>

            <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                <a href="http://forum.betha.com.br/phpbb/viewforum.php?f=93" target="_blank">

                    <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Tire suas d&uacute;vidas no f&oacute;rum NFeS

                </a>

            </li>

        </ul>



    </div>



    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



        <?php include 'resumonfse.html'; ?>



    </div>



</div>



<div class="row">	



    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



        <p style="text-align: justify; border: solid 1px #dddddd; padding: 8px; font-weight: bold; margin-bottom: 20px; margin-top: 20px;">



            IMPORTANTE<br>

            Ao final da solicita&ccedil;&atilde;o de acesso o PRESTADOR DE SERVI&Ccedil;O escolher&aacute; a forma de envio do formul&aacute;rio &agrave; Prefeitura:<br>

            a) Assinado Digitalmente ou;<br>

            b) Impresso com firma reconhecida em cart&oacute;rio.<br>

            A solicita&ccedil;&atilde;o assinada digitalmente (e-CPF ou e-CNPJ) ser&aacute; analisada pela fiscaliza&ccedil;&atilde;o sem a necessidade de envio de documento por meio f&iacute;sico (papel).<br>

            O contribuinte que n&atilde;o assinar digitalmente a solicita&ccedil;&atilde;o de acesso dever&aacute;, obrigatoriamente, imprimir o formul&aacute;rio, assinar, reconhecer firma no cart&oacute;rio e<br> protocol&aacute;-lo na Prefeitura no prazo m&aacute;ximo de 10 (dez) dias.



        </p>



    </div>



    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



        <p style="text-align: justify; border: solid 1px #dddddd; padding: 8px; font-weight: bold; margin-top: 20px;">



            ATEN&Ccedil;&Atilde;O<br>

            A solicita&ccedil;&atilde;o de utiliza&ccedil;&atilde;o do sistema da NFeS dever&aacute; ser efetuada por pessoa que responda legalmente pela empresa.<br>

            Caso o respons&aacute;vel pela empresa j&aacute; tenha acesso ao sistema Livro Eletr&ocirc;nico poder&aacute; utilizar o mesmo usu&aacute;rio de conex&atilde;o (login) e senha para solicitar o acesso ao sistema da NFeS, caso contr&aacute;rio dever&aacute; cadastrar-se clicando em Cadastro de Usu&aacute;rio.                 



        </p> 



    </div>



</div>



<div class="row">



    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



        <h2 style="border-bottom: dashed 1px #dddddd; margin-bottom: 20px; text-transform: uppercase;">Livro Eletr&ocirc;nico</h3>



            <ul>



                <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                     <a href="https://e-gov.betha.com.br/livroeletronico/login.faces" target="_blank"> 
                    
                        <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Acesso ao Livro Eletr&ocirc;nico (escritura&ccedil;o do ISS)

                    </a>

                </li>

                <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                    <a href="https://e-gov.betha.com.br/centraldousuario/novousuario.faces" target="_blank">

                        <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Cadastro de Usu&aacute;rio

                    </a>

                </li>

                <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                     <a href="https://e-gov.betha.com.br/livroeletronico/solicitacaocadastrodeclaranteprocedimentos.faces" target="_blank">
                   

                        <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Solicita&ccedil;&atilde;o de Cadastro como Declarante

                    </a>

                </li>

                <li style="list-style: none; background: #FCFCFC; margin-bottom: 20px; border: solid 1px #F4F4F4;">

                    <a href="https://e-gov.betha.com.br/livroeletronico/help/help.faces?topic=layout.faces" target="_blank">

                        <span class="download"><img style="margin-top: -5px; margin-right: 5px;" src="<?= $CAMINHOCM ?>/images/seta.png" width="22" height="21" /></span>Layout do arquivo de importa&ccedil;&atilde;o de declara&ccedil;&atilde;o de servi&ccedil;o

                    </a>

                </li>



            </ul>



    </div>



    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >



        <p style="text-align: center; border: solid 1px #dddddd; background: #FCFCFC; padding: 20px; color: #4E7A1A; font-size: 18pt; margin-top: 45px;">

            <span style="font-weight: bold; color: #4E7A1A; font-size: 18pt;">PREFEITURA MUNICIPAL DE PARANAVA&Iacute;</span><br><br>

            Rua Get&uacute;lio Vargas, 900 - Centro<br>

            Cep: 87702-000 -  Paranava&iacute; - Pr<br>

            CNPJ: 76.977.768/0001-81

        </p> 



    </div>



</div>



<div id="popup">



    <!--<a href="javascript:fechar()" id="fechar_popup" title="Fechar"><strong>X</strong></a>-->

    <h2 style="color: #444444; margin-left: 5px; margin-top: -10px;">Aviso!</h2>

    

    <p>

    A partir do dia 22 de mar&ccedil;o de 2016, o assinador de notas fiscais do<br>

    e-Nota Fly funcionar&aacute; somente em computadores que tenham o Java instalado<br>

    na vers&atilde;o 8 ou superior.<br>

    Esta medida se faz necess&aacute;ria devido a substitui&ccedil;&atilde;o do algoritmo SHA-1 por<br>

    outro de tecnologia superior. Seu uso como um algoritmo hashing para<br>

    assinaturas foi desestimulado e n&atilde;o &eacute; mais uma pr&aacute;tica recomendada. Muitas<br>

    empresas como a Microsoft e o Google j&aacute; anunciaram pol&iacute;ticas para a<br>

    extin&ccedil;&atilde;o dos certificados SHA-1. Como parte desta iniciativa, tamb&eacute;m<br>

    estamos migrando para os certificados SHA-2, mantendo os n&iacute;veis mais altos<br>

    de integridade e seguran&ccedil;a de dados para os nossos clientes.<br><br>



    Lembramos que sem a atualiza&ccedil;&atilde;o do Java 8 ou superior, n&atilde;o ser&aacute; poss&iacute;vel<br>

    assinar notas fiscais pelo e-Nota Fly.<br><br><br>





    Atenciosamente,<br>

    Prefeitura Municipal de Paranava&iacute;<br>

    </p>



    <a href="https://e-gov.betha.com.br/e-nota/login.faces?lastUrl=/selecaodemodulo.faces">

        <p style="float: right; font-size: 20pt; font-weight: bold; margin-top: -5px;">OK</p>

    </a>



</div>