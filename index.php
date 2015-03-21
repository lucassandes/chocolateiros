<?php include 'header.php'; ?>
<?php
if (!empty($_POST['nome'])) {
    $nome = $_POST["nome"];
    $email =  $_POST["email"];
    $tel = $_POST["tel"];
    $indicacao = $_POST["indicacao"];

     //Your code here
}
else {
    $nome = "";
    $email =  "";
    $tel = "";
    $indicacao="";
}
?>
<div class="container pagina-inicial">
    <h2>Faça seu pedido</h2>


    <form class="form" method="post" action="revisao.php">


        <h3>Dados Pessoais:</h3>

        <div class="form-group  col-md-6">
            <label for="inputPassword3" class="control-label" >Nome</label>

            <div class="">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" value="<?php echo $nome?>" required>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="inputEmail3" class="  control-label">Qual seu e-mail?</label>

            <div class=" ">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email?>" required>
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="inputEmail3" class="  control-label">Informe seu telefone/WhatsApp</label>
            <input type="text" class="form-control" id="tel" name="tel" placeholder="(xx) xxxxx - xxxx" value="<?php echo $tel?>"required>

        </div>

        <div class="form-group col-md-6">
            <label for="inputEmail3" class="  control-label">Quem te indicou o <strong>Chocolateiros</strong>?</label>
            <input type="text" class="form-control" id="indicacao" name="indicacao" placeholder="Digite o nome da pessoa que te indicou" value="<?php echo $indicacao?>">

        </div>
        <div class="clearfix"></div>
        <div class="clear" style="height: 20px"></div>

        <h3>Pedido</h3>

        <div id="clonedInput1" class="clonedInput">
            <div class="form-group col-md-6">
                <label for="tipoChocolate" class="  control-label">Que tipo de ovo prefere?</label>

                <div class=" ">
                    <select class="form-control" id="tipoOvo" name="tipoOvo">
                        <option value="0">Ovo Tradicional</option>
                        <option value="1">Ovo de Colher</option>
                    </select>
                </div>
            </div>


            <div class="form-group col-md-6">
                <label for="tipoChocolate" class="  control-label">Chocolate</label>

                <div class=" ">
                    <select class="form-control" id="tipoChocolate" name="chocolate">
                        <option>Chocolate Amargo</option>
                        <option>Chocolate Branco</option>
                        <option>Chocolate Meio Amargo</option>
                        <option>Chocolate ao Leite</option>

                    </select>
                </div>
            </div>

            <div id="form-tradicional-tipo" class="form-group col-md-6">
                <label for="tipoChocolate" class="  control-label">Recheado ou de Casca?</label>

                <div class=" ">
                    <select class="form-control" id="tipoOvoRecheio" name="tipoOvoRecheio">
                        <option value="1">Recheado</option>
                        <option value="0">Casca</option>

                    </select>
                </div>

            </div>


            <div id="tradicional-peso-casca" class="form-group col-md-6">
                <label for="tipoChocolate" class="  control-label">Peso/Valor</label>

                <div class=" ">
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



            <div id="tradicional-peso-colher" class="form-group col-md-6">
                <label for="tipoChocolate" class="  control-label">Escolha o peso do ovo</label>

                <div class=" ">
                    <select class="form-control" id="colher-peso-recheado-select" name="colher-peso-recheado-select">
                        <option value="0">90g - R$6,00 - Saquinho</option>
                        <option value="1">250g - R$15,00 - Caixa</option>
                        <option value="2">350g - R$27,00 - Caixa</option>
                        <option value="3">500g - R$65,00 - Caixa</option>
                        <option value="4">1kg - R$90,00 - Caixa</option>
                    </select>
                </div>

            </div>

            <div id="form-quantidade-recheio" class="form-group col-md-6">
                <label for="tipoChocolate" class="  control-label">Quantos recheios?</label>

                <div class=" ">
                    <select class="form-control" id="quantidadeRecheio" name="quantidadeRecheio">
                        <option value="2">Meio a meio</option>
                        <option value="1">Unico</option>

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
                <label for="tipoChocolate" id="tipoRecheioLabel" class="  control-label">Qual é o primeiro recheio?</label>

                <div class=" ">
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
                <label for="tipoChocolate" class="  control-label">Qual é o segundo recheio?</label>

                <div class=" ">
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

            <div id="tradicional-peso-recheado" class="form-group col-md-6">
                <label for="tipoChocolate" class="  control-label">Escolha o peso do ovo</label>

                <div class=" ">
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

            <div id="tradicional-formato" class="form-group col-md-6">
                <label for="tipoChocolate" class="  control-label">Qual o formato do ovo?</label>

                <div class=" ">
                    <select class="form-control" id="tipo-formato-select" name="tipoFormato">
                        <option value="0">Tradicional (ovo)</option>
                        <option value="1">Coração</option>

                    </select>
                </div>

            </div>
            <div class="clearfix"></div>
            <div class="checkbox col-md-6">
                <label>
                    <input type="checkbox" name="checkbox" value="1"checked> Desejo receber promoções por e-mail.
                </label>
            </div>


            <div class="col-md-6">
                <button type="submit" class="btn btn-default btn-lg pull-right margin-bootom"><span
                        class="glyphicon glyphicon-shopping-cart"
                        aria-hidden="true"></span> Enviar
                </button>
            </div>


        </div>

    </form>


</div>
    <div class="clear"></div>
<!-- /container -->
<?php include 'footer.php';
