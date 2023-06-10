<?php
require '../conexion/conect.php';
?>

<?php
 
    $num_cedula = $_POST ['num_cedula'];
    $primer_nombre = $_POST ['primer_nombre'];
    $segundo_nombre = $_POST ['segundo_nombre'];
    $apellidos = $_POST ['apellidos'];
    $direccion = $_POST ['direccion'];
    $telefono = $_POST ['telefono'];
    $ciudad = $_POST ['ciudad'];


    $sql = "INSERT INTO propietario VALUES('{$num_cedula}','{$primer_nombre}','{$segundo_nombre}','{$apellidos}','{$direccion}','{$telefono}','{$ciudad}');";

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