<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/animate.css">
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

  <div class="slider fullscreen">

   <nav>
    <div class="nav-wrapper">
      <div class="container">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#funciona">¿Cómo funciona?</a></li>
          <li><a href="#invertir">¿Por qué nosotros?</a></li>
          <li><a href="/proyectos">Proyectos</a></li>
          <li><a href="/contacto">Contacto</a></li>
          <li><a href="#">Admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <ul class="slides">
      <li>
        <video src="video/1.webm" autoplay="true" loop="true"></video>
        <!--img src="img/1.jpg"-->
         <div class="centrado textSlide animated zoomIn">
          <h4> <span class="acento">Invierte</span> en acciones inmobiliarias seguras con facilidad.</h4>
          <center><a href="#" class="waves-effect waves-light btn-large negrobg"><i class="material-icons right">navigate_next
          </i><b>Comienza a invertir</b></a></center>
         </div>
      </li>
      <li> 
        <video src="video/2.webm" autoplay="true" loop="true"></video>
        <!-- img src="img/2.jpg"-->
        <div class="centrado textSlide animated fadeIn">
          <h4>No tienes que salir,<span class="acento"> invierte</span> desde tu propio hogar.</h4>
          <center><a href="#" class="waves-effect waves-light btn-large negrobg"><i class="material-icons right">navigate_next
</i><b>Comienza a invertir</b></a></center>

        </div>
      </li>
      <li>
        <video src="video/3.webm" autoplay="true" loop="true"></video>
        <!--img src="img/3.jpg"-->
        <div class="centrado textSlide animated fadeIn">
          <h4>Las inversiones inmobiliarias de una manera <span class="acento">simplificada.</span></h4>
          <center><a href="#" class="waves-effect waves-light btn-large negrobg"><i class="material-icons right">navigate_next
</i><b>Comienza a invertir</b></a></center>

        </div>
      </li>
      <li>
        <video src="video/4.webm" autoplay="true" loop="true"></video>
        <!--img src="img/4.jpg"-->
        <div class="centrado textSlide animated fadeIn">
          <h4><span class="acento">No pierdas tiempo</span> y disfruta mientras tu dinero genera rendimiento.</h4>
          <center><a href="#" class="waves-effect waves-light btn-large negrobg"><i class="material-icons right">navigate_next
</i><b>Comienza a invertir</b></a></center>

        </div>
      </li>
    </ul>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slider({
        indicators: false,
      });
    });      
  </script>

<main class="col s12">
  <div class="row center" id="funciona" style="background-color: #dfdfde">
    <div class="container">
            <h4>¿Cómo generamos rendimiento?</h4>
            <h5 class="thin">¿Tienes Dinero destinado a inversión con alto rendimiento y seguridad? Somos tu opción.</h5>
            <center><img src="img/money.gif"></center>

    </div>
  </div>

  <div class="row center" id="invertir">
    <div class="container">
      <b><h4 style="padding-top: 50px;padding-bottom: 50px;">¿Por qué invertir con nosotros?</h4></b>
      <div class="col s12 m6 l4">
        <center><img src="img/coin.png"></center>
        <h5>Asequible</h5>     
        <p class="grey-text">Puedes invertir desde…</p>
      </div>
      <div class="col s12 m6 l4">
        <center><img src="img/home.png"></center>
        <h5>Fácil</h5>       
        <p class="grey-text">Invierte desde tu casa.</p>
      </div>
      <div class="col s12 m6 l4">
        <center><img src="img/research.png"></center>
        <h5>Adaptable</h5>
        <p class="grey-text">Revisa nuestros proyectos y elige el mejor para ti.</p>
      </div>
      <div class="col s12 m6 l4">
        <center><img src="img/checked.png"></center>
        <h5>Probado</h5>
        <p class="grey-text">Los mejores proyectos seleccionados en nuestro portal.</p>
      </div>
      <div class="col s12 m6 l4">
        <center><img src="img/houses.png"></center>
        <h5>Cartera múltiple</h5>
        <p class="grey-text">Con un riesgo disminuido y cartera variada.</p>
      </div>
      <div class="col s12 m6 l4">
        <center><img src="img/glass.png"></center>   
        <h5>Visoría constante</h5>   
        <p class="grey-text">Podrás ver el crecimiento de tu dinero y el desarrollo del proyecto desde el portal.</p>

      </div>
    </div>
  </div>
   <div class="parallax-container white-text">
      <center>      <h4>¡No esperes más!</h4>
     <h5>Con tan solo  $___ puedes empezar a invertir en desarrollo inmobiliario.</h5></center>
      <div class="parallax"><img src="img/5.jpg"></div>
    </div>
    <div>
      <h4>Proyectos destacados</h4>
      <h5>Conoce algunos de nuestros proyectos más rentables.</h5>
    </div>
      <div class="parallax-container white-text">
      <center>      <h4>Para ti desarrollador inmobiliario</h4>
     <h5>Nuestro proceso de fondeo inmobiliario está simplificado para que así puedas construir los proyectos que planees, garantizando que el proceso será estándar para permitirnos cerrar la ronda de inversión estructurada de manera eficaz, eficiente y segura para los inversionistas y desarrolladores inmobiliarios.</h5></center>
      <div class="parallax"><img src="img/6.jpg"></div>
    </div>

</main>
        <footer class="page-footer negrobg">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

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

</body>
</html>
