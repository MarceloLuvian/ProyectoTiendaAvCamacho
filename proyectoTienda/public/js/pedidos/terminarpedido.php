<?php 

$id = $_POST['ID'];

if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");

$Query = ("UPDATE pedidos SET estado = 'completado' WHERE id = '".$id."' ");
mysqli_query($connect,$Query);

echo "<script language='JavaScript'> 
if(confirm('Pedido finalizado correctamente')){
                     mostrarpedidos();       
                      }
</script>";

 ?>