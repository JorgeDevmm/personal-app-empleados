<?php

require_once("./modelos/perfiles.php");
require_once("./conexion.php");

$conexionBD = new Conexion();
$conexionBD->crearInstancia();



class ControladorPerfiles{

  
  public function inicio(){

      // accede a los datos del modelo
      $perfil = new Perfiles();
      // invoco al metodo consultar de la instancia
      $perfil =$perfil->consultar();


        require_once './vistas/perfiles/inicio.php';

  }


  public function crear(){
    
      // envio datos
      if($_POST){
      $nombre = $_POST['nombre'];

      $perfil = new Perfiles();
      $perfil->crear($nombre);
      // redireccionar
      header("location:./?controlador=perfiles&accion=inicio");

      }
        require_once './vistas/perfiles/crear.php';

  }


   public function editar(){


      if($_POST){
      $id = $_POST['id'];      
      $nombre = $_POST['nombre'];




      $perfil = new Perfiles();
      $perfilBuscado = $perfil->editar($id,$nombre);

      // redireccionar
      header("location:./?controlador=perfiles&accion=inicio"); 
      }
    
      $id = $_GET['id'];      
      $perfil = new Perfiles();
      $perfilBuscado = $perfil->buscar($id);

        require_once './vistas/perfiles/editar.php';

  }

    public function borrar(){
      print_r($_GET);
      // envio datos
      if($_GET){
            $id = $_GET['id'];

            try{
            // accede a los datos del modelo
            $perfil = new Perfiles();
            // invoco al metodo consultar de la instancia
            $perfil->borrar($id);
            // redireccionar
            header("location:./?controlador=perfiles&accion=inicio");

            }catch(PDOException $e){

            $e->getMessage();
            }


            }

      }

  }









?>