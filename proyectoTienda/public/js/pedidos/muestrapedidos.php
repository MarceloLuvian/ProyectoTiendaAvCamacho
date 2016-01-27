<?php 

if (!($connect = mysqli_connect('localhost', 'root',''))) die("No se pudo conectar");
 
if (!mysqli_select_db($connect,"tienda")) die("no hay acceso a la bd");

$query = ("SELECT *FROM PEDIDOS order by estado desc");
$resultado = mysqli_query($connect, $query);



	 echo " <table class='table table-hover table-striped  table table-bordered '> ";
    echo " <tr> <th class='info'>Nombre Cliente</th> <th class='info'> Fecha del pedido </th> <th class='info'> Fecha de liquidacion </th> <th class='info'> Total a pagar </th> <th class='info'> Estado del pedido </th>  <th class='info'> Acciones </th>  </tr> ";

foreach ($resultado as $row) {

   if ($row["estado"] == "pendiente"){
   	 echo "<td> ".$row["nombrecliente"]." </td> <td> ".$row["fechapedido"]." </td> <td> ".$row["fechaliquidacion"]." </td> <td>".$row["total"]." </td>  <td>".$row["estado"]." </td> <td> <button type='button' class='btn btn-info ' data-toggle='modal' data-target='#modal2' onclick='detalles(".$row["id"].")' > Detalles </button> <button class='btn btn-success' type='button' onclick= 'terminarpedido(".$row["id"].")'>Finalizar</button> </td> ";
    echo " </tr>\n ";
}else{
	 echo "<td> ".$row["nombrecliente"]." </td> <td> ".$row["fechapedido"]." </td> <td> ".$row["fechaliquidacion"]." </td> <td>".$row["total"]." </td>  <td>".$row["estado"]." </td> <td> <button type='button' class='btn btn-info ' data-toggle='modal' data-target='#modal2' onclick='detalles(".$row["id"].")'> Detalles </button> <button class='btn btn-warning disabled'>Liquidar</button> </td> ";
    echo " </tr>\n ";

}
    
	
      
    


} 

 ?>