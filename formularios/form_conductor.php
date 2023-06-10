<h1>Cree al Conductor</h1>

<form action="../formularios/insertar_conductor.php" method="POST" enctype="multipart/form-data" >
  <div class="mb-3">
    <label for="num_cedula" class="form-label">Numero de Cedula</label>
    <input type="number" class="form-control" name="num_cedula" placeholder="Numero de Cedula">
  </div>
  <div class="mb-3">
    <label for="primer_nombre" class="form-label">Primer Nombre</label>
    <input type="text" class="form-control" name="primer_nombre" placeholder="Primer Nombre">
  </div>
  <div class="mb-3">
    <label for="segundo_nombre" class="form-label">Segundo Nombre</label>
    <input type="text" class="form-control" name="segundo_nombre" placeholder="Segundo Nombre">
  </div>
  <div class="mb-3">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
  </div>
  <div class="mb-3">
    <label for="direccion" class="form-label">Direccion</label>
    <input type="text" class="form-control" name="direccion" placeholder="Direccion">
  </div>
  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" placeholder="Telefono">
  </div>
  <div class="mb-3">
    <label for="ciudad" class="form-label">Ciudad</label>
    <input type="text" class="form-control" name="ciudad" placeholder="Ciudad">
  </div>

    <div class="d-grid gap-2">
        <input class="btn btn-primary" type="submit" value="Enviar">
    </div>
</form>
<hr>