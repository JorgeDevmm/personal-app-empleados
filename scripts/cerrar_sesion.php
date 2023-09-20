<?php


session_start();

// validamos si existe una sesión 
if(isset($_SESSION['acceso'])){
  session_destroy();
  // eliminamos variable global $_SESSION
  unset($_SESSION['acceso']);

  header("location:../?controlador=autenticacion&accion=ingresar");
}else{

  print('no hay session abierta');

  print "<a href='../?controlador=autenticacion&accion=ingresar'>Regresar</a>";
}

?>