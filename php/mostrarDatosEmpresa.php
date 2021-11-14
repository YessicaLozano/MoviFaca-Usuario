
<?php
require("conectarBD.php");

    // RECIBE LOS DATOS DE LA APP
    $correo = $_POST['correo'];

    // DATOS DE PRUEBA
    //$correo = "movifaca@gmail.com";


    // CREAMOS LA CONSULTA
    $sql = "SELECT contraseña, direccion, nit, nombre, telefono FROM empresa WHERE correo='$correo'";
    $resultado = $mysqli->query($sql);

    while($fila=$resultado->fetch_array()){
        $datos[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($datos);

    //$resultado -> close();
    //$query = $mysqli->query($sql);       
    //$ext= mysqli_fetch_array($query);
        

?>