<?php 

$query =("SELECT id_producto from carritopedido");

if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");

$pdo = mysqli_query($connect,$query);
$vacio = mysqli_query($connect,("SELECT COUNT(*) as total FROM carritopedido "));
$resultado = 0;
foreach ($vacio as $total) {

  $resultado =  $total["total"]; 
  
}


if ($resultado > 0){ 
while ($rows = mysqli_fetch_array($pdo)){ 
  $arreglo []= array(
          'id_producto' => $rows['id_producto']          
          );
}

foreach ($arreglo as $product) {
$actualizaCantidad = ("UPDATE productos SET cantidad= cantidad+1 WHERE id='".$product["id_producto"]."'");
  mysqli_query($connect,$actualizaCantidad);

}

$q = ("TRUNCATE TABLE CARRITOPEDIDO");
mysqli_query($connect,$q);

echo " 
<div class='container'>
<div class='alert alert-success'>
  <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong></strong> pedido cancelado exitosamente!
</div>
</div>

";

}else{
 echo "<script language='JavaScript'> 
if(confirm('¿Esta eguro que desea cancelar?')){
                                cargarContenido();
                      }
</script>";
}
 ?>