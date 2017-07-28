<!DOCTYPE html>
<html>
<head>
  <title>Mis proyectos</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/normalize.css">
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
    <div class="row" style="padding-top: 90px; padding-bottom: 50px">


      <div class="col s12 m3">
        <div class="card">
          <div class="card-image">
            <img src="img/example4.jpg">
            <span class="card-title"></span>
            <div class="progress col s12" style="margin: 0px; border-radius: 0px">
              <div class="centradoR" style="z-index: 9"><center><b>20% fondeado</b></center></div>
              <div class="determinate center negro" style="width: 20%"></div>
            </div>
          </div>
          <div class="card-content">
            <p style="margin-top: 30px">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
              <div class="grey-text">
                <ul>
                  <li><span>Tasa anual simple</span><span> 12%</span></li>
                  <li><span>Plazo</span><span> 12 meses</span></li>
                  <li><span>Mínimo de inversión</span><span> $ 15,000</span></li>
                  <li><span>Monto requerido</span><span> $ 1,500,000</span></li>
                </ul>
              </div>
            </div>
            <div class="card-action">
              <a class="btn waves-effect waves-light negro col s12 animated" href="proyectos">ADMINISTRAR</a><br><br>
            </div>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="img/img.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">

            </div>
            <div class="card-action">
              <a class="btn waves-effect waves-light negro col s12 animated" href="proyectos">INVERTIR</a><br><br>
            </div>
          </div>
        </div>


        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="img/img.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">

            </div>
            <div class="card-action">
              <a class="btn waves-effect waves-light negro col s12 animated" href="proyectos">INVERTIR</a><br><br>
            </div>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="img/img.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
            </div>
            <div class="card-action">
              <a class="btn waves-effect waves-light negro col s12 animated" href="proyectos">INVERTIR</a><br><br>
            </div>
          </div>
        </div>
     <!--   
Inversión pendiente$600,000.00
Inversión en construcción$0.00
Plusvalía al día$0.00
Rendimiento al día0%
Dinero al inversionista$0.00
-->


</div>
</main>

<?php require 'footer.php'; ?>
<!--Start menu-->
<script type="text/javascript">
  $(".button-collapse").sideNav();

  $(document).ready(function(){
    $('.carousel').carousel();
  });

</script>
<!--End menu-->

</body>
</html>
