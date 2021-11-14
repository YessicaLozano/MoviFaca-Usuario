
<?php
require("conectarBD.php");

    // RECIBE LOS DATOS DE LA APP
    $placa = $_POST["placa"];
    //$Contraseña = $_GET['Contraseña'];

    // DATOS DE PRUEBA
    //$Contraseña = "x@gmail.com";

    // CREAMOS LA CONSULTA
    $sql = "SELECT soat, tarjeta_propiedad, tecnomecanica FROM bus WHERE placa='$placa'";
    $resultado = $mysqli->query($sql);

    while($fila=$resultado->fetch_array()){
        $datos[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($datos);

?>