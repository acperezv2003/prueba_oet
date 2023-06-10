<hr>
<!--Se crea una tabla con su diseño donde se van a ingresar los datos en filas y columnas-->
<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">Placa</th>
      <th scope="col">Marca</th>
      <th scope="col">Nombre completo del Conductor</th>
      <th scope="col">Nombre completo del Propietario</th>
    </tr>
  </thead>
  <tbody>

    <?php
      require '../conexion/conect.php';
        // Se crea una variable llamada $sql para ingresarle los datos de SQL para que haga la conexion de los campos de la tablas a la base de datos contatenandolas para que devuelva un unico resultado, se le asigna el alias "nombre_conductor" para hacer referencia a los campos que contiene conductor y no nos muestre de uno en uno los campos selccionados en la consulta para que lo relacione en solo 1 en 1, tambien se concatena de la tabla vehiculos los campos seleccionados para que devuelva un unico resultado extrayendo los campos solicitados y se hace lo mismo para la tabla de propietarios
        $sql = "SELECT vehiculo.placa,vehiculo.marca, concat_ws(' ',conductor.primer_nombre , conductor.segundo_nombre, conductor.apellidos) AS nombre_conductor, concat_ws(' ', propietario.primer_nombre,propietario.segundo_nombre, propietario.apellidos) AS nombre_propietario FROM vehiculo LEFT JOIN conductor ON vehiculo.id_conductor = conductor.num_cedula LEFT JOIN propietario ON vehiculo.id_propietario = propietario.num_cedula";
           
        // Se crea la vairable $result para ejecutar la consulta de la variable $bd de la base de datos y la $sql de la funcion mysqli_query y si esto trae un resulado y lo dibuja en la tabla en su lugar especifico
        $result = mysqli_query($bd,$sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["placa"] . "</td>";
            echo "<td>" . $row["marca"] . "</td>";
            echo "<td>" . $row["nombre_conductor"] . "</td>";
            echo "<td>" . $row["nombre_propietario"] . "</td>";
            echo "</tr>";
          }
        }else {
          echo "<option value=''>No hay propietarios</option>";
        }
    ?>  
  </tbody>
</table>