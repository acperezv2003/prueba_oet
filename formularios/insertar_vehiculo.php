<?php
require '../conexion/conect.php';
?>

<?php
 
    $placa = $_POST ['placa'];
    $color = $_POST ['color'];
    $marca = $_POST ['marca'];
    $tipo_vehiculo = $_POST ['tipo_vehiculo'];
    $cedula_conductor = $_POST ['cedula_conductor'];
    $cedula_propietario = $_POST ['cedula_propietario'];


    $sql = "INSERT INTO vehiculo (placa, color, marca, tipo_vehiculo, id_conductor, id_propietario) VALUES('{$placa}','{$color}','{$marca}','{$tipo_vehiculo}','{$cedula_conductor}','{$cedula_propietario}');";

    $result = mysqli_query($bd,$sql);
    if ($result) {
        header("Location: ../index.php");
        exit;
    }else{
        echo "ocurrio un error";
        die("Error en la consulta: " . mysqli_error($bd));
    };

    mysqli_close($bd);  
?>