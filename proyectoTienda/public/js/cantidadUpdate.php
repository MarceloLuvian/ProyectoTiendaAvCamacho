<?php 
$id = $_POST['ID'];

 $cantidad = ("UPDATE productos SET cantidad= cantidad-1 WHERE id='".$id."'");

if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
  if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");

mysqli_query($connect,$cantidad);
mysqli_close($connect);



 ?>