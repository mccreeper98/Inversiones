<!DOCTYPE html>
    <noscript>
        <meta http-equiv="refresh" content="0;url=e/nojs.html">
    </noscript>
<html>
<head>
    <meta charset="utf-8">
	<title>Iniciar sesión</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<?php require 'style.php'; ?>
</head>
<body>

<main class="row">
	<div class="col m6 s12 z-depth-3 centrado-porcentual push-m6 push-s6 animated fadeIn">
		<form action="iniciar" method="post" class="container" style="padding-top: 30px">
			<center><h5>Inicia sesión para continuar</h5></center>
			<br>
			<input type="text" name="boleta" placeholder="Boleta" required="required" autofocus="autofocus">
			<input type="password" name="pass" placeholder="Contraseña" required="required">
      <?php
        if (isset($_GET['p'])) {
          echo "<center class='error'>Boleta o contraseña erronea</center>";
        }
      ?>
			<div class="col s12" style="padding: 20px">
        <button class='btn waves-effect waves-light col s12' type='submit' name='action'>Iniciar
          <i class='material-icons right'>send</i>
        </button>
			</div>
		</form>
    <div class="col s12 " style="padding: 20px;">
      <center><a href="registro" class="grey-text">¿No tienes cuenta? Registrate aqui</a></center>
    </div>
	</div>
</main>


    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
