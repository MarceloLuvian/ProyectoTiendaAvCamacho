<?php 

$pago = $_POST['pago'];



$q=("SELECT id_producto from carrito");

if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
  if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");

$q4= ("SELECT SUM(costoventa) as total FROM carrito");
$total = mysqli_query($connect,$q4);
$resultado = 0;
foreach ($total as $product) {

	$resultado =  $product["total"]; 
  
}
if ($pago<$resultado) {
	echo "<div class='alert alert-danger'>
  <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong></strong> El pago no debe ser menor al total de la venta
</div>" ;
}else if ($resultado == 0) {
   echo "  
<div class='alert alert-danger'>
  <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong></strong> Deve seleccionar al menos un producto
</div>";
 
}else{
	
	
	
 echo " <table class='table table-hover table-striped  table table-bordered '> ";
   echo " <tr> <th>Su cambio</th> </tr> ";
foreach ($total as $product) {

	$resultado = $pago - $product["total"]; 
  echo "<td> "."$".$resultado." </td>";
}

$pdo = mysqli_query($connect,$q);

if (!$pdo)die("No se pudo hacer la consulta");

while ($rows = mysqli_fetch_array($pdo)){ 
  $arreglo []= array(
          'id_producto' => $rows['id_producto']          
          );
  $del = ("TRUNCATE TABLE carrito");
  mysqli_query($connect,$del);
}

foreach ($arreglo as $product) {
	$fecha_actual = date("Y-m-d");
  $in = ("INSERT INTO venta (id_producto, fechaventa) VALUES ('".$product["id_producto"]."','".$fecha_actual."')");

  $result = mysqli_query($connect,$in);


}

   
}









 ?>