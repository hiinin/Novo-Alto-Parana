<?php



    if($_POST['acao'] == 'enviar'){

        //$qryEmail = mysql_fetch_assoc(mysql_query("SELECT email FROM cliente WHERE id = '$cliente' LIMIT 1"));

        //$clienteEmail = $qryEmail['email'];

        $clienteEmail = "ressarcimentoqds@hotmail.com";



        $data	 = date("d/m/Y");

        $hora    = date("H:i");



        $to      = $clienteEmail;

        $subject = "REQUERIMENTO - PREFEITURA MUNICIPAL DE QUINTA DO SOL - Enviado pelo site da Prefeitura";



        $html    = "<table width=\"400px\">";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\" colspan=\"2\" style=\"font-size:10px;\">$data &nbsp; $hora</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\"><strong>Nome: </strong></td>";

        $html   .= "<td width=\"80%\">{$_POST['nome']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\"><strong>Tipo de Conta: </strong></td>";

        $html   .= "<td width=\"80%\">{$_POST['tipodeconta']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\"><strong>Endere&ccedil;o: </strong></td>";

        $html   .= "<td width=\"80%\">{$_POST['endereco']}, {$_POST['numero']} - {$_POST['cidade']} - {$_POST['cep']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\"><strong>CPF: </strong></td>";

        $html   .= "<td width=\"80%\">{$_POST['cpf']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td><strong>E-mail: </strong></td>";

        $html   .= "<td>{$_POST['email']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\"><strong>Fone: </strong></td>";

        $html   .= "<td width=\"80%\">{$_POST['fone']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\"><strong>Cargo: </strong></td>";

        $html   .= "<td width=\"80%\">{$_POST['cargoinscricao']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\"><strong>Banco: </strong></td>";

        $html   .= "<td width=\"80%\">{$_POST['banco']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\"><strong>Ag&ecirc;ncia: </strong></td>";

        $html   .= "<td width=\"80%\">{$_POST['agencia']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\"><strong>Conta: </strong></td>";

        $html   .= "<td width=\"80%\">{$_POST['conta']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<td width=\"20%\"><strong>Opera&ccedil;&atilde;o/ Varia&ccedil;&atilde;o: </strong></td>";

        $html   .= "<td width=\"80%\">{$_POST['operavaria']}</td>";

        $html   .= "</tr>";

        $html   .= "<tr>";

        $html   .= "<tr>";

        $html   .= "<td><strong>Endere&ccedil;o IP do remetente: </strong></td>";

        $html   .= "<td>".$_SERVER['REMOTE_ADDR']."</td>";

        $html   .= "</tr>";

        $html   .= "</table>";	



        $headers = "From: {$_POST['nome']} <{$_POST['email']}> \r\n";

        $headers.= "Return-Path: {$_POST['nome']} <{$_POST['email']}> \r\n";

        $headers.= "Content-Type: text/html; charset=ISO-8859-1 ";

        $headers.= "MIME-Version: 1.0 "; 



        



        $vai = mail($to, $subject, $html, $headers);



        if($vai) {



			echo"<script>alert('Sua mensagem foi enviada com sucesso!');</script>";



			header('Location: '.$CAMINHO);



		} else {



			echo"<script>alert('N\u00e2o foi poss\u00edvel enviar sua mensagem!');</script>";



			header('Location: '.$CAMINHO);



		}

    }

    

?>



