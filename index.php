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

    <h1>Faça seu pedido</h1>


    <form class="form-horizontal" method="post" action="revisao.php">



        <div class="form-group  col-md-6">
            <label for="inputPassword3" class="col-sm-3 control-label">Nome</label>

            <div class="col-sm-9">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>

            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
        </div>
        <div id="clonedInput1" class="clonedInput">
            <div class="form-group col-md-6">
                <label for="tipoChocolate" class="col-sm-3 control-label">Tipo do Ovo</label>

                <div class="col-sm-9">
                    <select class="form-control" id="tipoOvo" name="tipoOvo">
                        <option value="0">Ovo Tradicional</option>
                        <option value="1">Ovo de Colher</option>
                    </select>
                </div>
            </div>


            <div class="form-group col-md-6">
                <label for="tipoChocolate" class="col-sm-3 control-label">Chocolate</label>

                <div class="col-sm-9">
                    <select class="form-control" id="tipoChocolate" name="chocolate">
                        <option>Chocolate Amargo</option>
                        <option>Chocolate Branco</option>
                        <option>Chocolate Meio Amargo</option>
                        <option>Chocolate ao Leite</option>

                    </select>
                </div>
            </div>

            <div id="form-tradicional-tipo" class="form-group col-md-6">
                <label for="tipoChocolate" class="col-sm-3 control-label">Tipo</label>

                <div class="col-sm-9">
                    <select class="form-control" id="tipoOvoRecheio" name="tipoOvoRecheio">
                        <option value="1">Recheado</option>
                        <option value="0">Casca</option>

                    </select>
                </div>

            </div>
            <div id="tradicional-peso-casca" class="form-group col-md-6">
                <label for="tipoChocolate" class="col-sm-3 control-label">Peso/Valor</label>

                <div class="col-sm-9">
                    <select class="form-control" id="tradicional-peso-casca-select"
                            name="tradicional-peso-casca-select">
                        <option value="0">100g - R$7,00</option>
                        <option value="1">250g - R$15,00</option>
                        <option value="2">350g - R$21,50</option>
                        <option value="3">500g - R$32,00</option>
                        <option value="4">1kg - R$52,00</option>
                    </select>
                </div>

            </div>

            <div id="tradicional-peso-recheado" class="form-group col-md-6">
                <label for="tipoChocolate" class="col-sm-3 control-label">Peso/Valor</label>

                <div class="col-sm-9">
                    <select class="form-control" id="tradicional-peso-recheado-select"
                            name="tradicional-peso-recheado-select">
                        <option value="0">100g - R$10,00</option>
                        <option value="1">250g - R$18,00</option>
                        <option value="2">350g - R$24,00</option>
                        <option value="3">500g - R$47,00</option>
                        <option value="4">1kg - R$63,00</option>
                    </select>
                </div>

            </div>

            <div id="tradicional-peso-colher" class="form-group col-md-6">
                <label for="tipoChocolate" class="col-sm-3 control-label">Peso/Valor/Embal.</label>

                <div class="col-sm-9">
                    <select class="form-control" id="colher-peso-recheado-select" name="colher-peso-recheado-select">
                        <option value="0">90g - R$6,00 - Saquinho</option>
                        <option value="1">250g - R$15,00 - Caixa</option>
                        <option value="2">350g - R$27,00 - Caixa</option>
                        <option value="3">500g - R$65,00 - Caixa</option>
                        <option value="4">1kg - R$90,00 - Caixa</option>
                    </select>
                </div>

            </div>
            <?php
            $recheios = array('Beijinho',
                'Bolo Gelado de Prestígio',
                'Brigadeiro',
                'Brigadeiro de Morango',
                'Brigadeiro de Paçoca',
                'Creme de Bis',
                'Creme Cassata c/ Sonho de Valsa',
                'Creme Cassata c/ Biscoito Óreo',
                'Creme Cassata c/ Kit Kat',
                'Mousse de Maracujá',
                'Mousse de Limão',
                'Mousse de Suflair',
                'Nutella',
                'Sensação',
                'Trufado');
            ?>
            <div id="tradicional-recheioA" class="form-group col-md-6">
                <label for="tipoChocolate" class="col-sm-3 control-label">Recheio 1</label>

                <div class="col-sm-9">
                    <select class="form-control" id="tipoChocolate" name="recheioA">
                        <?php
                        foreach ($recheios as $i => $value) {
                            echo('<option>' . $recheios[$i] . '</option>');
                            echo("\n");
                        }
                        ?>

                    </select>
                </div>

            </div>

            <div id="tradicional-recheioB" class="form-group col-md-6">
                <label for="tipoChocolate" class="col-sm-3 control-label">Recheio 2</label>

                <div class="col-sm-9">
                    <select class="form-control" id="tipoChocolate" name="recheioB">
                        <?php
                        foreach ($recheios as $i => $value) {
                            echo('<option>' . $recheios[$i] . '</option>');
                            echo("\n");
                        }
                        ?>

                    </select>
                </div>

            </div>


            <div id="tradicional-formato" class="form-group col-md-6">
                <label for="tipoChocolate" class="col-sm-3 control-label">Formato</label>

                <div class="col-sm-9">
                    <select class="form-control" id="tipo-formato-select" name="tipoFormato">
                        <option value="0">Tradicional (ovo)</option>
                        <option value="1">Coração</option>

                    </select>
                </div>

            </div>


            <button type="submit" class="btn btn-default"><span class=" glyphicon glyphicon-usd"
                                                                aria-hidden="true"></span>Enviar
            </button>


        </div>

    </form>


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
