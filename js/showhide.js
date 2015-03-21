/**
 * File: js/showhide.js
 * Author: design1online.com, LLC
 * Purpose: toggle the visibility of fields depending on the value of another field
 * http://jsfiddle.net/mjaric/tfFLt/
 **/
$(document).ready(function () {
    toggleFields(); //call this first so we start out with the correct visibility depending on the selected form values
    //this will call our toggleFields function every time the selection value of our underAge field changes
    $("#tipoOvo").change(function () {
        toggleFields();
    });

    $("#tipoOvoRecheio").change(function () {
        toggleFields();
    });

    $("#tradicional-peso-casca-select").change(function () {
        toggleFields();
    });

    $("#tradicional-peso-recheado-select").change(function () {
        toggleFields();
    });

    $("#tradicional-peso-colher").change(function () {
        toggleFields();
    });

    $("#tradicional-peso-casca-select").change(function () {
        toggleFields();
    });

    $("#quantidadeRecheio").change(function () {
        toggleFields();
    });


});
//this toggles the visibility of our parent permission fields depending on the current selected value of the underAge field
function toggleFields() {

    //tipoOvo == 0 => tradicional
    //
    if ($("#tipoOvo").val() == 0) {
        $("#form-tradicional").show();
        $("#form-tradicional-tipo").show();
        $('#tradicional-formato').show();
        $('#tradicional-peso-casca').show();
        $('#tradicional-peso-colher').hide();

        //tradicional recheado
        if($("#tipoOvoRecheio").val() == 1 ) {
            $("#tradicional-recheioA").show();
            $("#tradicional-recheioB").show();
            $('#tradicional-peso-casca').hide();
            $('#tradicional-peso-recheado').show();
            $("#form-quantidade-recheio").show();
            $("#tipoRecheioLabel").text("Qual é o primeiro recheio?");

            //quantidade recheios
            if($("#quantidadeRecheio").val() == 2 ) {
                $("#tipoRecheioLabel").text("Qual é o primeiro recheio?");
                $('#tradicional-recheioB').show();
            }

            else {
                $('#tradicional-recheioB').hide();
                $("#tipoRecheioLabel").text("Escolha o Recheio");
            }


        }

        //casca form-quantidade-recheio
        else {
            $("#form-quantidade-recheio").hide();
            $("#tradicional-recheioA").hide();
            $("#tradicional-recheioB").hide();
            $('#tradicional-peso-casca').show();
            $('#tradicional-peso-recheado').hide();
        }



    }
    //tipo colher
    else
    {
        $("#form-tradicional").hide();
        $("#form-tradicional-tipo").hide();
        $('#tradicional-formato').hide();

        $('#tradicional-peso-casca').hide();
        $('#tradicional-peso-recheado').hide();
        $('#tradicional-peso-colher').show();
        $('#tradicional-recheioB').hide();
        $("#tipoRecheioLabel").text("Escolha o Recheio");
        $("#form-quantidade-recheio").hide();

    }

    if (( $("#tradicional-peso-casca-select").val() >1 || $("#tradicional-peso-recheado-select").val()>1)
         &&( $("#tipoOvo").val()==0) ) {
        $("#tradicional-formato").show();
    }
    else
    {
        $("#tradicional-formato").hide();
    }


}