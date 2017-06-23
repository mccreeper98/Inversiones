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
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"> </script>
  <script type="text/javascript" src="js/registro.js"></script>
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
          <li><a href="login.php">Ingresar</a></li>
        </ul>
      </div>
    </div>
  </nav>

<main class="col s12">

   <form class="col s12 m8 l4 push-m2 push-l4 z-depth-3 animated slideInUp" method="post" onsubmit="return agregar()" id="registro" autocomplete="off">
    <div class="container">
      <input type="email" name="correo"  id="correo" value="" class="col s12" placeholder="Correo"  autocomplete="off" maxlength="30" required>
      <input type="text" name="nombre" id="nombre" value="" class="col s12" placeholder="Nombre(s)" autocomplete="off" maxlength="30" required>
      <input type="text" name="app" id="app" value="" class="col s12" placeholder="Apellido Paterno" autocomplete="off" maxlength="20" required>
      <input type="text" name="apm" id="apm" value="" class="col s12" placeholder="Apellido Materno" autocomplete="off" maxlength="20" required>
      <input type="password" name="psw" id="psw" value="" class="col s12" placeholder="Contraseña"  required>
      <input type="password" name="pswc" id="pswc" value="" class="col s12" placeholder="Confirme la Contraseña"  required>
      <div class="col s12" style="padding-bottom: 50px;">
        <input type="submit" id="action" class="btn col s12 waves-effect waves-light"  name="action" value="Registrar">
      </div>
    </div>
  </form>

</main>
        <footer class="page-footer negrobg">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div              <div class="col l4 offset-l2 s12">
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

</body>
</html>
