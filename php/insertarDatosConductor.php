 
<?php
require("conectarBD.php");

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$cedula = $_POST["cedula"];
$contraseña = $_POST["contraseña"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$eps = $_POST["eps"];
$placa = "0";
$disponibilidad = "0";
$nit = $_POST["nit"];



    //VERIFICA QUE NO ESTEN VACIAS LAS CASILLAS
    if(empty($nombre) || empty($edad) || empty($cedula) || empty($contraseña) || empty($telefono) || empty($correo) || empty($eps)){
        echo "Los campos no pueden quedar vacios";
    }else{

        //Verificamois que no haya un registro con esa cedula
        $sql = "SELECT * FROM conductor WHERE cedula='$cedula'";
        $query = $mysqli->query($sql);
        $ext= mysqli_fetch_array($query);
        // CREAMOS LA CONSULTA

        if($ext!=NULL){
            echo "Ya hay un usuario con ese correo";
        }else{
        // CREAMOS LA CONSULTA
            $sql = "INSERT INTO conductor (cedula, contraseña,  correo, disponibilidad, edad, eps, nit, nombre, placa, telefono)VALUES('$cedula', '$contraseña', '$correo', '$disponibilidad', '$edad', '$eps', '$nit', '$nombre', '$placa', '$telefono')";
            $query = $mysqli->query($sql);

            if($query === TRUE){
                echo "Registro Exitoso";
            }  
        }
    }


?>

