<div class="card">
  <div class="card-header bg-dark text-white">
    Editar Perfil
  </div>
  <div class="card-body">
    <form action="" method="post">

      <div class="mb-3">
        <label for="id" class="form-label">Id perfil</label>
        <input type="text"
          class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Id Empleado" value="<?php echo $perfilBuscado->getId() ;?>" readonly>
      </div>

      <div class="mb-3">
        <label for="dni" class="form-label">Descripcion Perfil</label>
        <input type="nombre"
          class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre perfil" value="<?php echo $perfilBuscado->getNombre() ;?>" required>
      </div>

      <input name="" id="" class="btn btn-success  px-3 py-2 border-0 rounded-5 mb-md-0" type="submit" value="Editar Empleado">

      <a href="?controlador=perfiles&accion=inicio" class="btn btn-danger  px-3 py-2 border-0 rounded-5 mb-md-0">Cancelar</a>
    </form>
  </div>
</div>