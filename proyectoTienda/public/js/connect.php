<?php 	

$db_host="localhost"; 
$db_usuario="root"; 
$db_password=""; 
$db_nombre="tienda"; 
$connect = mysqli_connect($db_host, $db_usuario, $db_password) or die(mysql_error()); 
$db = mysqli_select_db($db_nombre, $connect) or die(mysql_error()); 

 ?>