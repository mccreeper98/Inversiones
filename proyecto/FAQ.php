<!DOCTYPE html>
<html>
<head>
  <title>FAQ</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/animate.css">
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body id="FAQ">
    
  <div class="navbar-fixed">
    <nav class="negrobg">
      <div class="nav-wrapper">
        <div class="container">
         <a href="index" class="brand-logo"><img src="img/logob.png" height="56px" style="padding-top: 10px"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php">¿Cómo funciona?</a></li>
            <li><a href="index.php">¿Por qué nosotros?</a></li>
            <li><a href="proyectos">Proyectos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="registra.php"><span class="registro">Registrate</span></a></li>
            <li><a href="login.php"><span class="ingresar">Ingresar</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="index.php">¿Cómo funciona?</a></li>
          <li><a href="index.php">¿Por qué nosotros?</a></li>
          <li><a href="proyectos">Proyectos</a></li>
          <li><a href="contacto.html">Contacto</a></li>
          <li><a href="registra.php"><span >Registrate</span</a></li>
          <li><a href="login.php"><span >Ingresar</span></a></li>
        </ul>
      </div>
    </nav>
  </div>


  <main class="animated fadeIn">
  <div class="row">
    <div class="container">
        <br><br>
      <center><h5>Preguntas frecuentes</h5></center>

      <ul class="collapsible" data-collapsible="accordion">

            <li>
                <div class="collapsible-header">Pregunta 1</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>

            <li>
                <div class="collapsible-header">Pregunta 2</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>

     </ul>

    </div>
  </div>
  </main>

  <script>
        $(document).ready(function(){
    $('.collapsible').collapsible();
  });
      
  </script>

<?php require 'footer.php'; ?>

      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/59458844e9c6d324a4735eec/default';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
        })();
      </script>
      <!--End of Tawk.to Script-->

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
