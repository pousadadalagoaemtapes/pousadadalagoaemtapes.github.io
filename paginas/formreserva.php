<?php	 	
#
$nome = $_POST['Nome'];
$email = $_POST['Email'];
$telefone = $_POST['Telefone'];
$cidade = $_POST['Cidade'];
$estado = $_POST['Estado'];
$dia = $_POST['Dia'];
$mes = $_POST['Mes'];
$diad = $_POST['Diad'];
$mesd = $_POST['Mesd'];
$qtddep = $_POST['Qtddep'];
$ndoap = $_POST['ndoAP'];


$MailTo="pousadadalagoaemtapes@gmail.com";
$MailTo1="thiago_t_tomasi@hotmail.com";
$MailTo2="alpaca.thiago@gmail.com";
$nome=utf8_decode($nome);
$nome=eregi_replace( "\r", "\n", $nome);
$nome=stripcslashes($nome);
$email=utf8_decode($email);
$email=eregi_replace( "\r", "\n", $email);
$email=stripcslashes($email);
$telefone=utf8_decode($telefone);
$telefone=eregi_replace( "\r", "\n", $telefone);
$telefone=stripcslashes($telefone);
$cidade=utf8_decode($cidade);
$cidade=eregi_replace( "\r", "\n", $cidade);
$cidade=stripcslashes($cidade);
$estado=utf8_decode($estado);
$estado=eregi_replace( "\r", "\n", $estado);
$estado=stripcslashes($estado);
$dia=utf8_decode($dia);
$dia=eregi_replace( "\r", "\n", $dia);
$dia=stripcslashes($dia);
$mes=utf8_decode($mes);
$mes=eregi_replace( "\r", "\n", $mes);
$mes=stripcslashes($mes);
$diad=utf8_decode($diad);
$diad=eregi_replace( "\r", "\n", $diad);
$diad=stripcslashes($diad);
$mesd=utf8_decode($mesd);
$mesd=eregi_replace( "\r", "\n", $mesd);
$mesd=stripcslashes($mesd);
$qtddep=utf8_decode($qtddep);
$qtddep=eregi_replace( "\r", "\n", $qtddep);
$qtddep=stripcslashes($qtddep);
$ndoap=utf8_decode($ndoap);
$ndoap=eregi_replace( "\r", "\n", $ndoap);
$ndoap=stripcslashes($ndoap);


$Subject="Reserva ( Email enviado pelo site feito pelo site )";


$FormContent="
Nome: $nome\n
Email: $email\n
Telefone: $telefone\n
Cidade: $cidade\n
Estado: $estado\n
----------------------------------------------------------------------------\n
Entrada: $dia / $mes\n
Saída: $diad / $mesd\n
----------------------------------------------------------------------------\n
Número do apartamento: $ndoap
Quantidade de pessoas: $qtddep

".urlencode(utf8_encode($FormContent));
#
#
mail($MailTo, "$Subject", $FormContent, "From: $nome <$email>");
mail($MailTo1, "$Subject", $FormContent, "From: $nome <$email>");
mail($MailTo2, "$Subject", $FormContent, "From: $nome <$email>");
#
#
# Flashsignal Variable   ######################################################
#
$signal=1;
echo "signal=$signal";
#
###############################################################################
?>