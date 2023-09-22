<?php



class Perfiles{

  private $id;
  private $nombre;


  public function __construct(int $id = 0,string $nombre = '') {
    $this->id = $id;
    $this->nombre = $nombre;

  }

  public function getId(){
    return $this->id;
  }

  public function getNombre(){
    return $this->nombre;
  }


  // consulta información
  public function consultar(){
    $listaPerfiles=[];
    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->query("SELECT * FROM perfiles");

    // Obtener todos los registros y lo recibo como uno con fetchAll()
    foreach($sql->fetchAll() as $perfil) {
      // guardo mi objeto de tipo empleado
      $listaPerfiles[] = new Perfiles($perfil['id_perfil'], $perfil['nombre_perfil']);
    }
    return $listaPerfiles;
  }


  public function crear($nombre){

    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    // llamamos al procedimiento almacenado
    $sql = $conexionBD->prepare("INSERT INTO perfiles (nombre_perfil) VALUES (?)");

    // pasamos los parametros para evitar inyección
    $sql->execute(array($nombre));

    $conexionBD = null;
  }

  public function borrar($id){
    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("DELETE FROM perfiles WHERE id_perfil = ?");
    $sql->execute(array($id));

  }

  public function buscar($id){
    $conexionBD = new Conexion(); 
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("SELECT * FROM perfiles WHERE id_perfil = ?");
    $sql->execute(array($id));

    $perfil = $sql->fetch();

    // retorna un objeto empleado con los campos de la tabla empleado
    return new Perfiles($perfil['id_perfil'],$perfil['nombre_perfil']);

    
  }


  public function editar($id,$nombre){
    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("UPDATE perfiles SET nombre_perfil = ? WHERE id_perfil = ?");

    // pasamos un array como con los parametros
    $sql->execute(array($nombre,$id));
  }


}

?>