<?php


require_once("./modelos/empleado.php");
require_once("./conexion.php");

$conexionBD = new Conexion();

$conexionBD->crearInstancia();

class ControladorEmpleados{

  // muestra la tabla
  public function inicio(){


        require_once './vistas/empleados/inicio.php';

  }

  public function crear(){
    
      // envio datos
      if($_POST){
            print_r($_POST);
                  $nombre = $_POST['nombre'];
                  $correo = $_POST['correo'];
                  $empleado = new Empleado();
                  $empleado->crear($nombre,$correo);

      }
        require_once './vistas/empleados/crear.php';

  }

  public function editar(){

    
        require_once './vistas/empleados/editar.php';

  }

}


?>