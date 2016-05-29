<?php	 	
#
$nome = $_POST['Nome'];
$email = $_POST['Email'];
$telefone = $_POST['Telefone'];
$mensagem = $_POST['Mensagem'];


$MailTo="pousadadalagoaemtapes@gmail.com";
$MailTo1="thiago_t_tomasi@hotmail.com";
$MailTo2="alpaca.thiago@gmail.com";
//$nome=utf8_decode($nome);
$nome=eregi_replace( "\r", "\n", $nome);
$nome=stripcslashes($nome);
$email=utf8_decode($email);
$email=eregi_replace( "\r", "\n", $email);
$email=stripcslashes($email);
$telefone=utf8_decode($telefone);
$telefone=eregi_replace( "\r", "\n", $telefone);
$telefone=stripcslashes($telefone);
//$mensagem=utf8_decode($mensagem);
$mensagem=eregi_replace( "\r", "\n", $mensagem);
$mensagem=stripcslashes($mensagem);


$Subject="Contato ( Email enviado pelo site feito pelo site )";


$FormContent="
Nome: $nome\n
Email: $email\n
Telefone: $telefone\n
----------------------------------------------------------------------------\n
Mensagem: $mensagem\n
----------------------------------------------------------------------------\n

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