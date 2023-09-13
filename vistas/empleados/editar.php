<div class="card">
  <div class="card-header bg-dark text-white">
    Editar Empleado
  </div>
  <div class="card-body">
    <form action="" method="post">

      <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text"
          class="form-control bg-secondary" name="id" id="id" aria-describedby="helpId" placeholder="Id Empleado" value="<?php echo $empleadoBuscado->getId() ;?>" readonly>
      </div>

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text"
          class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre" value="<?php echo $empleadoBuscado->getNombre() ;?>">
      </div>

      <div class="mb-3">
        <label for="correo" class="form-label">Email</label>
        <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="correo del empleado" value="<?php echo $empleadoBuscado->getCorreo() ;?>">
      </div>

      <input name="" id="" class="btn btn-success" type="submit" value="Editar Empleado">

            <a href="?controlador=empleados&accion=inicio" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
</div>