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
$tel = $_POST["tel"];
$indicacao = $_POST["indicacao"];


if (isset($_POST['checkbox'])) {
    $checkbox = 1;
} else {
    $checkbox = 0;
}


$tipoOvo = $_POST["tipoOvo"];
$chocolate = $_POST["chocolate"];
$tipoOvoRecheio = $_POST["tipoOvoRecheio"];
$tradicional_peso_casca_select = $_POST["tradicional-peso-casca-select"];
$tradicional_peso_recheado_select = $_POST["tradicional-peso-recheado-select"];
$colher_peso_recheado_select = $_POST["colher-peso-recheado-select"];
$quantidadeRecheio = $_POST["quantidadeRecheio"];

$recheioA = $_POST["recheioA"];
$recheioB = $_POST["recheioB"];
$formato = $_POST["tipoFormato"];

function peso_preco($select, $tipo)
{
    if ($tipo == 0) {
        switch ($select) {
            case 0:
                $peso_preco = array('100g', 7.00);
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
    } else if ($tipo == 1) {
        switch ($select) {
            case 0:
                $peso_preco = array('100g', 10.00);
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

    } else {
        switch ($select) {
            case 0:
                $peso_preco = array('90g', 6.00);
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

<?php include 'header.php'; ?>

<div class="container half">


    <h1 class="text-center">Resumo do Pedido</h1>

    <h3>Olá <?php echo $nome ?>!</h3>

    <p>Confira seu pedido antes de nos enviá-lo.</p>
    <h4>Informações de contato:</h4>

    <p><strong>E-mail:</strong> <?php echo $email; ?><br/>
        <strong>Tel/WhatsApp:</strong><?php echo $tel; ?>
    </p>

    <p>
        <?php
        if ($tipoOvo == 0) {
            //echo ('Ovo Tradicional de '.$chocolate.' ');
            $mensagem = 'Ovo <strong>Tradicional</strong> de ' . $chocolate . ' ';


            if ($tipoOvoRecheio) {

                $peso_preco = peso_preco($tradicional_peso_recheado_select, 1);
                //echo ('- '. $peso_preco[0]);
                $mensagem .= '- ' . $peso_preco[0];

                //echo (' - Recheado ( metade '.$recheioA.' e metade'.$recheioB .')' );

                if($quantidadeRecheio == 1) {
                    $mensagem .= ' - Recheado ( recheio de ' . $recheioA . ')';
                }
                else {
                    $mensagem .= ' - Recheado meio a meio ( metade ' . $recheioA . ' e metade' . $recheioB . ')';
                }

                if ($tradicional_peso_recheado_select > 1 && $formato == 1) {
                    //echo (' - FORMATO CORAÇÃO ');
                    $mensagem .= ' - FORMATO CORAÇÃO ';
                } else {
                    // echo(' - FORMATO TRADICIONAL ');
                    $mensagem .= ' - FORMATO TRADICIONAL ';
                }
                //echo ('- R$ '. $peso_preco[1]);
                $peso_preco[1] = sprintf('%0.2f', $peso_preco[1]);
                $mensagem .= '- R$ ' . $peso_preco[1];


            } else {

                $peso_preco = peso_preco($tradicional_peso_casca_select, 0);

                $peso_preco[1] = sprintf('%0.2f', $peso_preco[1]);
                //echo ('- '. $peso_preco[0]);
                //echo ('- Casca ');
                //echo ('- R$ '. $peso_preco[1]);
                $mensagem .= '- ' . $peso_preco[0];
                $mensagem .= '- Casca ';
                $mensagem .= '- R$ ' . $peso_preco[1];
            }


        } else {
            //echo ('Ovo Colher de '.$chocolate.' ');
            $mensagem = 'Ovo <strong>Colher</strong> de ' . $chocolate . ' ';
            $peso_preco = peso_preco($colher_peso_recheado_select, 3);
            $peso_preco[1] = sprintf('%0.2f', $peso_preco[1]);
            //echo (' -  '. $peso_preco[0]);
            $mensagem .= ' -  ' . $peso_preco[0];
            $mensagem .= ' - ( recheio de ' . $recheioA . ')';
            $mensagem .= ' - R$ ' . $peso_preco[1];
            //echo (' - ( metade '.$recheioA.' e metade '.$recheioB.')' );
            //echo (' - R$ '. $peso_preco[1]);

        }




        ?>
    <div class="alert alert-success" role="alert">

        <?php echo $mensagem;?>
    </div>

    <div class="clear"></div>
    <div class="col-xs-6">
        <button type="button" class="btn btn-default btn-lg  btn-block" onclick="goBack()">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Corrigir
        </button>
    </div>
    <script>
        function goBack() {
            window.history.back()
        }
    </script>
    <div class="col-xs-6">

    <form action="enviar.php" method="post">
        <input type="hidden" name="act" value="run">
        <input type="hidden" name="nome" value="<?php echo $nome ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="tel" value="<?php echo $tel ?>">
        <input type="hidden" name="checkbox" value="<?php echo $checkbox ?>">
        <input type="hidden" name="indicacao" value="<?php echo $indicacao ?>">

        <input type="hidden" name="mensagem" value="<?php echo $mensagem ?>">
        <button type="submit" class="btn btn-default btn-lg pull-right btn-block"><span
                class="glyphicon glyphicon-shopping-cart"
                aria-hidden="true"></span> Enviar
        </button>
    </form>

    </div>
    <?php
    // }
    ?>

    </p>
</div>
<!-- /container -->

<?php include 'footer.php';
