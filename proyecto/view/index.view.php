<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
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
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

  <div id="nav" class="">
    <nav>
      <div class="nav-wrapper">
          <a href="index" class="brand-logo"><img src="img/logob.png" id="logo" class="logo"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#funciona">¿Cómo funciona?</a></li>
            <li><a href="#invertir">¿Por qué nosotros?</a></li>
            <li><a href="proyectos">Proyectos</a></li>
            <li><a href="FAQ">FAQ</a></li>
            <li><a href="#garantia">Garantias</a></li>            
            <li><a href="contacto">Contacto</a></li>
            <li><a href="registra"><span class="registro">Registrate</span></a></li>
            <li><a href="login"><span class="ingresar">Ingresar</span></a></li>
          </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#funciona">¿Cómo funciona?</a></li>
          <li><a href="#invertir">¿Por qué nosotros?</a></li>
          <li><a href="proyectos">Proyectos</a></li>
          <li><a href="#garantia">Garantias</a></li>                      
          <li><a href="FAQ">FAQ</a></li>
          <li><a href="contacto">Contacto</a></li>
          <li><a href="registra"><span >Registrate</span></a></li>
          <li><a href="login"><span >Ingresar</span></a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="slider">
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

  <main class="">

    <div id="funciona">
      <div class="row center">
        <div class="container">
        <h4>¿Cómo valuamos los proyectos?</h4>
        <h5>Valuamos cada proyecto en 3 grandes indicadores</h5>
        <br><br><br>

      <div class="col s12 m4 indicador">
        <div class="card hoverable" style="background: #f5f5f5;">
          <div class="card-content black-text" style="min-height: 330px">
            <center><img src="img/gold-medal.png" alt="" class="wow flipInX"></center>
            <span class="card-title">Valuación del proyecto</span>
            <p>Análisis de la zona, permisos, escrituras, viabilidad financiera, 
            tamaño del proyecto, estudio de mercado y todo lo relacionado al desarrollo a participar.</p>
          </div>
        </div>
      </div>

      <div class="col s12 m4 indicador">
        <div class="card hoverable" style="background: #f5f5f5;">
          <div class="card-content black-text" style="min-height: 330px">
          <center><img src="img/silver-medal.png" alt="" class="wow flipInX"></center>
            <span class="card-title">Valuación del desarrollador</span>
            <p>
            Historial, obras realizadas, referencias, experiencia, situación financiera y 
            todo lo relacionado con el desarrollador.
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m4  indicador">
        <div class="card hoverable" style="background: #f5f5f5;">
          <div class="card-content black-text" style="min-height: 330px">
          <center><img src="img/bronze-medal.png" alt="" class="wow flipInX"></center>
            <span class="card-title">Negociación y estructura legal</span>
            <p>Amarramos la operación con contratos y cláusulas que protejan 
            la participación en todo momento.</p>
          </div>
        </div>
      </div>

      <h4 class="col s12" style="padding-top: 50px; padding-bottom: 50px;">¿Cómo participar en los proyectos?</h4>


      <div class="col s12 m4 indicador wow slideInUp">
        <div class="card hoverable" style="border: solid 1px #6cfe6b;">
        <div class="shape"><div class="shape-text">1</div></div>          
          <div class="card-content black-text" style="min-height: 250px">
            <span class="card-title">1.Investiga a detalle</span>
            <p>Tenemos varias opciones para que seas parte de Zonainver, regístrate y analiza la información de los proyectos.</p>
          </div>
        </div>
      </div>

      <div class="col s12 m4 indicador wow slideInUp">
        <div class="card hoverable" style="border: solid 1px #6cfe6b;">
        <div class="shape "><div class="shape-text">2</div></div>          
          <div class="card-content black-text" style="min-height: 250px">
            <span class="card-title">2.Selecciona tu forma de pago</span>
            <p>
            Diferentes formas de pago y sumas que se adapten a tu economía.            
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m4  indicador wow slideInUp">
        <div class="card hoverable" style="border: solid 1px #6cfe6b;">
        <div class="shape"><div class="shape-text">3</div></div>          
          <div class="card-content black-text" style="min-height: 250px">
            <span class="card-title">3.Sistema de apartado </span>
            <p>Selecciona el proyecto de tu interés y aparta  el monto que desees participar.
            </p>
          </div>
        </div>
      </div>


      <div class="col s12 m3  indicador wow slideInUp">
        <div class="card hoverable" style="border: solid 1px #6cfe6b;">
        <div class="shape"><div class="shape-text">4</div></div>          
          <div class="card-content black-text" style="min-height: 330px">
            <span class="card-title">4.Documento de participación </span>
            <p>Después de tener apartado tu lugar y si eres de nuevo ingreso deberás llenar la solicitud de participación que te aparecerá.
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m3  indicador wow slideInUp">
        <div class="card hoverable" style="border: solid 1px #6cfe6b;">
        <div class="shape"><div class="shape-text">5</div></div>          
          <div class="card-content black-text" style="min-height: 330px">
            <span class="card-title">5.Obtén los contratos</span>
            <p>Recibe los contratos que te den amparo legal, envío a toda la república.            
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m3  indicador wow slideInUp">
        <div class="card hoverable" style="border: solid 1px #6cfe6b;">
        <div class="shape"><div class="shape-text">6</div></div>          
          <div class="card-content black-text" style="min-height: 330px">
            <span class="card-title">6.Comienza a invertir</span>
            <p>Ya con los contratos firmados realiza tu inversión por transferencia bancaria.            
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m3  indicador wow slideInUp">
        <div class="card hoverable" style="border: solid 1px #393646;">
        <div class="shapeG"><div class="shape-text">7</div></div>
          <div class="card-content black-text" style="min-height: 330px">
            <span class="card-title">7.Obtén tus ganancias </span>
            <p>Al concluirse el desarrollo del proyecto recibirás tu dinero más utilidad 
            </p>
          </div>
        </div>
      </div>



        </div>
      </div>
    </div>

    <div class="row center" id="invertir">
      <b><h4 style="padding-top: 50px;padding-bottom: 10px;">¿Por qué invertir con nosotros?</h4></b>
      <hr style="width: 80%; ">
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

  <div id="garantia" class="center row">
    <br><br><br><br>
    <div class="container">
    <h4>Garantía  de participación </h4>
    <h5>Tu participación es nuestro pilar y por eso  te mostramos los tipos de garantía  para asegurar el proceso.</h5>
    <br><br><br>

    <div class="col s12 m4 indicador">
        <div class="card hoverable" style="background: #f5f5f5;">
          <div class="card-content black-text" style="min-height: 350px">
            <center><img src="img/get-money.png" alt="" class="wow flipInX"></center>
            <span class="card-title">Devolución de capital</span>
            <p>Si necesitas el retorno de tu dinero, lo tienes.
            Te devolvemos  íntegramente tu dinero invertido  en garantía y sin sanción pero sin rendimiento.
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m4 indicador">
        <div class="card hoverable" style="background: #f5f5f5;">
          <div class="card-content black-text" style="min-height: 350px">
          <center><img src="img/auction.png" alt="" class="wow flipInX"></center>
            <span class="card-title">Respaldo legal </span>
            <p>
            Contratos, fideicomisos y escrituras son la base para la seguridad de cada desarrollo.
            Puedes corroborarlo con nosotros en el momento que desees ya sea llamando a nuestro corporativo o agendando una cita.            
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m4  indicador">
        <div class="card hoverable" style="background: #f5f5f5;">
          <div class="card-content black-text" style="min-height: 350px">
          <center><img src="img/calendar2.png" alt="" class="wow flipInX"></center>
            <span class="card-title">Rendimiento y tiempo</span>
            <p>El mercado es un factor que no se puede controlar y esto puede llegar a afectar los plazos. Para obtener rendimiento de su capital es necesario que el proyecto concluya.
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m4 indicador">
        <div class="card hoverable" style="background: #f5f5f5;">
          <div class="card-content black-text" style="min-height: 350px">
            <center><img src="img/archive.png" alt="" class="wow flipInX"></center>
            <span class="card-title">Valoración del Desarrollo</span>
            <p>Trayectoria, situación en las finanzas, entorno del desarrollador y algunas obras que realizó.            
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m4 indicador">
        <div class="card hoverable" style="background: #f5f5f5;">
          <div class="card-content black-text" style="min-height: 350px">
          <center><img src="img/checklist.png" alt="" class="wow flipInX"></center>
            <span class="card-title">Valoración del desarrollo</span>
            <p>
            Respaldo legal, escritura, rentabilidad financiera, envergadura, estudio de mercado y análisis geográfico.
            
            </p>
          </div>
        </div>
      </div>

      <div class="col s12 m4  indicador">
        <div class="card hoverable" style="background: #f5f5f5;">
          <div class="card-content black-text" style="min-height: 350px">
          <center><img src="img/deal.png" alt="" class="wow flipInX"></center>
            <span class="card-title">Operaciones respaldadas</span>
            <p>La operación tiene todo bien estructurado con contratos y cláusulas que aseguran tu participación.

            </p>
          </div>
        </div>
      </div>

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
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/home.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){
      var alto = $("body").height();
      $('.slider').slider({
        indicators: true,
        'height': alto
      });
    });      
  </script>
  <script>
    new WOW().init();
  </script>

<script>
navEnElTop();
</script>


</body>
</html>
