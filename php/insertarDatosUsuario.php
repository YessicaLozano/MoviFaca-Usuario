 
<?php
require("conectarBD.php");

$nombre = $_POST["nombre"];
$contraseña = $_POST["contraseña"];
$correo = $_POST["correo"];


    //VERIFICA QUE NO ESTEN VACIAS LAS CASILLAS
    if(empty($nombre) || empty($contraseña) ||  empty($correo)){
        echo "Los campos no pueden quedar vacios";
    }else{
    //Verifica que no haya un usuario creado con ese correo 
    	$sql = "SELECT * FROM usuario WHERE correo='$correo'";
        $query = $mysqli->query($sql);
        $ext= mysqli_fetch_array($query);
        if($ext!=NULL){
            echo "Ya hay un usuario con ese correo";
        }else{
      	// CREAMOS LA CONSULTA
        	$sql = "INSERT INTO usuario (correo,contraseña,nombre)VALUES('$correo','$contraseña','$nombre')";
       		$query = $mysqli->query($sql);

        	if($query === TRUE){
            	echo "Registro Exitoso";
        	}  
        }
    }
?>
