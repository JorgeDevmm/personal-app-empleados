<div class="card">
  <div class="card-header bg-dark text-white">
    Agregar Empleado
  </div>
  <div class="card-body">
    <form action="" method="post">
      <div class="mb-3">
        <label for="dni" class="form-label">Dni</label>
        <input type="text"
          class="form-control" name="dni" id="dni" aria-describedby="helpId" placeholder="Dni" required>
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text"
          class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre" required>
      </div>
      <div class="mb-3">
        <label for="aPaterno" class="form-label">Paterno</label>
        <input type="text"
          class="form-control" name="aPaterno" id="aPaterno" aria-describedby="helpId" placeholder="Apellido Paterno" required>
      </div>
      <div class="mb-3">
        <label for="aMaterno" class="form-label">Materno</label>
        <input type="text"
          class="form-control" name="aMaterno" id="aMaterno" aria-describedby="helpId" placeholder="Apellido Materno" required>
      </div>



      <input name="" id="" class="btn btn-success my-2 px-3 py-2 border-0 rounded-5 mb-md-0" type="submit" value="Agregar Empleado">
      <a href="?controlador=empleados&accion=inicio" class="btn btn-danger my-2 px-3 py-2 border-0 rounded-5 mb-md-0">Cancelar</a>
    </form>
  </div>
</div>