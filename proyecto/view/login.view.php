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
<body>
   <nav>
    <div class="nav-wrapper container">
        <a href="index" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#funciona">¿Cómo funciona?</a></li>
          <li><a href="#invertir">¿Por qué nosotros?</a></li>
          <li><a href="/proyectos">Proyectos</a></li>
          <li><a href="/contacto">Contacto</a></li>
          <li><a href="#">Ingresar</a></li>
        </ul>
    </div>
    </nav>
    <br>
    <main class="row">
	<div class="col m12 s12 z-depth-3 centrado-porcentual">
		<form action="iniciar" method="post" class="container" style="padding-top: 30px">
			<center><h5>Inicia sesión para continuar</h5></center>
			<br>
			<input type="text" name="correo" placeholder="Correo" required="required" autofocus="autofocus">
			<input type="password" name="psw" placeholder="Contraseña" required="required">
      <?php
        if (isset($_GET['p'])) {
          echo "<center class='error'>Contraseña Incorrecta</center>";
        }
      ?>
			<div class="col s12" style="padding: 20px">
        <button class='btn waves-effect waves-light col s12' type='submit' name='action'>Iniciar
          <i class='material-icons right'>send</i>
        </button>
			</div>
			<h4>Iniciar con</h4>
        	<div>(boton de facebook)</div>
		</form>
    <div class="col s12 " style="padding: 20px;">
      
        	<p>Olvidé mi contraseña</p>
        	<p>
        		¿No tienes cuenta? 
        		<a href="registra.php">Registrate aquí</a>
        		para que tengas acceso a todos los proyectos.
        	</p>
    </div>
	</div>
	</main>
</body>
</html>
