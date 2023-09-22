<div class="card">
  <div class="card-header bg-dark text-white">
    Editar Usuario
  </div>
  <div class="card-body">
    <form action="" method="post">

      <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text"
          class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Id Usuario" value="<?php echo $usuarioBuscado->getId() ;?>" readonly>
      </div>

      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text"
          class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Usuario" value="<?php echo $usuarioBuscado->getUsuario() ;?>" required>
      </div>

      <div class="mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="text"
          class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Correo" value="<?php echo $usuarioBuscado->getCorreo() ;?>" required>
      </div>

      <div class="mb-3">
        <label for="contrasenia" class="form-label">Contraseña</label>
        <input type="text"
          class="form-control" name="contrasenia" id="contrasenia" aria-describedby="helpId" placeholder="Contraseña" value="<?php echo $usuarioBuscado->getContrasenia() ;?>" required>
      </div>



      <input name="" id="" class="btn btn-success  px-3 py-2 border-0 rounded-5 mb-md-0" type="submit" value="Editar Usuario">

      <a href="?controlador=usuario&accion=inicio" class="btn btn-danger  px-3 py-2 border-0 rounded-5 mb-md-0">Cancelar</a>
    </form>
  </div>
</div>