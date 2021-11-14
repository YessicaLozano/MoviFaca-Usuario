 
<?php
require("conectarBD.php");

$Placa = $_POST['Placa'];
$SOAT = $_POST['SOAT'];
$Tecnomecanica = $_POST['Tecnomecanica'];
$Tarjeta_Propiedad = $_POST['Tarjeta_Propiedad'];
$NIT = $_POST['NIT'];

    //VERIFICA QUE NO ESTEN VACIAS LAS CASILLAS
    if(empty($Placa) || empty($SOAT) || empty($Tecnomecanica) || empty($Tarjeta_Propiedad) || empty($NIT)) {
        echo "Ninguna campo puede quedar vacio";
    } else {

        // CREAMOS LA CONSULTA
        $sql = "INSERT INTO bus VALUES('$Placa', '$SOAT', '$Tecnomecanica', '$Tarjeta_Propiedad', '$NIT')";
        $query = $mysqli->query($sql);

        if($query === TRUE) {
            echo "Registro Exitoso";
        }
        
    }

?>
