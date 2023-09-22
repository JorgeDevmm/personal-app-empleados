<?php


class Usuario{

  private $id;
  private $usuario;

  private $correo;

  private $contrasenia;



  public function __construct(int $id = 0, string $usuario = '', string $correo = '', string $contrasenia = ''){
    $this->id = $id;
    $this->usuario = $usuario;
    $this->correo = $correo;
    $this->contrasenia = $contrasenia;

  }

  public function getId(){
    return $this->id;
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

  public function consultar(){
    $listaUsuarios=[];
    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->query("SELECT * FROM usuario");

    // Obtener todos los registros y lo recibo como uno con fetchAll()
    foreach($sql->fetchAll() as $usuario) {
      // guardo mi objeto de tipo empleado
      $listaUsuarios[] = new Usuario($usuario['id_usuario'], $usuario['usuario'],$usuario['correo'], $usuario['contrasenia']);
    }
    return $listaUsuarios;
  }

  // public function buscar($dni){
  //   $conexionBD = new Conexion(); 
  //   $conexionBD = $conexionBD->crearInstancia();

  //   $sql = $conexionBD->prepare("SELECT * FROM usuario u INNER JOIN empleados e ON u.id_empleado = e.id_empleado  WHERE e.dni = ?");
  //   $sql->execute(array($dni));

  //   $usuario = $sql->fetch();

  //   // retorna un objeto empleado con los campos de la tabla empleado
  //   return new Usuario($usuario['id_empleado'],$usuario['dni'], $usuario['correo'], $usuario['contrasenia']);

    
  // }

  public function crear($dni,$nombreUsuario,$correo,$contrasenia){

    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();



    $sql_id_empleado	= $conexionBD->prepare("SELECT e.id_empleado 
                                          FROM empleados.empleados e
	                                        LEFT JOIN empleados.usuario u
	                                        ON e.id_empleado = u.id_empleado
	                                        WHERE e.dni = ?");

    $sql_id_empleado->execute(array($dni));
    // Obtener el valor del id_empleado
    $id_empleado = $sql_id_empleado->fetchColumn();


    // llamamos al procedimiento almacenado
    $sql = $conexionBD->prepare("CALL CreacionUsuario(?,?,?,?)");

    // pasamos los parametros para evitar inyección
    $sql->execute(array($id_empleado,$nombreUsuario,$correo,$contrasenia));

    $conexionBD = null;
  }



  public function buscar($id){
    $conexionBD = new Conexion(); 
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("SELECT * FROM usuario WHERE id_usuario = ?");
    $sql->execute(array($id));

    $usuario = $sql->fetch();

    // retorna un objeto empleado con los campos de la tabla empleado
    return new Usuario($usuario['id_usuario'],$usuario['usuario'], $usuario['correo'], $usuario['contrasenia']);

    
  }

  public function editar($id,$dni, $nombre,$aPaterno,$aMaterno){
    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("UPDATE empleados SET dni = ?,nombre = ?, apellido_paterno = ?, apellido_materno = ?  WHERE id_empleado = ?");

    // pasamos un array como con los parametros
    $sql->execute(array($dni,$nombre, $aPaterno,$aMaterno, $id));
  }

  



// función para validar el ingreso al sistema que luego en el controlador validara la session
  public function buscarUsuario($usuario, $contrasenia){
    $conexionBD = new Conexion(); 
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("SELECT * FROM usuario WHERE usuario = ? AND contrasenia = ?");
    $sql->execute(array($usuario, $contrasenia));

    $usuarioData = $sql->fetch();

    if ($usuarioData) {
        // Si se encontró un usuario, crea una instancia de Usuario con los datos

        return new Usuario($usuarioData['id_usuario'], $usuarioData['usuario'], $usuarioData['correo'], $usuarioData['contrasenia']);
    } else {
        // Si no se encontró un usuario, puedes retornar null o algún valor indicativo de que no se encontró

        return null;
    }
    
  }

}




?>