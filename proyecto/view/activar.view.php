<?php 
  if (!isset($_GET['v'])) {
    header ("Location: index.php");
  }else{
    $v = $_GET['v'];
    $c = $_GET['c'];
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contacto</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/sweetalert.css">
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"> </script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body id="contacto">
    
  <div class="navbar-fixed">
    <nav class="negrobg">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#" class="brand-logo"><img src="img/logob.png" height="60px" style="padding-top: 5px"></a>
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


  <main>
  <div class="row">
      <div class="col s12 m8 push-m2 z-depth-1" style="background-color: #fff; border-radius: 10px; margin-top: 80px;padding-top: 30px;padding-bottom: 50px; margin-bottom: 50px;padding-left: 40px;padding-right: 40px">
      <div class="col s12 center"> <h5><b>Activar Cuenta</b></h5><h5>
        Activa tu cuenta con el siguiente boton.
      </h5></div>
      <div class="col s12 m6 center" id="telefono">
        <p></p>
      </div> 
      <div class="col s12 m6 center" id="correo">
        <p></p>
      </div> 
      <hr class="col s12">
      <div class="col s12 center"><h5><a class=" waves-effect waves-light btn-large" id="activar" name="activar">Activar Cuenta</a></div>

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

      $("#activar").on("click", function(e){
      e.preventDefault();
      var v = "<?php echo $v; ?>" ;
      var c = "<?php echo $c ?>";

      $.ajax({
        type: 'POST',
        url: 'ajax/activar.php',
        data:{
        'variable':v,
        'correo':c
        },
        success: function(echo){
          if (echo === 'done') {
            swal({    
                  title: "Activacion Exitosa!",
                  text: "Se ha activado la cuenta inicie sesión para continuar.",   
                  type: "success",            
                  closeOnConfirm: false }, 
                  function(){   
                    location.href ="login.php"; 
                  });
          }else{
            if (echo === 'existe') {
              sweetAlert("Error en el registro", "El correo "+ c + "no esta registrado", "error");
            }else{
              sweetAlert("Error en la activacion ",echo, "error");
            }
          }
          
        }
      });
    });

    </script>


  </body>
  </html>
