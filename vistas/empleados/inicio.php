<div class="card">
  <div class="card-header">
        <a name="" id="" class="btn btn-success my-2" href="?controlador=empleados&accion=crear" role="button">Agregar Empleado</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-secondary">
        <thead >
          <tr >
            <th class="bg-dark text-white" scope="col">ID</th>
            <th class="bg-dark text-white" scope="col">Dni</th>
            <th class="bg-dark text-white" scope="col">Nombre</th>
            <th class="bg-dark text-white" scope="col">A. Paterno</th>
            <th class="bg-dark text-white" scope="col">A. Materno</th>
            <th class="bg-dark text-white" scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
          <!-- recupera datos del obtenidos del modelo en el cotnrolador -->
    <?php foreach ($empleado as $valor) { ?>
          <tr>
            <td scope="row"><?php echo $valor->getId(); ?></td>
            <td><?php echo $valor->getNombre(); ?></td>
            <td><?php echo $valor->getNombre(); ?></td>
            <td><?php echo $valor->getAPaterno(); ?></td>
            <td><?php echo $valor->getAMaterno(); ?></td>
            <td>

              
              <div class="btn-group" role="group" aria-label="">
      
                <a href="?controlador=empleados&accion=editar&id=<?php echo $valor->getId(); ?>" class="btn btn-primary">Editar</a>
                <a href="?controlador=empleados&accion=borrar&id=<?php echo $valor->getId(); ?>" class="btn btn-danger" onclick="return confirm('¿Deseas eliminar?')" >Eliminar</a>
              </div>
            </td>
          </tr>
    <?php }?>     
        </tbody>

        
      </table>

    </div>

  </div>
  <div class="card-footer text-muted">

  </div>
</div>









