<?php



class Empleado{

  private $id;
  private $dni;
  private $nombre;
  private $aPaterno;
  private $aMaterno;

  // private $contrasenia;


  public function __construct(int $id = 0,string $dni = '', string $nombre = '',string $aPaterno = '', string $aMaterno = '') {
    $this->id = $id;
    $this->dni = $dni;
    $this->nombre = $nombre;
    $this->aPaterno = $aPaterno;
    $this->aMaterno = $aMaterno;
  }

  public function getId(){
    return $this->id;
  }
  public function getDni(){
    return $this->dni;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function getAPaterno(){
    return $this->aPaterno;
  }
  public function getAMaterno(){
    return $this->aMaterno;
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
      $listaEmpleados[] = new Empleado($empleado['id_empleado'], $empleado['dni'], $empleado['nombre'], $empleado['apellido_paterno'], $empleado['apellido_materno']);


    }
    return $listaEmpleados;
  }



  public function crear($dni,$nombre,$paterno,$materno){

    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();
    // $clave = $this->getContrasenia();


    // llamamos al procedimiento almacenado
    // $sql = $conexionBD->prepare("CALL CreacionEmpleadoUsuario(?,?,?,?,?)");
    $sql = $conexionBD->prepare("INSERT INTO empleados (dni,nombre,apellido_paterno,apellido_materno) VALUES (?,?,?,?) ");

    // pasamos los parametros para evitar inyección
    $sql->execute(array($dni,$nombre,$paterno,$materno));

    $conexionBD = null;
  }

  public function borrar($id){
    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("DELETE FROM empleados WHERE id_empleado = ?");
    $sql->execute(array($id));

  }

  public function buscar($id){
    $conexionBD = new Conexion(); 
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("SELECT * FROM empleados WHERE id_empleado = ?");
    $sql->execute(array($id));

    $empleado = $sql->fetch();

    // retorna un objeto empleado con los campos de la tabla empleado
    return new Empleado($empleado['id_empleado'],$empleado['dni'], $empleado['nombre'], $empleado['apellido_paterno'] , $empleado['apellido_materno'] );

    
  }


  public function editar($id,$dni, $nombre,$aPaterno,$aMaterno){
    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("UPDATE empleados SET dni = ?,nombre = ?, apellido_paterno = ?, apellido_materno = ?  WHERE id_empleado = ?");

    // pasamos un array como con los parametros
    $sql->execute(array($dni,$nombre, $aPaterno,$aMaterno, $id));
  }


}

?>