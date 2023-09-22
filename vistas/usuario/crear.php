<div class="card">
  <div class="card-header bg-dark text-white">
    Agregar Usuario
  </div>
  <div class="card-body">
    <form action="" method="post">
      <div class="mb-3">
        <label for="dni" class="form-label">Dni</label>
        <input type="text"
          class="form-control" name="dni" id="dni" aria-describedby="helpId" placeholder="Dni" required>
      </div>
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text"
          class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Usuario" required>
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="text"
          class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Correo" required>
      </div>
      <div class="mb-3">
        <label for="contrasenia" class="form-label">Contraseña</label>
        <input type="password"
          class="form-control" name="contrasenia" id="contrasenia" aria-describedby="helpId" placeholder="Contraseña" required>
      </div>



      <input name="" id="" class="btn btn-success my-2 px-3 py-2 border-0 rounded-5 mb-md-0" type="submit" value="Agregar Usuario">
      <a href="?controlador=usuario&accion=inicio" class="btn btn-danger my-2 px-3 py-2 border-0 rounded-5 mb-md-0">Cancelar</a>
    </form>
  </div>
</div>