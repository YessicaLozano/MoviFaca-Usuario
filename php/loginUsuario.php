
<?php
require("conectarBD.php");

    // RECIBE LOS DATOS DE LA APP
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];

        // CREAMOS LA CONSULTA
        $sql = "SELECT * FROM usuario WHERE correo='$correo' AND contraseña='$contraseña'";
        $query = $mysqli->query($sql);


        $ext= mysqli_fetch_array($query);
        if($ext!=NULL){
            echo "Ingreso Exitoso";
        }else{
            echo "No hay registro existente o escribió algo mal";
        }
        

?>