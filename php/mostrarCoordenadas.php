
<?php
require("conectarBD.php");

    
    // CREAMOS LA CONSULTA
    $sql = "SELECT Latitud, Longitud From conductor";
    $resultado = $mysqli->query($sql);

    while($fila=$resultado->fetch_array()){
        $datos[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($datos);

    $resultado -> close();
    //$query = $mysqli->query($sql);       
    //$ext= mysqli_fetch_array($query);
        

?>