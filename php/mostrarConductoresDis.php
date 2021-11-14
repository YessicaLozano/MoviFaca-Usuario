
<?php
require("conectarBD.php");

    // CREAMOS LA CONSULTA
    $sql = "SELECT cedula FROM conductor WHERE placa='0'";
    $resultado = $mysqli->query($sql);

    while($fila=$resultado->fetch_array()){
        $datos[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($datos);

     

?>