
<div class="container-xl">
  <div>
    <a name="" id="" class="btn btn-success mb-3" href="?controlador=empleados&accion=crear" role="button">Agregar Empleado</a>
  </div>
<div class="table-responsive">
  <table class="table table-secondary">
    <thead >
      <tr >
        <th class="bg-dark text-white" scope="col">ID</th>
        <th class="bg-dark text-white" scope="col">Nombre</th>
        <th class="bg-dark text-white" scope="col">Correo</th>
        <th class="bg-dark text-white" scope="col">Accion</th>
      </tr>
    </thead>
    <tbody>
      <!-- recupera datos del obtenidos del modelo en el cotnrolador -->
<?php foreach ($empleado as $valor) { ?>
      <tr>
        <td scope="row"><?php echo $valor->getId(); ?></td>
        <td><?php echo $valor->getNombre(); ?></td>
        <td><?php echo $valor->getCorreo(); ?></td>
        <td>

          
          <div class="btn-group" role="group" aria-label="">
  
            <a href="?controlador=empleados&accion=editar&id=<?php echo $valor->getId(); ?>" class="btn btn-primary">Editar</a>
            <a href="?controlador=empleados&accion=borrar&id=<?php echo $valor->getId(); ?>" class="btn btn-danger">Eliminar</a>
          </div>
        </td>
      </tr>
<?php }?>     
    </tbody>

    
  </table>

</div>
</div>




