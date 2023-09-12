<?php

class ControladorEmpleados{

  // muestra la tabla
  public function inicio(){


        require_once './vistas/empleados/inicio.php';

  }

  public function crear(){
    
      if($_POST){
            print_r($_POST);
      }
        require_once './vistas/empleados/crear.php';

  }

  public function editar(){

    
        require_once './vistas/empleados/editar.php';

  }

}


?>