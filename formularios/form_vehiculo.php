
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
        $sql = "SELECT num_cedula, primer_nombre, segundo_nombre, apellidos FROM conductor";
        $result = mysqli_query($bd,$sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<option value='" . $row["num_cedula"] . "'>" . $row["primer_nombre"] . ' ' . $row["segundo_nombre"] . ' ' . $row["apellidos"] . "</option>";
          }
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
        $sql = "SELECT num_cedula, primer_nombre, segundo_nombre, apellidos FROM propietario";
        $result = mysqli_query($bd,$sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<option value='" . $row["num_cedula"] . "'>" . $row["primer_nombre"] . ' ' . $row["segundo_nombre"] . ' ' . $row["apellidos"] . "</option>";
          }
        }else {
          echo "<option value=''>No hay propietarios</option>";
        }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<hr>