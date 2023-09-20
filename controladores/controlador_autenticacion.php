<?php

require_once('modelos/usuario.php');
require_once('./conexion.php');


class ControladorAutenticacion{

  public function ingresar(){


    
      // envio datos
      if($_POST){
      $usuario = $_POST['usuario'];
      $contrasenia = $_POST['contrasenia'];

      
      $usuarioBuscado = new Usuario();
      $usuarioEncontrado = $usuarioBuscado->buscarUsuario($usuario,$contrasenia);


        if($usuarioEncontrado){
          
            if( $usuarioEncontrado->getUsuario() == $usuario && $usuarioEncontrado->getContrasenia() == $contrasenia){
          
                print_r('usuario existente');

                header("location:./?controlador=paginas&accion=inicio");
                    
            }
          
        }else{
            
            header("location:./?controlador=autenticacion&accion=ingresar");

        }
      }
        require_once './vistas/autenticacion/ingresar.php';

  }
}


?>