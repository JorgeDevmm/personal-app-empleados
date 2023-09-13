<div class="card">
  <div class="card-header bg-dark text-white">
    Agregar Empleado
  </div>
  <div class="card-body">
    <form action="" method="post">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text"
          class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
      </div>

      <div class="mb-3">
        <label for="correo" class="form-label">Email</label>
        <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="correo del empleado">
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Agregar Empleado">
      <a href="?controlador=empleados&accion=inicio" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
</div>