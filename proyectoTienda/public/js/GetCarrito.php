<?php 


$id = $_POST['ID'];

$q = ("SELECT id,CLAVE,descripcion,costoventa from productos where id='".$id."'");


if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
  if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");

$pdo = mysqli_query($connect,$q);

if (!$pdo)die("No se pudo hacer la consulta");
while ($rows = mysqli_fetch_array($pdo)){ 
  $arreglo []= array(
          'id' => $rows['id'],
          'CLAVE' => $rows['CLAVE'],
          'descripcion' => $rows['descripcion'],
          'costoventa' => $rows['costoventa']
          );

foreach ($arreglo as $product) {

  $in = ("INSERT INTO carrito (id_producto, CLAVE, descripcion, costoventa) VALUES ('".$product["id"]."','".$product["CLAVE"]."','".$product["descripcion"]."','".$product["costoventa"]."')");

  $result = mysqli_query($connect,$in);

}

$q2= ("SELECT CLAVE,descripcion,costoventa from carrito");
$productosCarrito = mysqli_query($connect,$q2);
    echo " <table class='table table-hover table-striped  table table-bordered '> ";
    echo " <tr> <th>CLAVE</th> <th>Descripcion</th> <th> Costo Venta </th>  </tr> ";
foreach ($productosCarrito as $product) {
    echo "<td> ".$product["CLAVE"]." </td> <td>".$product["descripcion"]."</td> <td>".$product["costoventa"]."</td> ";
    echo " </tr>\n ";

}

$q4= ("SELECT SUM(costoventa) as total FROM carrito");
$total = mysqli_query($connect,$q4);
   echo " <table class='table table-hover table-striped  table table-bordered '> ";
   echo " <tr> <th>TOTAL</th> </tr> ";
foreach ($total as $product) {
  echo "<td> ".$product["total"]." </td>";
    echo " </tr>\n ";
}

}





 ?>