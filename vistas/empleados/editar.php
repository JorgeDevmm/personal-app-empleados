<div class="card">
  <div class="card-header bg-dark text-white">
    Editar Empleado
  </div>
  <div class="card-body">
    <form action="" method="post">

      <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text"
          class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Id Empleado" value="<?php echo $empleadoBuscado->getId() ;?>" readonly>
      </div>

      <div class="mb-3">
        <label for="dni" class="form-label">DNI</label>
        <input type="text"
          class="form-control" name="dni" id="dni" aria-describedby="helpId" placeholder="DNI Empleado" value="<?php echo $empleadoBuscado->getDni() ;?>" required>
      </div>

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text"
          class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre" value="<?php echo $empleadoBuscado->getNombre() ;?>" required>
      </div>

      <div class="mb-3">
        <label for="aPaterno" class="form-label">Apellido Paterno</label>
        <input type="text"
          class="form-control" name="aPaterno" id="aPaterno" aria-describedby="helpId" placeholder="A. Paterno" value="<?php echo $empleadoBuscado->getAPaterno() ;?>" required>
      </div>

      <div class="mb-3">
        <label for="aMaterno" class="form-label">Apelido Materno</label>
        <input type="text"
          class="form-control" name="aMaterno" id="aMaterno" aria-describedby="helpId" placeholder="A. Materno" value="<?php echo $empleadoBuscado->getAPaterno() ;?>" required>
      </div>



      <input name="" id="" class="btn btn-success  px-3 py-2 border-0 rounded-5 mb-md-0" type="submit" value="Editar Empleado">

      <a href="?controlador=empleados&accion=inicio" class="btn btn-danger  px-3 py-2 border-0 rounded-5 mb-md-0">Cancelar</a>
    </form>
  </div>
</div>