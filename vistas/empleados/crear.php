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
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text"
          class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Ingresar Usuario" required>
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="email"
          class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Ingresar Correo" required>
      </div>
      <div class="mb-3">
        <label for="contrasenia" class="form-label">Contraseña</label>
        <input type="password"
          class="form-control" name="contrasenia" id="contrasenia" aria-describedby="helpId" placeholder="Ingresar Contraseña" required>
      </div>



      <input name="" id="" class="btn btn-success" type="submit" value="Agregar Empleado">
      <a href="?controlador=empleados&accion=inicio" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
</div>