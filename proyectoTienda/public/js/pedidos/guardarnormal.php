<?php 

$fechapedido = $_POST['fechapedido'];
$fechaliquidacion = $_POST['fechaliquidacion'];
$nombrecliente = $_POST['NombreCliente'];
$CLAVE = $_POST['CLAVE'];
$descripcion = $_POST['descripcion'];
$costoventa = $_POST['costoventa'];
$cantidad = $_POST['cantidad'];


if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
 if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");

$existe = mysqli_query($connect,"SELECT count(id) as existe from productos where CLAVE = '".$CLAVE."' ");
foreach ($existe as $row) {
	echo $row["existe"];
	if ($row["existe"] > 0){

			echo "<script language='JavaScript'> 
if(confirm('La clave de este producto ya esta en uso')){
                                
                      }
</script>";
}else {
	$fecha_actual = date("Y-m-d");
$total = $costoventa * $cantidad;
$query = ("INSERT INTO productos(tipoproducto,CLAVE,Fechaingreso,cantidad,descripcion,costocompra,costoventa, imagen) VALUES  ('interno', '".$CLAVE."','".$fecha_actual."','".$cantidad."','".$descripcion."','0','".$costoventa."','null' ) ");
mysqli_query($connect, $query);


$querypedido = ("INSERT INTO pedidos (nombrecliente, fechapedido, fechaliquidacion, total, estado) VALUES ('".$nombrecliente."','".$fechapedido."','".$fechaliquidacion."','".$total."', 'pendiente')  ");
 mysqli_query($connect,$querypedido);
 $ultimo = mysqli_query($connect, "SELECT MAX(id) as id FROM pedidos");
 			foreach ($ultimo as $ultimoid) {
 				$ultimo_id = $ultimoid["id"];
 			}
  $ultimoproducto = mysqli_query($connect, "SELECT MAX(id) as id FROM productos");
 			foreach ($ultimoproducto as $ultimop) {
 				$ultimo_idproducto = $ultimop["id"];
 			}
$querydetalle = ("INSERT INTO detallespedido (id_pedido, id_producto, CLAVE, descripcion, costoventa) VALUES ('".$ultimo_id."','".$ultimo_idproducto."','".$CLAVE."','".$descripcion."','".$costoventa."'  )");	
	mysqli_query($connect, $querydetalle);



echo "<script language='JavaScript'> 
if(confirm('Pedido agregado exitosamente')){
                        cargarContenido();        
                      }
</script>";


	}

}
 ?>