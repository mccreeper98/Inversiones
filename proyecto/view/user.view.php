<!DOCTYPE html>
<html>
<head>
  <title><?php echo $_SESSION['user']; ?></title>
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
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

  <div class="slider fullscreen">
    <nav>
      <div class="nav-wrapper">
          <a href="index" class="brand-logo"><img src="img/logob.png" height="80px" style="padding-top: 20px; margin-left: 20px;"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#funciona">Ayuda</a></li>
            <li><a href="misproyectos">Mis Proyectos</a></li>
            <li><a href="perfil">Perfil</a></li>
            <li><a href="#"><span class="registro">Bienvenido <?php echo $_SESSION['user']; ?></span></a></li>
            <li><a href="cerrar.php"><span class="ingresar">Cerrar Sesión</span></a></li>
          </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#funciona">Ayuda</a></li>
          <li><a href="misproyectos">Mis Proyectos</a></li>
          <li><a href="perfil">Perfil</a></li>
          <li><a href="registra.php"><span ><?php echo $_SESSION['user']; ?></span></a></li>
          <li><a href="cerrar.php"><span >Cerrar Sesión</span></a></li>
        </ul>
      </div>
    </nav>

 <ul class="slides">
      <li>
        <!--video src="video/1.webm" autoplay="true" loop="true"></video-->
        <img src="img/1.jpg">
        <div class="centrado textSlide">
          <h4> <span class="acento">Invierte</span> en acciones inmobiliarias seguras con facilidad.</h4>
          <center><a href="proyectos" class="waves-effect waves-light btn-large negrobg"><i class="material-icons right">navigate_next
          </i><b>Comienza a invertir</b></a></center>
        </div>
      </li>
      <li> 
        <!--video src="video/2.webm" autoplay="true" loop="true"></video-->
        <img src="img/2.jpg">
        <div class="centrado textSlide animated fadeIn">
          <h4>No tienes que salir,<span class="acento"> invierte</span> desde tu propio hogar.</h4>
          <center><a href="proyectos" class="waves-effect waves-light btn-large negrobg"><i class="material-icons right">navigate_next
          </i><b>Comienza a invertir</b></a></center>

        </div>
      </li>
      <li>
        <!--video src="video/3.webm" autoplay="true" loop="true"></video-->
        <img src="img/3.jpg">
        <div class="centrado textSlide animated fadeIn">
          <h4>Las inversiones inmobiliarias de una manera <span class="acento">simplificada.</span></h4>
          <center><a href="proyectos" class="waves-effect waves-light btn-large negrobg"><i class="material-icons right">navigate_next
          </i><b>Comienza a invertir</b></a></center>

        </div>
      </li>
      <li>
        <!--video src="video/4.webm" autoplay="true" loop="true"></video-->
        <img src="img/4.jpg">
        <div class="centrado textSlide animated fadeIn">
          <h4><span class="acento">No pierdas tiempo</span> y disfruta mientras tu dinero genera rendimiento.</h4>
          <center><a href="proyectos" class="waves-effect waves-light btn-large negrobg"><i class="material-icons right">navigate_next
          </i><b>Comienza a invertir</b></a></center>

        </div>
      </li>
    </ul>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slider({
        indicators: true,
      });
    });      
  </script>

   <main class="" id="funciona">
    <div class="parallax-container">
      <div class="centrado center white-text">
        <h3>
          <span>
            ¿Tienes <b>Dinero</b> destinado <br> 
            a inversión? <br>
            <b>Somos tu opción</b>
            <br>
            <br>
            <a href="#" class="waves-effect waves-light btn-large negro wow bounceIn"><i class="material-icons right">navigate_next
            </i><b>Mira como funciona</b></a>
          </span>
        </h3>
      </div>
      <div class="parallax"><img src="img/bg.png"></div>
    </div>

    <div class="row center" id="invertir">
      <b><h4 style="padding-top: 50px;padding-bottom: 10px;">¿Por qué invertir con nosotros?</h4></b>
      <hr style="width: 80%">
      <div class="container">
        <div class="col s12 m6 l4 wow fadeInUp">
          <center><img src="img/coin.png"></center>
          <h5>Asequible</h5>     
          <p class="grey-text">Puedes invertir desde…</p><br>
        </div>
        <div class="col s12 m6 l4 wow fadeInUp">
          <center><img src="img/home.png"></center>
          <h5>Fácil</h5>       
          <p class="grey-text">Invierte desde tu casa.</p><br>
        </div>
        <div class="col s12 m6 l4 wow fadeInUp">
          <center><img src="img/research.png"></center>
          <h5>Adaptable</h5>
          <p class="grey-text">Revisa nuestros proyectos y elige el mejor para ti.</p>
        </div>
        <div class="col s12 m6 l4 wow fadeInUp">
          <center><img src="img/checked.png"></center>
          <h5>Probado</h5>
          <p class="grey-text">Los mejores proyectos seleccionados en nuestro portal.</p>
        </div>
        <div class="col s12 m6 l4 wow fadeInUp">
          <center><img src="img/houses.png"></center>
          <h5>Cartera múltiple</h5>
          <p class="grey-text">Con un riesgo disminuido y cartera variada.</p><br>
        </div> 
        <div class="col s12 m6 l4 wow fadeInUp">
          <center><img src="img/glass.png"></center>   
          <h5>Visoría constante</h5>   
          <p class="grey-text">Podrás ver el crecimiento de tu dinero y el desarrollo del proyecto desde el portal.</p>

        </div>
      </div>
    </div>
    <div class="parallax-container white-text">
      <div class="centrado center">
        <h4>¡No esperes más!</h4>
        <h5>Con tan solo  $50,000.00 puedes empezar a invertir en desarrollo inmobiliario.</h5>
        <br>
                    <a href="#" class="waves-effect waves-light btn-large negro wow bounceIn"><i class="material-icons right">navigate_next
            </i><b>Comienza a invertir</b></a>
      </div>

      <div class="parallax"><img src="img/5.jpg"></div>
    </div>

    <div id="proyectos">

     <center> 
      <div style="padding: 20px">
        <h4>Proyectos destacados</h4>
        <h5>Conoce algunos de nuestros proyectos más rentables.</h5>
      </div>
    </center>

    <?php require 'view/proyectosIndex.view.php'; ?>

  </div>

  <div class="parallax-container white-text">
    <div class="centrado center">
      <h4>Para ti desarrollador inmobiliario</h4>
      <h5>Nuestro proceso de fondeo inmobiliario está simplificado para que así puedas construir los proyectos que planees, garantizando que el proceso será estándar para permitirnos cerrar la ronda de inversión estructurada de manera eficaz, eficiente y segura para los inversionistas y desarrolladores inmobiliarios.</h5>
    </div>
    <div class="parallax"><img src="img/6.jpg"></div>
  </div>

</main>

<?php 
require 'footer.php';
?>
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

<!--Start parrallax-->
<script type="text/javascript">
 $(document).ready(function(){
  $('.parallax').parallax();
});
</script>
<!--End parrallax-->

<!--Start menu-->
<script type="text/javascript">
  $(".button-collapse").sideNav();

  $(document).ready(function(){
    $('.carousel').carousel();
  });

</script>
<!--End menu-->


<script>
    /* Smooth scrolling para anclas*/  
$(document).ready(function() {
  $('a[href^="#"]').click(function() {
    var destino = $(this.hash);
    if (destino.length == 0) {
      destino = $('a[name="' + this.hash.substr(1) + '"]');
    }
    if (destino.length == 0) {
      destino = $('html');
    }
    $('html, body').animate({ scrollTop: destino.offset().top }, 500);
    return false;
  });
});


</script>

</body>
</html>
