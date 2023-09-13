<?php

// obtencion por url GET
//echo $controlador;//nombre controlador paginas
//echo $accion;//metodo


require_once("controladores/controlador_".$controlador.".php");

$objControlador = "Controlador".ucfirst($controlador);


// crear instancia de controlador
$controlador = new $objControlador();

$controlador->$accion();




?>