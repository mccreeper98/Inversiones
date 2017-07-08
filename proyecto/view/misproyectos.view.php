<!DOCTYPE html>
<html>
<head>
  <title>Mis proyectos</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/animate.css">
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
            <li><a href="#funciona">Ayuda</a></li>
            <li><a href="misproyectos">Mis Proyectos</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="#"><span class="registro"><?php echo $_SESSION['user']; ?></span></a></li>
            <li><a href="cerrar.php"><span class="ingresar">Cerrar Sesión</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#funciona">Ayuda</a></li>
          <li><a href="misproyectos">Mis Proyectos</a></li>
          <li><a href="perfil.php">Perfil</a></li>
          <li><a href="#"><span><?php echo $_SESSION['user']; ?></span></a></li>
          <li><a href="cerrar.php"><span>Cerrar Sesión</span></a></li>
        </ul>
      </div>
    </nav>   	
  </div>

<main class="animated fadeIn">

</main>
<?php require 'footer.php'; ?>
</body>
</html>
