<?php


class ControladorPaginas{

  public function inicio(){

    require_once './vistas/paginas/inicio.php';
    
  }
  public function error(){

    require_once './vistas/paginas/error.php';
  }
}


?>