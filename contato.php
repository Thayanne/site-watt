header('Access-Control-Allow-Origin: *');

<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$texto=$_POST['texto'];

$Destinatario="lucasnadalutti@gmail.com";

$mensagem=
"Uma mensagem vinda do site!
Algum vistante mandou essa mensagem pelo site.
Nome: $nome
Email: $email
Telefone: $telefone
Mensagem: $texto";

mail("$Destinatario", "$mensagem","From:$email");

?>