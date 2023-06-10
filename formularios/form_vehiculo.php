
<hr>
<h2> Crear Vehiculo </h2>
<form action="../formularios/insertar_vehiculo.php" method="POST" enctype="multipart/form-data" >
  <div class="mb-3">
    <label for="placa" class="form-label">Placa</label>
    <input type="numbertext" class="form-control" id="placa" placeholder="Placa" name="placa">
  </div>
  <div class="mb-3">
    <label for="color" class="form-label">Color</label>
    <input type="text" class="form-control" id="color" placeholder="Color" name="color">
  </div>
  <div class="mb-3">
    <label for="marca" class="form-label">Marca</label>
    <input type="text" class="form-control" id="marca" placeholder="Marca" name="marca">
  </div>
  <div class="mb-3">
    <label for="tipo_vehiculo" class="form-label">Tipo de Vehiculo</label>
    <select type="text" class="form-control" id="tipo_vehiculo" placeholder="Tipo de Vehiculo" name="tipo_vehiculo">
      <option value="publico">Publico</option>
      <option value="privado">Privado</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="cedula_conductor" class="form-label">Nombre de Conductor</label>
    <select type="text" class="form-control" id="cedula_conductor" placeholder="Nombre de Conductor" name="cedula_conductor">
    <?php
        require '../conexion/conect.php';

        // Se crea una variable llamada $sql para ingresarle los datos de SQL para que haga la conexion de los campos de la tabla conductor a la base de datos
        $sql = "SELECT num_cedula, primer_nombre, segundo_nombre, apellidos FROM conductor";
        // Se crea la vairable $result para ejecutar la consulta de la variable $bd de la base de datos y la $sql de la funcion mysqli_query
        $result = mysqli_query($bd,$sql);
        // Se crea un condicional con los parametros de las variables $resultado, $num_rows pero se le hace referencia con el simbolo ->  y si es mayor a 0 se dispara el ciclo while, en el ciclo se le dan los parametros con la variable $row y se le diguala al resultado del condicional if que seria $result y se le hace la referencia a la funcion fetch_assoc() que crea un array asociativo, entra e imprime un echo para que el valor de la fila y el numero de cedula que a su vez concatena con el primer nombre, segundo nombre y apellidos del conductor.
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<option value='" . $row["num_cedula"] . "'>" . $row["primer_nombre"] . ' ' . $row["segundo_nombre"] . ' ' . $row["apellidos"] . "</option>";
          }
        //Si no se cumple la condicion, no hay propietarios
        }else {
          echo "<option value=''>No hay propietarios</option>";
        }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="cedula_propietario" class="form-label">Nombre de Propietario</label>
    <select type="text" class="form-control" id="cedula_propietario" placeholder="Nombre de Propietario" name="cedula_propietario">
     <?php
        require '../conexion/conect.php';

        // Se crea una variable llamada $sql para ingresarle los datos de SQL para que haga la conexion de los campos de la tabla propietario a la base de datos
        $sql = "SELECT num_cedula, primer_nombre, segundo_nombre, apellidos FROM propietario";
        // Se crea la vairable $result para ejecutar la consulta de la variable $bd de la base de datos y la $sql de la query
        $result = mysqli_query($bd,$sql);
        // Se crea un condicional con los parametros de las variables $resultado, $num_rows pero se le hace referencia con el simbolo ->  y si es mayor a 0 se dispara el ciclo while, en el ciclo se le dan los parametros con la variable $row y se le diguala al resultado del condicional if que seria $result y se le hace la referencia a la funcion fetch_assoc() que crea un array asociativo, entra e imprime un echo para que el valor de la fila y el numero de cedula que a su vez concatena con el primer nombre, segundo nombre y apellidos del propietario.
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<option value='" . $row["num_cedula"] . "'>" . $row["primer_nombre"] . ' ' . $row["segundo_nombre"] . ' ' . $row["apellidos"] . "</option>";
          }
        //Si no se cumple la condicion, no hay propietarios
        }else {
          echo "<option value=''>No hay propietarios</option>";
        }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<hr>