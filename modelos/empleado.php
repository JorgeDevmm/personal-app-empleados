<?php

// require_once("conexion.php");


class Empleado{

  public static function crear($nombre, $correo){

    $conexionBD = new Conexion();
    $conexionBD = $conexionBD->crearInstancia();

    $sql = $conexionBD->prepare("INSERT INTO empleados(nombre,correo) VALUES (?,?)");

    // pasamos un array como con los parametros
    $sql->execute(array($nombre, $correo));


  }
}

?>