<?php

require_once('modelos/empleado.php');
require_once('./conexion.php');


class ControladorAutenticacion{

  public function ingresar(){


    
      // envio datos
      if($_POST){
      $usuario = $_POST['correo'];
      $contrasenia = $_POST['contrasenia'];



           print_r($_POST); 
      $empleado = new Empleado();
      $empleado->buscarUsuario($usuario,$contrasenia);
      // redireccionar
      header("location:./?controlador=paginas&accion=inicio");

      }
        require_once './vistas/autenticacion/ingresar.php';

  }
}


?>