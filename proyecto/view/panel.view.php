<!DOCTYPE html>
<html>
<head>
  <title>Panel de control</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"> </script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

  <div class="navbar-fixed">
    <nav class="negrobg">
      <div class="nav-wrapper">
        <div class="container">
          <a href="index" class="brand-logo"><img src="img/logob.png" height="56px" style="padding-top: 10px"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="admin">Administrar</a></li>
            <li><a href="proyectos">Proyectos</a></li>
            <li><a href="estadisticas">Estadisticas</a></li>
            <li><a href="#"><span><?php echo $_SESSION['user']; ?></span></a></li>
            <li><a href="cerrar.php"><span class="ingresar">Cerrar Sesión</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="admin">Administrar</a></li>
          <li><a href="proyectos">Proyectos</a></li>
          <li><a href="estadisticas">Estadisticas</a></li>
          <li><a href="#"><span ><?php echo $_SESSION['user']; ?></span></a></li>
          <li><a href="cerrar.php"><span >Cerrar Sesión</span></a></li>
        </ul>
      </div>
    </nav>
  </div>

  <main class="animated fadeIn" style="margin-top: 100px">
  <div class="row">
      <div class="container">
       <caption class="col s12"><h4 class="thin">Proyectos</h4> 
 <a class="" href="#AgregarProyecto"><i class="material-icons right green-text" id="agregar" title="Agregar proyecto">add</i></a>
       </caption>
       <div id="loader" class="center"> <img src="img/loader.gif"></div>
    <div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
    <div class="outer_div"></div><!-- Datos ajax Final -->
      </div>
  </div>
</main>


  <?php require 'agregarP.view.php'; ?>
  <?php require 'agregarP.view.php'; ?>
  <?php require 'deleteP.view.php'; ?>


<?php require 'view/footer.view.php'; ?>

<!--Start menu-->
<script type="text/javascript">
  $(".button-collapse").sideNav();

  $(document).ready(function(){
    $('.carousel').carousel();
  });
</script>
<script src="js/admin.js"></script>
<script>
    $(document).ready(function(){
      load(1);
    });
  </script>
</body>
</html>
