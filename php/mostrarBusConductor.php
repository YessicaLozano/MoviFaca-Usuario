<?php
require("conectarBD.php");

    // RECIBE LOS DATOS DE LA APP
    $correo = $_POST["correo"];

    // DATOS DE PRUEBA
//
    //$Contraseña = "x@gmail.com";

    // CREAMOS LA CONSULTA
    $sql = "SELECT placa FROM conductor WHERE correo='$correo'";
    $resultado = $mysqli->query($sql);

    while($fila=$resultado->fetch_array()){
        $datos[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($datos);

    // $resultado -> close();
    //$query = $mysqli->query($sql);       
    //$ext= mysqli_fetch_array($query);
?>