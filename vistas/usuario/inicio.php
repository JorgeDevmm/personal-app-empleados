
<div class="card">
  <div class="px-4 card-header d-flex flex-column flex-md-row justify-content-between align-items-center">
        <a name="" id="" class="btn btn-success my-md-2 px-3 py-2 border-0 rounded-5" href="?controlador=usuario&accion=crear" role="button">Agregar Usuario</a>

        <!-- <form method="get" action="?controlador=empleados&accion=busqueda&dni=" class="d-flex flex-column flex-md-row my-md-2 justify-content-between">
        <input type="text" name="dni" id="dni" class="text-center my-2 my-md-0 mx-md-2" placeholder="Ingresar DNI">
        <a type="submit" href="?controlador=empleados&accion=busqueda" class="btn btn-success  px-3 py-2 border-0 rounded-5 mb-md-0"><i class="bi bi-search"></i> Buscar</a>
        </form> -->

  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-secondary">
        <thead >
          <tr >
            <th class="bg-dark text-white" scope="col">ID</th>
            <th class="bg-dark text-white" scope="col">Usuario</th>
            <th class="bg-dark text-white" scope="col">Correo</th>
            <th class="bg-dark text-white" scope="col">Contrasenia</th>
            <th class="bg-dark text-white text-center" scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
          <!-- recupera datos del obtenidos del modelo en el cotnrolador -->
    <?php foreach ($usuario as $valor) { ?>
          <tr>
            <td scope="row"><?php echo $valor->getId(); ?></td>
            <td><?php echo $valor->getUsuario(); ?></td>
            <td><?php echo $valor->getCorreo(); ?></td>
            <td><?php echo $valor->getContrasenia(); ?></td>

            <td>

              
              <div class="d-flex justify-content-center" role="group" aria-label="">
      
                <a href="?controlador=usuario&accion=editar&id=<?php echo $valor->getId(); ?>" class="d-flex align-items-center btn btn-success  px-3 py-2 border-0 rounded-5 me-2 mb-md-0"><i class="bi bi-pencil-square"></i> Editar</a>
                <a href="?controlador=usuario&accion=borrar&id=<?php echo $valor->getId(); ?>" class="d-flex align-items-center btn btn-danger  px-3 py-2 border-0 rounded-5 mb-md-0" onclick="return confirm('¿Deseas eliminar?')" ><i class="bi bi-trash"></i> Eliminar</a>
              </div>
            </td>
          </tr>
    <?php }?>     
        </tbody>

        
      </table>

    </div>

  </div>

</div>









