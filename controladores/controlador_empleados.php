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
      $dni = $_POST['dni'];
      $nombre = $_POST['nombre'];
      $paterno = $_POST['aPaterno'];
      $materno = $_POST['aMaterno'];
      $contrasenia = $_POST['contrasenia'];
      $materno = $_POST['aMaterno'];
      // $correo = $_POST['correo'];
      $empleado = new Empleado();
      $empleado->crear($dni,$nombre,$paterno,$materno);
      // redireccionar
      header("location:./?controlador=empleados&accion=inicio");

      }
        require_once './vistas/empleados/crear.php';

  }

  public function editar(){

      if($_POST){
      $id = $_POST['id'];      
      $dni = $_POST['dni'];      
      $nombre = $_POST['nombre'];
      $aPaterno = $_POST['aPaterno'];
      $aMaterno = $_POST['aMaterno'];


      $empleado = new Empleado();
      $empleadoBuscado = $empleado->editar($id,$dni,$nombre,$aPaterno,$aMaterno);

      // redireccionar
      header("location:./?controlador=empleados&accion=inicio"); 
      }
    
      $id = $_GET['id'];      
      $empleado = new Empleado();
      $empleadoBuscado = $empleado->buscar($id);

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