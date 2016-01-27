


function buscar(cadena){
        var parametros = {
                "Cadena" : cadena
        };
        $.ajax({
                data:  parametros,
                url:   'js/pedidos/buscar.php',
                type:  'post',
                beforeSend: function () {
                        $("#producto").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#producto").html(response);
                }
        });
}

function  vaciar(){
     $('#myModal').on('hidden', function() {
    $('#myModal').removeData('myModal');
});
}

function can(){
     $.ajax({
                data:  "",
                url:   'js/pedidos/cancelar.php',
                type:  'post',
                beforeSend: function () {
                        $("#respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#respuesta").html(response);
                }
        });
}

function mostrarpedidos(){
     $.ajax({
                data:  "",
                url:   'js/pedidos/muestrapedidos.php',
                type:  'post',
                beforeSend: function () {
                        $("#listapedidos").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#listapedidos").html(response);
                }
        });
}

function agregar(id){

      var parametros = {
                "ID" : id
               
        };
        $.ajax({
                data:  parametros,
                url:   'js/pedidos/insertar.php',
                type:  'post',
                beforeSend: function () {
                        $("#carritoproducto").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#carritoproducto").html(response);
                }
        });
                      

}

function detalles(id){

      var parametros = {
                "id" : id
               
        };
        $.ajax({
                data:  parametros,
                url:   'js/pedidos/detallespedido.php',
                type:  'post',
               beforeSend: function () {
                        $("#muestradetalle").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#muestradetalle").html(response);
                }
        });
                      

}
function terminarpedido(id){
 
 var txt2 = "¿Esta seguro que desea finalizar el pedido?";
    if(confirm(txt2)){
           var parametros = {
                "ID" : id
               
        };
        $.ajax({
                data:  parametros,
                url:   'js/pedidos/terminarpedido.php',
                type:  'post',
              beforeSend: function () {
                        $("#carritoproducto").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#carritoproducto").html(response);
                }
        });
                  
}
}

function ocultar(){
document.getElementById('ocultar').style.display = 'none';
document.getElementById('buscador').style.display = 'none';
document.getElementById('uno').style.display = 'none';
document.getElementById('dos').style.display = 'block';
document.getElementById('guarda').style.display = 'none';
document.getElementById('guarda2').style.display = 'block';
document.getElementById('clav').style.display = 'block';
document.getElementById('descri').style.display = 'block';
document.getElementById('costo').style.display = 'block';
document.getElementById('canti').style.display = 'block';
}

function mostrar(){
document.getElementById('ocultar').style.display = 'block';
document.getElementById('buscador').style.display = 'block';
document.getElementById('uno').style.display = 'block';
document.getElementById('dos').style.display = 'none';
document.getElementById('guarda').style.display = 'block';
document.getElementById('guarda2').style.display = 'none';
document.getElementById('clav').style.display = 'none';
document.getElementById('descri').style.display = 'none';
document.getElementById('costo').style.display = 'none';
document.getElementById('canti').style.display = 'none';
}

function respuesta()
{
    var txt2 = "Pedido registrado exitosamente"
    if(confirm(txt2)){
                                cargarContenido();
                      }
}



function guardar(){
    if($("#NombreCliente").val() == ""){
        javascript:alert("Es necesario que introdusca el nombre del cliente. :)");
    }else{

       
     var txt = "¿Esta seguro que desea continuar? :)";

    if(confirm(txt)){
         var parametros = {
                "fechapedido" : $("#fechapedido").val(),
                "fechaliquidacion" : $("#fechaliquidacion").val(),
                "NombreCliente" :$("#NombreCliente").val()
               
        };
        $.ajax({
                data:  parametros,
                url:   'js/pedidos/guardar.php',
                type:  'post',
                beforeSend: function () {
                        $("#carritoproducto").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#carritoproducto").html(response);
                      
                }
        });
    }
     }       



}


function guardarnormal(){
    if(($("#NombreCliente").val() == "") || ($("#CLAVE").val() == "")||($("#descripcion").val() == "") || ($("#costoventa").val() == "") || ($("#cantidad").val() == "")) {
        javascript:alert(" Los campos con * son necesarios :)");
    }else if(($("#cantidad").val() <= 0)){
     javascript:alert(" La cantidad del producto no puede ser menor o igual a '0'" );
    }else if(($("#costoventa").val() <= 0)){
            javascript:alert(" El costo del producto no puede ser menor o igual a '0'" );
}    else {

       
     var txt = "¿Esta seguro que desea continuar? :)";

    if(confirm(txt)){
         var parametros = {
                "fechapedido" : $("#fechapedido").val(),
                "fechaliquidacion" : $("#fechaliquidacion").val(),
                "NombreCliente" :$("#NombreCliente").val(),
                 "CLAVE" :$("#CLAVE").val(),
                   "descripcion" :$("#descripcion").val(),
                     "costoventa" :$("#costoventa").val(),
                     "cantidad" :$("#cantidad").val()
        };
        $.ajax({
                data:  parametros,
                url:   'js/pedidos/guardarnormal.php',
                type:  'post',
                beforeSend: function () {
                        $("#carritoproducto").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#carritoproducto").html(response);
                      
                }
        });
    }
     }       


     
}