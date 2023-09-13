<?php


class Conexion{

  private $host = 'localhost';
  private $dbase = 'empleados';
  private $usuario = 'root';
  private $contrasenia = 'abc123*';

  // variable donde almacenare la conexión, tambien puede ser static pero las propiedades tambien deben serlo y usar self
  private  $instancia = NULL;



  public function crearInstancia(){

    // validamos si existe una conexión
    if(!isset($this->instancia)){
      // opciones de errores PDO
      $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

      $this->instancia = new PDO("mysql:host=".$this->host.";dbname=".$this->dbase, $this->usuario, $this->contrasenia, $opcionesPDO);

      echo ("Conexion Realizada");


    }

    return $this->instancia;
  }


}


?>