<?php
// VARIABLES QUE ALMACENAN LA CONEXION A LA BASE DE DATOS
$mysqli = new mysqli("localhost","root","","movifaca");
// COMPROBAMOS LA CONEXION
if($mysqli->connect_errno) {
	echo("Fallo la conexion");
	exit;
}

?>