<?php
/*if (!empty($_POST['act'])) {
    $nome = $_POST["nome"];

    $mensagem = $_POST["mensagem"];

    echo $nome;
    echo $mensagem;
     //Your code here
} else {*/
?>
<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$tipoOvo = $_POST["tipoOvo"];
$chocolate = $_POST["chocolate"];
$tipoOvoRecheio = $_POST["tipoOvoRecheio"];
$tradicional_peso_casca_select = $_POST["tradicional-peso-casca-select"];
$tradicional_peso_recheado_select = $_POST["tradicional-peso-recheado-select"];
$colher_peso_recheado_select = $_POST["colher-peso-recheado-select"];
$recheioA = $_POST["recheioA"];
$recheioB = $_POST["recheioB"];
$formato = $_POST["tipoFormato"];

function peso_preco($select, $tipo) {
    if ($tipo == 0 ) {
        switch($select){
            case 0:
                $peso_preco = array('100g', 7.00) ;
                break;
            case 1:
                $peso_preco = array('250g', 15.00);
                break;
            case 2:
                $peso_preco = array('350g', 21.50);
                break;
            case 3:
                $peso_preco = array('500g', 32.00);
                break;
            case 4:
                $peso_preco = array('1kg', 52.00);
                break;

        }
    }
    else if ($tipo == 1) {
        switch($select){
            case 0:
                $peso_preco = array('100g', 10.00) ;
                break;
            case 1:
                $peso_preco = array('250g', 18.00);
                break;
            case 2:
                $peso_preco = array('350g', 24.00);
                break;
            case 3:
                $peso_preco = array('500g', 47.00);
                break;
            case 4:
                $peso_preco = array('1kg', 63.00);
                break;

        }

    }
    else {
        switch($select){
            case 0:
                $peso_preco = array('90g', 6.00) ;
                break;
            case 1:
                $peso_preco = array('250g', 15.00);
                break;
            case 2:
                $peso_preco = array('350g', 27.00);
                break;
            case 3:
                $peso_preco = array('500g', 65.00);
                break;
            case 4:
                $peso_preco = array('1kg', 90.00);
                break;

        }

    }
    return $peso_preco;
}



?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <img src="imgs/logo.png" class="center-block img-responsive"/>

    <h1>Resumo do Pedido</h1>
    <p>
    <?php
    if ($tipoOvo == 0) {
        //echo ('Ovo Tradicional de '.$chocolate.' ');
        $mensagem = 'Ovo <strong>Tradicional</strong> de '.$chocolate.' ';


        if($tipoOvoRecheio) {

            $peso_preco = peso_preco($tradicional_peso_recheado_select, 1);
            //echo ('- '. $peso_preco[0]);
            $mensagem .= '- '. $peso_preco[0];

            //echo (' - Recheado ( metade '.$recheioA.' e metade'.$recheioB .')' );
            $mensagem .= ' - Recheado ( metade '.$recheioA.' e metade'.$recheioB .')';

            if ($tradicional_peso_recheado_select > 1 && $formato == 1 ) {
                //echo (' - FORMATO CORAÇÃO ');
                $mensagem .= ' - FORMATO CORAÇÃO ';
            }
            else {
               // echo(' - FORMATO TRADICIONAL ');
                $mensagem .=' - FORMATO TRADICIONAL ';
            }
            //echo ('- R$ '. $peso_preco[1]);
            $mensagem .='- R$ '. $peso_preco[1];



        }
        else {

            peso_preco($tradicional_peso_casca_select, 0);
            //echo ('- '. $peso_preco[0]);
            //echo ('- Casca ');
            //echo ('- R$ '. $peso_preco[1]);
            $mensagem .='- '. $peso_preco[0];
            $mensagem .='- Casca ';
            $mensagem .='- R$ '. $peso_preco[1];
        }


    }
    else {
        //echo ('Ovo Colher de '.$chocolate.' ');
        $mensagem ='Ovo Colher de '.$chocolate.' ';
        $peso_preco = peso_preco($colher_peso_recheado_select, 3);
        //echo (' -  '. $peso_preco[0]);
        $mensagem .=' -  '. $peso_preco[0];
        $mensagem .=' - ( metade '.$recheioA.' e metade '.$recheioB.')' ;
        $mensagem .=' - R$ '. $peso_preco[1];
        //echo (' - ( metade '.$recheioA.' e metade '.$recheioB.')' );
        //echo (' - R$ '. $peso_preco[1]);

    }

    echo $mensagem;
    ?>
        <div class="clear"></div>
        <button type="button" class="btn btn-default btn-lg"  onclick="goBack()">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Corrigir
        </button>

        <script>
            function goBack() {
                window.history.back()
            }
        </script>



        <form action="enviar.php" method="post">
            <input type="hidden" name="act" value="run">
            <input type="hidden" name="nome" value="<?php echo $nome ?>">
            <input type="hidden" name="email" value="<?php echo $email ?>">
            <input type="hidden" name="mensagem" value="<?php echo $mensagem ?>">
            <input type="submit" value="Run me now!">
        </form>
    <?php
   // }
    ?>

    </p>
</div>
<!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<!-- Bootstrap core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/showhide.js"></script>

</body>
</html>
