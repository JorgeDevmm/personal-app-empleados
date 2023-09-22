<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body class="d-flex flex-column">
  <header >
    <!-- place navbar here -->
  <?php     
    
    //solo si es diferente al controlador de la pagina de ingreso 
    if ($controlador !== "autenticacion") {
    // valida session como el template se repetira en varias paginas
    session_start();

    if($_SESSION["acceso"] !== "1"){
            header("location:./?controlador=autenticacion&accion=ingresar");
            exit;

    }      ?>
    <nav class="d-flex justify-content-between navbar mb-5 py-3 px-3 px-md-5 navbar-expand navbar-dark bg-light bg-black fs-5">


        <div class="nav navbar-nav">
            <a class="enlaces nav-item nav-link active" href="?controlador=paginas&accion=inicio" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
            <a class="enlaces nav-item nav-link" href="?controlador=empleados&accion=inicio">Empleados</a>
            <a class="enlaces nav-item nav-link" href="?controlador=usuario&accion=inicio">Usuarios</a>
            <a class="enlaces nav-item nav-link" href="?controlador=perfiles&accion=inicio">Perfiles</a>
        </div>

        <div>

            <a href="scripts/cerrar_sesion.php" class="enlaces text-decoration-none text-white" >Cerrar sesión</a>
        </div>

    </nav>


  <?php } else {  ?>   
  <nav class="navbar mb-5 mx-auto py-5 navbar-expand navbar-dark text-white bg-black fs-4 d-flex justify-content-center">
  </nav>    
  <?php } ?>  
  </header>
  <main class="main">
    
      <div class="container">
        <div class='mensaje bg-danger text-center text-white' ></div>
        <div class="row">
          <div class="col-12">

            <?php require_once('./ruteador.php') ?>
          </div>

          
        </div>
      </div>
  </main>
  <footer class="footer bg-black mt-5 py-5">
    <p class="text-white text-center" >©Todos los Derechos Reservados - Jorge Luis Monzón Morales</p>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script src="../assets/js/app.js"></script>
</body>

</html>


