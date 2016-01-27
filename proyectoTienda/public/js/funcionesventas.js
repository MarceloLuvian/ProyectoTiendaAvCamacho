
function procesoCarrito(id){
        var parametros = {
                "ID" : id
        };
        $.ajax({
                data:  parametros,
                url:   'js/GetCarrito.php',
                type:  'post',
                beforeSend: function () {
                        $("#texto").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#texto").html(response);
                }
        });
}
function cantidadUpdate(id){
        var parametros = {
                "ID" : id
        };
        $.ajax({
                data:  parametros,
                url:   'js/cantidadUpdate.php',
                type:  'post',
               
                success:  function (response) {
                       
                }
        });
}


function cancelar(){
        
    var txt = "¿CANCELAR VENTA? :)";
    if(confirm(txt)){
        $.ajax({
                data:  "",
                url:   'js/cancelar.php',
                type:  'post',
                beforeSend: function () {
                        $("#texto").html("");
                },
                success:  function (response) {
                        $("#respuesta").html(response);
                }
        });
}
  }



function vender(){
  if ($('input:text[name=pago]').val() == "") {
    javascript:alert("No olvide el efectivo. :)");
  }else if($('input:text[name=pago]').val() < "-1"){
          javascript:alert("No puede haber numeros negativos");
  }else{


var parametros = {
    'pago' : $('input:text[name=pago]').val()
};
        
    var txt = "¿Esta seguro que desea continuar con la venta? :)";
    if(confirm(txt)){
        $.ajax({
                data:  parametros,
                url:   'js/vender.php',
                type:  'post',
                beforeSend: function () {
                        $("#cambio").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#cambio").html(response);
                        
                }
        });
}
  }
}


  function cargarCarrito(){
    $.ajax({
                data:  "",
                url:   'js/cargarCarritoP.php',
                type:  'post',
                beforeSend: function () {
                        $("#texto").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#texto").html(response);
                }
        });

  }





    function cargarContenido()
    {
       
    window.location.reload(); 

    }
