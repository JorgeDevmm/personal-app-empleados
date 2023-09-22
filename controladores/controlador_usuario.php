<?php


require_once("./modelos/usuario.php");
require_once("./conexion.php");


class ControladorUsuario{

  // muestra la tabla
  public function inicio(){

      // accede a los datos del modelo
      $usuario = new Usuario();
      // invoco al metodo consultar de la instancia
      $usuario =$usuario->consultar();


        require_once './vistas/usuario/inicio.php';

  }

  // public function crear(){
    
  //     // envio datos
  //     if($_POST){
  //     $dni = $_POST['dni'];
  //     $nombre = $_POST['nombre'];
  //     $paterno = $_POST['aPaterno'];
  //     $materno = $_POST['aMaterno'];
  //     $usuario = $_POST['usuario'];
  //     $correo = $_POST['correo'];
  //     $contrasenia = $_POST['contrasenia'];

  //     $empleado = new Empleado();
  //     $empleado->crear($dni,$nombre,$paterno,$materno,$usuario,$correo,$contrasenia);
  //     // redireccionar
  //     header("location:./?controlador=empleados&accion=inicio");

  //     }
  //       require_once './vistas/empleados/crear.php';

  // }

  public function editar(){


      if($_POST){
      $id = $_POST['id'];      
      $dni = $_POST['dni'];      
      $usuario = $_POST['usuario'];
      $correo = $_POST['correo'];
      $contrasenia = $_POST['contrasenia'];



      $usuario = new Usuario();
      $usuarioBuscado = $usuario->editar($id,$dni,$usuario,$correo,$contrasenia);

      // redireccionar
      header("location:./?controlador=usuario&accion=inicio"); 
      }
    
      $id = $_GET['id'];      
      $usuario = new Usuario();
      $usuarioBuscado = $usuario->buscar($id);

        require_once './vistas/usuario/editar.php';

  }

  // public function borrar(){
  //     print_r($_GET);
  //     // envio datos
  //     if($_GET){
  //           $id = $_GET['id'];

  //           // accede a los datos del modelo
  //           $empleado = new Empleado();
  //           // invoco al metodo consultar de la instancia
  //           $empleado->borrar($id);
  //           // redireccionar
  //           header("location:./?controlador=empleados&accion=inicio");
  //           }

  //     }

  }




?>