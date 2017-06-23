<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
<body bgcolor="#393646">
  <main class="animated fadeIn">
    <div class="row" style="height: 100vh; margin-bottom: 0px;">
      <div class="col  m5 l6 hide-on-small-only" id="loginImg">
        <img id="logoLogin" class="responsive-img" src="img/logob.png">
      </div>
      <div class="col s12 m7 l6 white-text" style="background-color: #393646; height: 100%">
        <form action="iniciar" method="post" class="col s12 m8 push-m2" style="padding-top: 80px">
          <center><h5>Inicia tu sesión</h5></center>
          <br>
          <div class="input-field col s12">
            <i class="material-icons prefix">mail</i>
            <input type="email" name="correo" class="validate" required="required">
            <label for="correo">Correo</label>
          </div>

          <div class="input-field col s12">
            <i class="material-icons prefix">https</i>
            <input type="password" name="psw" class="validate" required="required">
            <label for="psw">Contraseña</label>
          </div>

          <?php
          if (isset($_GET['p'])) {
            echo "<center class='error'>Contraseña Incorrecta</center>";
          }
          ?>
          <div class="col s12 center" style="padding: 20px">
            <button class='btn-large waves-effect waves-light negro col s12' type='submit' name='action'>Iniciar
            </button>
          </div>
          <div class="divider col s12"></div>
          <div class="col s12 center" id="fbLogin" style="padding: 20px">
            <button class='btn-large waves-effect waves-light fb col s12' type='submit' >Iniciar con Facebook
              <i class='left'><img src="img/fb.png" height="28px" id="imgFbLogin"></i>
            </button>
          </div>
        </form>
        <div class="col s12 center" style="padding: 20px;">
          <p><a href="#" class="acento">Olvidé mi contraseña</a></p>
          <p>
            ¿No tienes cuenta?
            <a href="registra.php" class="acento">Registrate aquí</a>
            para que tengas acceso a todos los proyectos.
          </p>
        </div>
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
