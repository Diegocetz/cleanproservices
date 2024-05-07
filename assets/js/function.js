$(document).ready(function(){

    var base_url = 'https://localhost/codeigniter/';


    $("#boton-ajax").click(function(){
        var input_valor = $("#input-valor").val();

        $.ajax({
            type: 'POST',
            url: base_url + 'ajax/crearBoton',
            data: {input_valor: input_valor },
            dataType: "json",
            success: function(resp){             
              $("#respuesta-ajax").append(resp.html);
            }
        });
    });

}); // document ready