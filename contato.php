<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$texto=$_POST['texto'];

$Destinatario="thayanne_viegas@hotmail.com";

$mensagem1="
Uma mensagem vinda do site !
Algum vistante mandou essa mensagem pelo site.
Nome: $nome
Email: $email
Telefone: $telefone
Mensagem: $texto";

mail("$Destinatario", "$mensagem1","From:$email");
?>
<html>
<body>
Enviado com sucesso !<br />
<a href="index.html">Voltar!</a>
</body>
</html>

<body>
</body>
</html>