<div class="requerimento-row">

    <h3>REQUERIMENTO REFERENTE AO RESSARCIMENTO DE INSCRI&Ccedil;&Atilde;O <br> CONCURSO EDITAL 001/2017</h3>

    <div class="requerimento-form">

        <form method="post" class="form-horizontal" name="contato" id="contato" action="">

            <div class="form-group">

                <label for="nome" class="col-sm-4 control-label">Nome:</label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" name="nome" aria-describedby="password1-error" id="nome" placeholder="Nome" required>

                </div>

            </div>

            <div class="form-group">

                <label for="tipodeconta" class="col-sm-4 control-label">Tipo de Conta:</label>

                <div class="col-sm-8">

                    <select class="form-control" name="tipodeconta" id="tipodeconta" required>

                        <option value="cc">Conta Corrente</option>

                        <option value="cp">Conta Poupan&ccedil;a</option>

                    </select>

                </div>

            </div>

            <div class="form-group">

                <label for="cpf" class="col-sm-4 control-label">CPF:</label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" required>

                </div>

            </div>

            <div class="form-group">

                <label for="endereco" class="col-sm-4 control-label">Endere&ccedil;o:</label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endere&ccedil;o" required>

                </div>

            </div>

            <div class="form-group">

                <label for="numero" class="col-sm-4 control-label">N&uacute;mero:</label>

                <div class="col-sm-8">

                    <input type="number" class="form-control" id="numero" name="numero" placeholder="N&uacute;mero" required>

                </div>

            </div>

            <div class="form-group">

                <label for="cidade" class="col-sm-4 control-label">Cidade:</label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>

                </div>

            </div>

            <div class="form-group">

                <label for="cep" class="col-sm-4 control-label">CEP:</label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required>

                </div>

            </div>

            <div class="form-group">

                <label for="email" class="col-sm-4 control-label">E-mail:</label>

                <div class="col-sm-8">

                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>

                </div>

            </div>

            <div class="form-group">

                <label for="fone" class="col-sm-4 control-label">Fone:</label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" id="fone" name="fone" placeholder="Fone" required>

                </div>

            </div>

            <div class="form-group">

                <label for="cargoinscricao" class="col-sm-4 control-label">Cargo de Inscri&ccedil;&atilde;o:</label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" id="cargoinscricao" name="cargoinscricao" placeholder="Cargo de Inscri&ccedil;&atilde;o" required>

                </div>

            </div>

            <p style="margin: 28px 0;font-weight:bold;color:red;" align="center">

                Dados Banc&aacute;rios </br> 

                Obs.: Somente conta em nome do candidato. 

            </p>

            <div class="form-group">

                <label for="banco" class="col-sm-4 control-label">Banco:</label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" id="banco" name="banco" placeholder="Banco" required>

                </div>

            </div>

            <div class="form-group">

                <label for="agencia" class="col-sm-4 control-label">Ag&ecirc;ncia:</label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" id="agencia" name="agencia" placeholder="Ag&ecirc;ncia" required>

                </div>

            </div>

            <div class="form-group">

                <label for="conta" class="col-sm-4 control-label">Conta:</label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" id="conta" name="conta" placeholder="Conta" required>

                </div>

            </div>

            <div class="form-group">

                <label for="operavaria" class="col-sm-4 control-label">Opera&ccedil;&atilde;o/Varia&ccedil;&atilde;o: </br> <span style="color:red;font-size:13px;">(Caso necess&aacute;rio)</span></label>

                <div class="col-sm-8">

                    <input type="text" class="form-control" id="operavaria" name="operavaria" placeholder="Opera&ccedil;&atilde;o/Varia&ccedil;&atilde;o">

                </div>

            </div>

            <div class="form-group" style="display:flex;justify-content:flex-end">

                <button type="reset" class="btn btn-danger" style="margin-right:20px;" id="resetbutton">Limpar</button>

                <button type="submit" value="enviar" name="acao" class="btn btn-primary">Enviar</button>

            </div>

        </form>

    </div>

    <h3 style="font-size:18px;color:red;margin-bottom:45px;">OBSERVA&Ccedil;&Atilde;O IMPORTANTE: ACOMPANHAR O CR&Eacute;DITO EM CONTA NO PRAZO DE AT&Eacute; 10 DIAS.</h3>

</div>



<script>

    $(document).ready(function(){

        jQuery("#fone").mask("(99)99999-9999");

        jQuery("#cpf").mask("999.999.999-99");

    });





    $("#resetbutton").click(function (){

        contato.nome.value = '';

        contato.cpf.value = '';

        contato.cidade.value = '';

        contato.cep.value = '';

        contato.email.value = '';

        contato.endereco.value = '';

        contato.fone.value = '';

        contato.cargoinscricao.value = '';

        contato.numero.value = '';

        contato.banco.value = '';

        contato.agencia.value = '';

        contato.conta.value = '';

        contato.operavaria.value = '';

    });

</script>