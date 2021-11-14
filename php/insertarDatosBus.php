 
<?php
require("conectarBD.php");

$soat = $_POST["soat"];
$placa = $_POST["placa"];
$tecnomecanica = $_POST["tecnomecanica"];
$tarjeta_propiedad = $_POST["tarjeta_propiedad"];
$asignado= $_POST["asignado"];


    //VERIFICA QUE NO ESTEN VACIAS LAS CASILLAS
    if(empty($soat) || empty($placa) || empty($tecnomecanica) || empty($tarjeta_propiedad)){
        echo "Los campos no pueden quedar vacios";
    }else{

        //Verificamois que no haya un registro con esa cedula
        $sql = "SELECT * FROM bus WHERE placa='$placa'";
        $query = $mysqli->query($sql);
        $ext= mysqli_fetch_array($query);
        // CREAMOS LA CONSULTA

        if($ext!=NULL){
            echo "Ya hay un bus con esa placa";
        }else{
        // CREAMOS LA CONSULTA
            $sql = "INSERT INTO bus (soat, tecnomecanica, placa, tarjeta_propiedad, asignado)VALUES('$soat', '$tecnomecanica', '$placa', '$tarjeta_propiedad', '$asignado')";
            $query = $mysqli->query($sql);

            if($query === TRUE){
                echo "Registro Exitoso";
            }  
        }

    }


?>

