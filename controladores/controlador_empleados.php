<?php


require_once("./modelos/empleado.php");
require_once("./conexion.php");

$conexionBD = new Conexion();
$conexionBD->crearInstancia();

class ControladorEmpleados{

  // muestra la tabla
  public function inicio(){

      // accede a los datos del modelo
      $empleado = new Empleado();
      // invoco al metodo consultar de la instancia
      $empleado =$empleado->consultar();


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
                  // redireccionar
                  header("location:./?controlador=empleados&accion=inicio");

      }
        require_once './vistas/empleados/crear.php';

  }

  public function editar(){

    
        require_once './vistas/empleados/editar.php';

  }

  public function borrar(){
      print_r($_GET);
      // envio datos
      if($_GET){
            $id = $_GET['id'];

            // accede a los datos del modelo
            $empleado = new Empleado();
            // invoco al metodo consultar de la instancia
            $empleado->borrar($id);
            // redireccionar
            header("location:./?controlador=empleados&accion=inicio");
            }

      }

  }




?>