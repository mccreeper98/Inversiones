<!DOCTYPE html>
<html>
<head>
  <title>Contacto</title>
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
<body id="contacto">
    
  <div class="navbar-fixed">
    <nav class="negrobg">
      <div class="nav-wrapper">
        <div>
         <a href="index" class="brand-logo"><img src="img/logob.png" class="logoTop" style="padding-top: 10px"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php">¿Cómo funciona?</a></li>
            <li><a href="index.php">¿Por qué nosotros?</a></li>
            <li><a href="proyectos">Proyectos</a></li>
            <li><a href="FAQ">FAQ</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="registra.php"><span class="registro">Registrate</span></a></li>
            <li><a href="login.php"><span class="ingresar">Ingresar</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="index.php">¿Cómo funciona?</a></li>
          <li><a href="index.php">¿Por qué nosotros?</a></li>
          <li><a href="proyectos">Proyectos</a></li>
          <li><a href="FAQ">FAQ</a></li>
          <li><a href="contacto.html">Contacto</a></li>
          <li><a href="registra.php"><span >Registrate</span</a></li>
          <li><a href="login.php"><span >Ingresar</span></a></li>
        </ul>
      </div>
    </nav>
  </div>


  <main class="animated fadeIn">
  <div class="row">
      <div class="col s12 m8 push-m2 z-depth-3" style="background-color: #fff; margin-top: 80px;padding-top: 30px;padding-bottom: 50px; margin-bottom: 50px;padding-left: 40px;padding-right: 40px">
      <div class="col s12 center"> <h5><b>Contacto</b></h5><h5>¿Te gustaría que te llamemos para más información o preferies programar una visita al desarrollo?</h5></div>
      <div class="col s12 m6 center" id="telefono">
        <img src="img/phone-receiver.png">
        <p>Llamada telefonica</p>
        <form name="llamada">
          <input type="text" name="" placeholder="Nombre" required="required">
          <input type="email" name="" placeholder="E mail" required="required">
          <input type="number" name="" placeholder="Telefono" required="required">          
          <textarea id="comentario" class="materialize-textarea" placeholder="Comentarios..." require></textarea>
          <input type="submit" class="btn" value="Enviar" name="">
        </form>
      </div> 
      <div class="col s12 m6 center" id="correo">
        <img src="img/calendar.png">
        <p>Programar una visita</p>

        <form name="cita">
          <input type="text" name="" placeholder="Nombre" required="required">          
          <input type="email" name="" placeholder="E mail" required="required">
          <input type="number" name="" placeholder="Telefono" required="required"> 
          <br>
          <label for="date">Fecha sugerida</label>                   
          <input type="text" class="datepicker" date="date">
          <input type="submit" class="btn" value="Enviar" name="">
        </form>

        <script>
          $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year,
            today: 'Today',
            clear: 'Clear',
            close: 'Ok',
            closeOnSelect: false // Close upon selecting a date,
          });
        </script>
      </div> 
      <hr class="col s12">
      <div class="col s12 center"><h5>También puedes llamarnos directamente al +52 12345678 o escribirnos a contacto@ejemplo.com</h5></div>


      </div>
  </div>
  </main>

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
