<?php

class ControladorEmpleados{

  // muestra la tabla
  public function inicio(){


        require_once './vistas/empleados/inicio.php';

  }

  public function crear(){
    
        require_once './vistas/empleados/crear.php';

  }

  public function editar(){

    
        require_once './vistas/empleados/editar.php';

  }

}


?>