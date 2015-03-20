<?php

$nome = $_POST["nome"];
$pedido= $_POST["mensagem"];
$email = $_POST["email"];



$message = '
<html>
<head>
 <title>Pedido</title>
</head>
<body>
<h4>PEDIDO '.$nome.' <'.$email.'></h4>
<p>'.$pedido.'</p>
</body>
</html>
';

$messageClient = '
<html>
<head>
 <title>Pedido</title>
</head>
<body>
<h3>'.$nome.', seu pedido foi recebido com sucesso!</h3>
<h4>PEDIDO '.$nome.' <'.$email.'></h4>
<p>'.$pedido.'</p>
<p>Dúvidas? Entre em contato conosco <luh@chocolateiros.com.br></p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: '.$nome.' <'.$email.'>' . "\r\n";

$headersClient  = 'MIME-Version: 1.0' . "\r\n";
$headersClient .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headersClient .= 'From: Chocolateiros <luh@chocolateiros.com.br>' . "\r\n";
/*$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/


//$formcontent = "From: $nome \n Pedido: $mensagem";

$recipient = "teste@lucassandes.com";
$subject = "Pedido Chocolateiros";
$subject_client = "Pedido Chocolateiros Recebido";
$mailheader = "From: $email \r\n";
//mail($recipient, "Pedido Chocolateiros", $formcontent, $mailheader) or die("Error!");
//mail($email, "Pedido Chocolateiros Recebido", $formcontent, $mailheader) or die("Error!");

if (@mail($recipient, $subject, $message, $headers) &&
    @mail($email, $subject_client, $messageClient, $headersClient)
) {
    echo "E-mail enviado com sucesso! Uma confirmação foi enviada ao seu email.";

} else {
    echo "Email não enviado. Favor tentar mais tarde.";
}

?>