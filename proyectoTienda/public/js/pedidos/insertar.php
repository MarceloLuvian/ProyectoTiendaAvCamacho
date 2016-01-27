<?php 

$id = $_POST['ID'];

if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
  if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");

$query=("SELECT id,CLAVE,descripcion,costoventa, cantidad from productos where id='".$id."'");

$pdo = mysqli_query($connect,$query);

if (!$pdo)die("No se pudo hacer la consulta");
while ($rows = mysqli_fetch_array($pdo)){ 
  $arreglo []= array(
          'id' => $rows['id'],
          'CLAVE' => $rows['CLAVE'],
          'descripcion' => $rows['descripcion'],
          'costoventa' => $rows['costoventa'],
          'cantidad' => $rows['cantidad']
          );


foreach ($arreglo as $product) {
		if($product["cantidad"] > 0){
			$in = ("INSERT INTO carritopedido (id_producto, CLAVE, descripcion, costoventa) VALUES ('".$product["id"]."','".$product["CLAVE"]."','".$product["descripcion"]."','".$product["costoventa"]."')");
  			$act = ("UPDATE productos SET cantidad= cantidad-1 WHERE id='".$product["id"]."'");
  			mysqli_query($connect,$in);
  		    mysqli_query($connect,$act);
		}else{
			 echo("'<div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong>Aviso!</strong> Se agoto el producto '".$product["descripcion"]."'
</div>'");
		}
  
	} 

}

$q2= ("SELECT CLAVE,descripcion,costoventa from carritopedido");
$productosCarrito = mysqli_query($connect,$q2);
    echo " <table class='table table-hover table-striped  table table-bordered '> ";
    echo " <tr> <th>CLAVE</th> <th>Descripcion</th> <th> Costo Venta </th>  </tr> ";
foreach ($productosCarrito as $product) {
    echo "<td> ".$product["CLAVE"]." </td> <td>".$product["descripcion"]."</td> <td>".$product["costoventa"]."</td> ";
    echo " </tr>\n ";
}
 ?>