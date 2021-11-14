
<?php
require("conectarBD.php");

    // RECIBE LOS DATOS DE LA APP
    $correo = $_POST['correo'];
    //$Contraseña = $_GET['Contraseña'];

    // DATOS DE PRUEBA
    //$correo = "yalpita@gmail.com";

    // CREAMOS LA CONSULTA
    $sql = "SELECT cedula, contraseña, edad, eps, nit, nombre, telefono FROM conductor WHERE correo='$correo'";
    $resultado = $mysqli->query($sql);

    while($fila=$resultado->fetch_array()){
        $datos[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($datos);

    // $resultado -> close();
    //$query = $mysqli->query($sql);       
    //$ext= mysqli_fetch_array($query);
?>