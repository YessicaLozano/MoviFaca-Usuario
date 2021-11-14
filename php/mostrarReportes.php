
<?php
require("conectarBD.php");

    // CREAMOS LA CONSULTA
    $sql = "SELECT imprevisto FROM ruta";
    $resultado = $mysqli->query($sql);

    while($fila=$resultado->fetch_array()){
        $datos[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($datos);

        

?>