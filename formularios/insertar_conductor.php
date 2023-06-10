<?php
require '../conexion/conect.php';
?>

<?php
    //Se crean las variables de cada uno de los nombres de los campos especificos que tiene la tabla conductor y se le hace referencia con el objeto tipo array llamado $_POST
    $num_cedula = $_POST ['num_cedula'];
    $primer_nombre = $_POST ['primer_nombre'];
    $segundo_nombre = $_POST ['segundo_nombre'];
    $apellidos = $_POST ['apellidos'];
    $direccion = $_POST ['direccion'];
    $telefono = $_POST ['telefono'];
    $ciudad = $_POST ['ciudad'];

    // Se crea una variable llamada $sql para ingresarle los datos de SQL para que haga la conexion de los campos de la tabla conductor a la base de datos
    $sql = "INSERT INTO conductor VALUES('{$num_cedula}','{$primer_nombre}','{$segundo_nombre}','{$apellidos}','{$direccion}','{$telefono}','{$ciudad}');";

    // Se crea la vairable $result para ejecutar la consulta de la variable $bd de la base de datos y la $sql de la funcion mysqli_query y si esto trae resulado lo redirexiona o lo envia al index.php
    $result = mysqli_query($bd,$sql);
    if ($result) {
        header("Location: ../index.php");
        exit;
    //Si no, se imprime el mensaje "ocurrio un error" y cierra la consulta
    }else{
        echo "ocurrio un error";
        die("Error en la consulta: " . mysqli_error($bd));
    };

    mysqli_close($bd);  
?>