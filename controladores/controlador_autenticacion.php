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

              // Iniciar session
                session_start();

              // establecer una valor a la session global
                $_SESSION["acceso"] = "1";

                print("<p>Acceso aprobado</p>");
                header("location:./?controlador=paginas&accion=inicio");
                
                    
            }else{
              print("<div class='bg-danger text-center text-white' >Acceso no autorizado no</div>");
            }
          
        }else{

        print("Usuario no Existe");


        }
      }
        require_once './vistas/autenticacion/ingresar.php';

  }
}


?>