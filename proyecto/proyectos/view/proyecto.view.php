<!DOCTYPE html>
<html>
<head>
	<title>Proyecto</title>
	<meta charset="utf-8">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/master.css">
  <link rel="stylesheet" href="../css/animate.css">
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="../js/angular.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script type="text/javascript" src="../js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>


  <div class="navbar-fixed">
    <nav class="negrobg">
      <div class="nav-wrapper">
        <div class="container">
          <a href="index" class="brand-logo"><img src="../img/logob.png" height="56px" style="padding-top: 10px"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../#funciona">¿Cómo funciona?</a></li>
            <li><a href="../#invertir">¿Por qué nosotros?</a></li>
            <li><a href="../#proyectos">Proyectos</a></li>
            <li><a href="../contacto.html">Contacto</a></li>
            <li><a href="../registra.php"><span class="registro">Registrate</span></a></li>
            <li><a href="../login.php"><span class="ingresar">Ingresar</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="../#funciona">¿Cómo funciona?</a></li>
          <li><a href="../#invertir">¿Por qué nosotros?</a></li>
          <li><a href="../#proyectos">Proyectos</a></li>
          <li><a href="../contacto.html">Contacto</a></li>
          <li><a href="../registra.php"><span >Registrate</span></a></li>
          <li><a href="../login.php"><span >Ingresar</span></a></li>
        </ul>
      </div>
    </nav>
  </div>


  <main class="animated fadeIn">
   <div class="row">
     <div class="col s12 center" style="padding-bottom: 20px;"><h4>Nombre proyecto</h4></div>

     <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="../img/a.jpg"></a>
      <a class="carousel-item" href="#two!"><img src="../img/b.jpg"></a>
      <a class="carousel-item" href="#three!"><img src="../img/c.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="../img/d.jpg"></a>
      <a class="carousel-item" href="#five!"><img src="../img/e.jpg"></a>
    </div>

    <div class="col s12" style="font-size: 18px">
      <div class="container">
        <span class="left acento"><b>$ 200,000.00</b></span>
        <span class="right acento"><b>$ 1,000,000.00</b></span>
      </div>
    </div>

    <div class="progress col s12">
      <div class="centradoR" style="z-index: 9"><center><b>20% fondeado</b></center></div>
      <div class="determinate center negro animated slideInLeft" style="width: 20%"></div>
    </div>

    <div class="col s12 center" style="font-size: 18px">
      <b class="acento">Quedan 15 participaciones de 51</b>
    </div>

    <div class="col s12" id="numeros">


      <div class="col s12" style="padding-top: 50px;padding-bottom: 50px">

        <table class="col s12 m8 push-m2 striped centered">
          <thead>
            <caption class="white-text" style="background-color: #605f6a"><h5><b><span style="margin:25px">En números</span></b></h5></caption>
          </thead>

          <tbody>
            <tr>
              <td>Rendimiento esperado</td>
              <td>20%</td>
            </tr>
            <tr>
              <td>Monto Requerido</td>
              <td>$1,000,000.00</td>
            </tr>
            <tr>
              <td>Mínimo de inversión</td>
              <td>$50,000.00</td>
            </tr>
            <tr>
              <td>Tipo de financiamiento</td>
              <td>COINVERSIÓN</td>
            </tr>
            <tr>
              <td>Tipo de proyecto</td>
              <td>Remodelación</td>
            </tr>
            <tr>
              <td>Sector</td>
              <td>RESIDENCIAL</td>
            </tr>
            <tr>
              <td>Plazo</td>
              <td>24 meses</td>
            </tr>
          </tbody>
        </table>
      </div>



    </div>

    <center>
    <iframe width="620" height="315" src="https://www.youtube.com/embed/mleCn7QVxhs?controls=0&autoplay=1&rel=0&showinfo=0&mute=1" frameborder="0" id="video" allowfullscreen>
    </iframe>
    </center>

    <div class="col s12 white-text center" style="background-color: #605f6a " id="descripcion">
      <div class="container">

        <div style="margin-top: 60px; margin-bottom: 60px;">
          <h5 class="center acento">Datos extras</h5><br>
          <p style="font-size: 16px;">
            <b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b>
            </p>
          </div>
        </div>
      </div>

      <div class="col s12" id="desarrollador">
        <div class="container" style="margin-top: 60px; margin-bottom: 60px;">
          <h5 class="col s12 center"><b>Desarrollador</b></h5>
          <img src="../img/dv.jpg" class="col s12 m3 resposive-img">
          <p class="col s12 m9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="col s12" style="margin-top: 40px;">
              <a href="#" class="col s12 m6 push-m3 waves-effect waves-light btn-large negro"><b>Saber más del desarrollador</b></a>
            </div>
          </div>
        </div>

        <div class="col s12" id="ubicacion" style="margin-top: 60px; margin-bottom: 60px;padding: 0px">
          <div class="center"><h5><b>Ubicación</b></h5></div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15946.009656558204!2d-99.19571664718015!3d19.422890535375966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e14b5cd4b968d6f!2sAuditorio+Nacional!5e0!3m2!1ses-419!2smx!4v1499581417685" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>


        <div class="col s12" id="invertirAhora">

          <div class="container">


            <div class="col s12 center"><h5><b>Invierte ahora</b></h5></div>
            <hr>
            <form ng-app="">
              <input type="number" name="inversion" ng-model="inversion" placeholder="$ 000.000.00">
              <h5>Inversión + rendimiento: {{( inversion + (inversion/100)*20) | currency }}</h5>
              <button class='btn-large waves-effect waves-light negro col s12 wow bounceIn' type='submit' name='action'>
                <b>Invertir</b>
              </button>
            </form>
          </div>
        </div>

        <div class="col s12 center" style="background-color: #605f6a;padding-top: 60px;padding-bottom: 60px;">
          <div class="container">
            <a href="http://www.hgd1952.hr/pdf_datoteke/Test_document_PDF.pdf" class="white-text" download>
              <div class="col s12 "><img src="../img/pdf.png" class="resposive-img pdf" ></div>
              <div class="col s12 ">
                <h5>Descargar detalles del proyecto</h5>
              </div>
            </a>
          </div>
        </div>


      </div>
    </main>

    <?php require 'footer.php'; ?>
    <!--Start menu-->
    <script type="text/javascript">
      $(".button-collapse").sideNav();
    </script>
    <!--End menu-->

    <!--Start corrousel-->
    <script type="text/javascript">
      $(document).ready(function(){
        $('.carousel').carousel({
         dist: -50,
         indicators: true
       });
        function next() {
         $('.carousel').carousel('next')
       }

       setInterval(next, 5000);
     });

   </script>
   <!--End corrousel-->

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

</body>
</html>