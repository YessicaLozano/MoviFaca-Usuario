 
<?php
require("conectarBD.php");


$Latitud = $_POST['Latitud'];
$Longitud = $_POST['Longitud'];
$Correo = $_POST['Correo'];


    //VERIFICA QUE NO ESTEN VACIAS LAS CASILLAS
    if(empty($Latitud) || empty($Longitud) || empty($Correo)){
        echo "Los campos no pueden quedar vacios";
    }else{

        // CREAMOS LA CONSULTA
        $sql = "UPDATE conductor SET Longitud='$Longitud', Latitud='$Latitud' WHERE Correo='$Correo'";
        $query = $mysqli->query($sql);
        
    }

?>
