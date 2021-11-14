
<?php
require("conectarBD.php");

$asignado = $_POST['asignado'];

    // CREAMOS LA CONSULTA
    $sql = "SELECT placa FROM bus WHERE asignado='$asignado'";
    $resultado = $mysqli->query($sql);

    while($fila=$resultado->fetch_array()){
        $datos[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($datos);

     

?>