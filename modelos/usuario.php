<?php


class Usuario{

  private $usuario;

  private $correo;

  private $contrasenia;



  public function __construct(string $usuario = '', string $correo = '', string $contrasenia = ''){

    $this->usuario = $usuario;
    $this->correo = $correo;
    $this->contrasenia = $contrasenia;

  }

  public function getUsuario(){
    return $this->usuario;
  }
  public function getCorreo(){
    return $this->correo;
  }
  public function getContrasenia(){
    return $this->contrasenia;
  }

  public function buscarUsuario($usuario, $contrasenia){
    $conexionBD = new Conexion(); 
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("SELECT * FROM usuario WHERE usuario = ? AND contrasenia = ?");
    $sql->execute(array($usuario, $contrasenia));

    $usuarioData = $sql->fetch();

    if ($usuarioData) {
        // Si se encontró un usuario, crea una instancia de Usuario con los datos

        return new Usuario($usuarioData['usuario'], $usuarioData['correo'], $usuarioData['contrasenia']);
    } else {
        // Si no se encontró un usuario, puedes retornar null o algún valor indicativo de que no se encontró

        return null;
    }
    
  }

}




?>