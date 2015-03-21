<?php

$nome = $_POST["nome"];
$pedido= $_POST["mensagem"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$checkbox = $_POST["checkbox"];
$indicacao = $_POST["indicacao"];
if ($checkbox) {
    $informacoes = "DESEJA</strong> receber promoções</p>";
} else {
    $informacoes = "<p><strong>NÃO</strong> deseja receber promoções</p>";
}

$message = '
<html>
<head>
 <title>Pedido</title>
  <meta charset="utf-8">

</head>
    <body>
        <h4>PEDIDO '.$nome.' (Email: '.$email.' - Tel/Whats: '.$tel.') </h4>
        <p>'.$pedido.'</p>
        <p>'.$informacoes.'</p>
        <p>Indical por: '.$indicacao.'</p>
    </body>
</html>
';

$messageClient = '
<html>
<head>
 <title>Pedido</title>
  <meta charset="utf-8">
</head>
    <body>
        <h3>'.$nome.', seu pedido foi recebido com sucesso!</h3>
        <h4>PEDIDO '.$nome.'('.$email.')</h4>
        <p>'.$pedido.'</p>
        <p>Dúvidas? Entre em contato conosco <contato@chocolateiros.com.br></p>
    </body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: '.$nome.' <'.$email.'>' . "\r\n";

$headersClient  = 'MIME-Version: 1.0' . "\r\n";
$headersClient .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headersClient .= 'From: Chocolateiros <contato@chocolateiros.com.br>' . "\r\n";
/*$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/


//$formcontent = "From: $nome \n Pedido: $mensagem";

$recipient = "teste@lucassandes.com";
$subject = "Pedido Chocolateiros";
$subject_client = "Pedido Chocolateiros Recebido";
$mailheader = "From: $email \r\n";
//mail($recipient, "Pedido Chocolateiros", $formcontent, $mailheader) or die("Error!");
//mail($email, "Pedido Chocolateiros Recebido", $formcontent, $mailheader) or die("Error!");

?>

<?php include 'header.php'; ?>

    <div class="container enviar">
        <?php

        if (@mail($recipient, $subject, $message, $headers) &&
            @mail($email, $subject_client, $messageClient, $headersClient)
        ) { ?>

            <h2>Pedido efetuado com sucesso! :)</h2>
            <h4>Obrigado! Seu pedido foi efetuado com sucesso!</h4>
            <p>Enviamos uma cópia do pedido para o seu e-mail. Caso não chegue, por favor, confira na caixa de spam</p>

        <?php

        } else {
            ?>
            <h2>ERRO :(</h2>
            <p>Infelizmente houve um erro na hora de confirmar seu pedido. Por favor, tente mais uma vez.</p>

        <?php
        }


        ?>

        <form action="index.php" method="post">
            <input type="hidden" name="act" value="run">
            <input type="hidden" name="nome" value="<?php echo $nome ?>">
            <input type="hidden" name="email" value="<?php echo $email ?>">
            <input type="hidden" name="tel" value="<?php echo $tel ?>">
            <input type="hidden" name="indicacao" value="<?php echo $indicacao ?>">
            <button type="submit" class="btn btn-default btn-lg pull-right btn-block"><span
                    class="glyphicon glyphicon-shopping-cart"
                    aria-hidden="true"></span> Fazer um novo pedido
            </button>
        </form>
    </div>
<?php include 'footer.php';