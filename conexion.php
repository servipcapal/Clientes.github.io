<?php
/*Datos de conexion a la base de datos*/
$db_host = "http://sql10.freesqldatabase.com/";
$db_user = "sql10720815";
$db_pass = "FlxYESglgi";
$db_name = "korovaclub";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>
