<?php 

if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
  if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");

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

 ?>