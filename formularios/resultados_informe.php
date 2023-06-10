<hr>
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
        $sql = "SELECT vehiculo.placa,vehiculo.marca, concat_ws(' ',conductor.primer_nombre , conductor.segundo_nombre, conductor.apellidos) AS nombre_conductor, concat_ws(' ', propietario.primer_nombre,propietario.segundo_nombre, propietario.apellidos) AS nombre_propietario FROM vehiculo LEFT JOIN conductor ON vehiculo.id_conductor = conductor.num_cedula LEFT JOIN propietario ON vehiculo.id_propietario = propietario.num_cedula";
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