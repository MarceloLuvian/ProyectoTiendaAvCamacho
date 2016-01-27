
<?php 

$buscar = $_POST['Cadena'];

if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
  if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");


$q2= ("SELECT * from productos where descripcion like   '%".$buscar."%' OR CLAVE like '%".$buscar."%'  ");
$productosCarrito = mysqli_query($connect,$q2);

    echo " <table class='table table-bordered '> ";
    echo " <tr> <th>CLAVE</th> <th>Descripcion</th> <th> Costo Venta </th> <th>Acciones</th> </tr> ";
foreach ($productosCarrito as $product) {
	if($product["cantidad"] > 0){

	echo "<td> ".$product["CLAVE"]." </td> <td>".$product["descripcion"]."</td> <td>".$product["costoventa"]."</td> <td> <a class='btn btn-primary'  onclick='agregar(".$product["id"].");  '> agregar</a> </td> ";
   
    
	}else{
		echo "<td> ".$product["CLAVE"]." </td> <td>".$product["descripcion"]."</td> <td>".$product["costoventa"]."</td> <td> <a class='btn btn-warning disable '  '> agregar</a> </td> ";
   
	}
    
echo " </tr>\n ";
}



 ?>