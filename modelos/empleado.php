<?php

// require_once("conexion.php");


class Empleado{

  private $id;
  private $nombre;
  private $correo;


  public function __construct(int $id = 0,string $nombre = '',string $correo = '') {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->correo = $correo;
  }

  public static function consultar(){
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

  public static function crear($nombre, $correo){

    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("INSERT INTO empleados(nombre,correo) VALUES (?,?)");

    // pasamos un array como con los parametros
    $sql->execute(array($nombre, $correo));


  }
}

?>