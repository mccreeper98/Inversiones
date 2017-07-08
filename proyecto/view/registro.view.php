<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <script src="js/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/registro.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body bgcolor="#393646">
  <main class="animated fadeIn">
    <div class="row" style="height: 100vh; margin-bottom: 0px;">
      <div class="col s12 m7 l6 white-text" style="background-color: #393646; height: 100%">
        <form class="col s12 m10 push-m1" style="padding-top: 40px"method="post" onsubmit="return agregar()" id="registro" autocomplete="off">
          <center><h5>Registrate para continuar</h5></center><br>
          <div class="container">
            <input type="email" name="correo"  id="correo" value="" class="col s12" placeholder="Correo"  autocomplete="off" maxlength="30" required>
            <input type="text" name="nombre" id="nombre" value="" class="col s12" placeholder="Nombre(s)" autocomplete="off" maxlength="30" required>
            <input type="text" name="app" id="app" value="" class="col s6" placeholder="Apellido Paterno" autocomplete="off" maxlength="20" required>
            <input type="text" name="apm" id="apm" value="" class="col s6" placeholder="Apellido Materno" autocomplete="off" maxlength="20" required>
            <input type="password" name="psw" id="psw" value="" class="col s6" placeholder="Contraseña"  required>
            <input type="password" name="pswc" id="pswc" value="" class="col s6" placeholder="Confirme la Contraseña"  required>
            <div class="col s12" style="padding-bottom: 20px;">
              <input type="submit" id="action" class="btn-large col s12 waves-effect waves-light negro animated bounceIn"  name="action" value="Registrar">
            </div>
            <div class="divider col s12"></div>
            <div class="col s12 center" id="fbLogin" style="padding: 20px">
              <button class='btn-large waves-effect waves-light fb col s12' type='submit' >Iniciar con Facebook
                <i class='left'><img src="img/fb.png" height="28px" id="imgFbLogin"></i>
              </button>
            </div>
          </div>
        </form>
        <div class="col s12 center" style="padding: 20px;">
          <p>
            ¿Ya tienes cuenta? <a href="login" class="acento">Ingresa aquí </a>para que tengas acceso a todos los proyectos.
          </p>
        </div>
      </div>
      <div class="col  m5 l6 hide-on-small-only" id="registroImg">
        <img id="logoLogin" class="responsive-img" src="img/logob.png">
      </div>
    </div>
  </main>
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
