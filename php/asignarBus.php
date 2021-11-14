 
<?php
require("conectarBD.php");

$cedula = $_POST["cedula"];
$placa = $_POST["placa"];
$asignado = $_POST["asignado"];


            $sql = "UPDATE bus SET asignado = '$asignado' WHERE placa = '$placa' ";
            $sql = "UPDATE conductor SET placa = '$placa' WHERE cedula = '$cedula' ";
            $query = $mysqli->query($sql);

            if($query === TRUE){
                echo "Registro Exitoso";
        $query = $mysqli->query($sql);

    }


?>

