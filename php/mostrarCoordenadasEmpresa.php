
<?php
require("conectarBD.php");

    // RECIBE LOS DATOS DE LA APP
    $Correo = $_GET['Correo'];
    //$Contraseña = $_GET['Contraseña'];

    // DATOS DE PRUEBA
    //$Correo = "FacaTrans@gmail.com";
    //$Contraseña = "x@gmail.com";

    // CREAMOS LA CONSULTA
    //Esta consulta devuelve las coordenadas de los buses de esta empresa en especifico
    $sql = "SELECT c.Latitud, c.Longitud FROM conductor c JOIN empresa emp USING(NIT) WHERE emp.Correo='$Correo'";
    $resultado = $mysqli->query($sql);

    while($fila=$resultado->fetch_array()){
        $datos[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($datos);

    $resultado -> close();
    //$query = $mysqli->query($sql);       
    //$ext= mysqli_fetch_array($query);
        

?>