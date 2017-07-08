<!DOCTYPE html>
<html>
<head>
  <title>Actualizar perfil</title>
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

  <div class="navbar-fixed">
    <nav class="negrobg">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#" class="brand-logo"><img src="img/logob.png" height="56px" style="padding-top: 10px"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#funciona">Ayuda</a></li>
            <li><a href="#invertir">Mis Proyectos</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="#"><span class="registro"><?php echo $_SESSION['user']; ?></span></a></li>
            <li><a href="cerrar.php"><span class="ingresar">Cerrar Sesión</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#funciona">Ayuda</a></li>
          <li><a href="#invertir">Mis Proyectos</a></li>
          <li><a href="perfil.php">Perfil</a></li>
          <li><a href="#"><span><?php echo $_SESSION['user']; ?></span></a></li>
          <li><a href="cerrar.php"><span>Cerrar Sesión</span></a></li>
        </ul>
      </div>
    </nav>    
  </div>

<main class="animated fadeIn">

   <div class="container" style="padding-top: 80px;padding-bottom: 40px;">
     <div class="row">
       <form class="col s12 z-depth-3" method="post" onsubmit="return agregar()" id="registro" autocomplete="off">
    <div class="container">
      <h3 class="grey-text" style="padding-top: 50px">Completa tu perfil:</h3>
      <hr style="padding-bottom: 40px">
      <input type="number" name="telefono"  id="telefono" value="" class="col s12 m6" placeholder="Telefono"  autocomplete="off" maxlength="15" required="required">
      <input type="text" name="clave" id="clave" value="" class="col s12 m6" placeholder="Clave Interbancaria" autocomplete="off" maxlength="30" required="required">
      <input type="text" name="rfc" id="rfc" value="" class="col s12 m6" placeholder="RFC" autocomplete="off" maxlength="20" required="required">
      <h6 class="col s12 grey-text">Dirección</h6>
      <input type="text" name="calle" id="calle" value="" class="col s12 m6" placeholder="Calle" autocomplete="off" maxlength="30" required="required">
      <input type="text" name="ext" id="ext" value="" class="col s12 m6" placeholder="N° Ext" autocomplete="off" maxlength="4" required="required">
      <input type="text" name="int" id="int" value="" class="col s12 m6" placeholder="N° Int" autocomplete="off" maxlength="4" required="required">
      <input type="text" name="colonia" id="colonia" value="" class="col s12 m6" placeholder="Colonia" autocomplete="off" maxlength="20" required="required">
      <input type="number" name="cp" id="cp" value="" class="col s12 m6" placeholder="C.P." autocomplete="off" maxlength="5" required="required">
      <input type="text" name="pais" id="pais" value="" class="col s12 m6" placeholder="País" autocomplete="off" maxlength="20" required="required">

      <div class="file-field input-field col s12">
            <div class="btn negrobg">
              <span>INE Vista Frontal</span>
              <input type="file" name="inef" required="required">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="file-field input-field col s12">
            <div class="btn negrobg">
              <span>INE Vista Trasera</span>
              <input type="file" name="ineb" >
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="file-field input-field col s12">
            <div class="btn negrobg">
              <span>Comprobane de Domicilio</span>
              <input type="file" name="comp" required="required">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="file-field input-field col s12">
            <div class="btn negrobg">
              <span>Estado de Cuenta</span>
              <input type="file" name="est" required="required">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
      <div class="col s12 " style="padding-bottom: 60px; padding-top: 30px">
        <a class=" col s12 m6 push-m3 waves-effect waves-light btn-large">Actualizar perfil</a>
      </div>
    </div>
  </form>


     </div>
   </div>
</main>
<?php require 'footer.php'; ?>
</body>
</html>
