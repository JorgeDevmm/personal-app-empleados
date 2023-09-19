<?php

require_once('modelos/empleado.php');
require_once('./conexion.php');


class ControladorAutenticacion{

  public function ingresar(){
    
      // envio datos
      if($_POST){
      $correo = $_POST['correo'];
      $contrasenia = $_POST['contrasenia'];
      $empleado = new Empleado();
      $empleado->ingresarUsuario($correo,$contrasenia);
      // redireccionar
      header("location:./?controlador=paginas&accion=inicio");

      }
        require_once './vistas/autenticacion/inicio.php';

  }
}


?>