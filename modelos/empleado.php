<?php



class Empleado{

  private $id;
  private $nombre;
  private $correo;


  public function __construct(int $id = 0,string $nombre = '',string $correo = '') {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->correo = $correo;
  }

  public function getId(){
    return $this->id;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function getCorreo(){
    return $this->correo;
  }


  // consulta información
  public function consultar(){
    $listaEmpleados=[];
    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->query("SELECT * FROM empleados");

    // Obtener todos los registros y lo recibo como uno con fetchAll()
    foreach($sql->fetchAll() as $empleado) {
      // guardo mi objeto de tipo empleado
      $listaEmpleados[] = new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);
    }
    return $listaEmpleados;
  }

  public function crear($nombre, $correo){

    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("INSERT INTO empleados(nombre,correo) VALUES (?,?)");

    // pasamos un array como con los parametros
    $sql->execute(array($nombre, $correo));
  }

  public function borrar($id){
    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("DELETE FROM empleados WHERE id = ?");
    $sql->execute(array($id));

  }

  public function buscar($id){
    $conexionBD = new Conexion(); 
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("SELECT * FROM empleados WHERE id = ?");
    $sql->execute(array($id));

    $empleado = $sql->fetch();

    return new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);

    // $sql = $conexionBD->prepare("UPDATE empleados SET nombre = ?,correo = ? WHERE id = ?");
    // $sql->execute(array($this->nombre,$this->correo,$id));
  }

  public function editar($id,$nombre,$correo){
    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("UPDATE empleados SET nombre = ?,correo = ? WHERE id = ?");

    // pasamos un array como con los parametros
    $sql->execute(array($nombre, $correo,$id));
  }
}

?>