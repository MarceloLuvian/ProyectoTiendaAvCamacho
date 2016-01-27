<?php 

$id = $_POST['id'];

if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");

$Query = ("SELECT * from detallespedido where id_pedido = '".$id."' ");
$Query2 = ("SELECT total as t from pedidos where id = '".$id."'  ");
$query3 = ("select cantidad from productos where id = ()");
$resultado = mysqli_query($connect,$Query2);

foreach ($resultado as $to) {
	$total = $to["t"];
}


$detalles = mysqli_query($connect, $Query);

 echo " <table class='table table-hover table-striped  table table-bordered '> ";
 echo " <tr> <th class='info'>CLAVE </th> <th class='info'> Descripcion </th> <th class='info'> Costo Venta </th>   </tr> ";

foreach ($detalles as $row) {
	
echo " <h2> Productos del pedido </h2> ";


echo "<td> ".$row["CLAVE"]."  </td> <td> ".$row["descripcion"]." </td> <td> ".$row["costoventa"]." </td>   ";
    echo " </tr>\n ";
}


 ?>