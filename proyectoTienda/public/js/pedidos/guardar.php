<?php 	

$fechapedido = $_POST['fechapedido'];
$fechaliquidacion = $_POST['fechaliquidacion'];
$nombrecliente = $_POST['NombreCliente'];


if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
  if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");


$vacio = mysqli_query($connect,("SELECT COUNT(*) as total FROM carritopedido "));
$resultado = 0;
foreach ($vacio as $total) {

  $resultado =  $total["total"]; 
  
}


if ($resultado > 0){ 
$q4= ("SELECT SUM(costoventa) as total FROM carritopedido");
$total = mysqli_query($connect,$q4);
  
foreach ($total as $product) {
	
  $querypedido = ("INSERT INTO pedidos (nombrecliente, fechapedido, fechaliquidacion, total, estado) VALUES ('".$nombrecliente."','".$fechapedido."','".$fechaliquidacion."','".$product["total"]."', 'pendiente')  ");
 mysqli_query($connect,$querypedido);
 $ultimo = mysqli_query($connect, "SELECT MAX(id) as id FROM pedidos");
 			foreach ($ultimo as $ultimoid) {
 				$ultimo_id = $ultimoid["id"];
 			}
$Query1=("select *FROM carritopedido");
$resultado = mysqli_query($connect, $Query1);
foreach ($resultado as $row) {
	$querydetalle = ("INSERT INTO detallespedido (id_pedido, id_producto, CLAVE, descripcion, costoventa) VALUES ('".$ultimo_id."','".$row["id_producto"]."','".$row["CLAVE"]."','".$row["descripcion"]."','".$row["costoventa"]."'  )");	
	mysqli_query($connect, $querydetalle);

}
mysqli_query($connect, "TRUNCATE TABLE carritopedido");

// TODO OK
echo "<script language='JavaScript'> 
if(confirm('Pedido agregado exitosamente')){
                                cargarContenido();
                      }
</script>";
}



	
}else{
echo("<div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong>Aviso!</strong> Debe agregar almenos un producto para continuar
</div>");
}


 ?>