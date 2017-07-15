<!DOCTYPE html>
<html>
<head>
  <title>Panel de control</title>
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
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

  <div class="navbar-fixed">
    <nav class="negrobg">
      <div class="nav-wrapper">
        <div class="container">
          <a href="index" class="brand-logo"><img src="img/logob.png" height="56px" style="padding-top: 10px"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="admin">Administrar</a></li>
            <li><a href="proyectos">Proyectos</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="3"><span><?php echo $_SESSION['user']; ?></span></a></li>
            <li><a href="cerrar.php"><span class="ingresar">Cerrar Sesión</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="admin">Administrar</a></li>
          <li><a href="#invertir">Proyectos</a></li>
          <li><a href="#proyectos">Perfil</a></li>
          <li><a href="registra.php"><span ><?php echo $_SESSION['user']; ?></span></a></li>
          <li><a href="cerrar.php"><span >Cerrar Sesión</span></a></li>
        </ul>
      </div>
    </nav>
  </div>


  <main class="animated fadeIn" style="margin-top: 60px">
  <div class="row">
      <div class="container">
       <caption class="col s12">Proyectos <i class="material-icons right green-text" id="agregar" title="Agregar proyecto">add</i></caption>
        <table class="highlight">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Desarrollador</th>
              <th>Descripción</th>
              <th>Estatus</th>
              <th>Acción</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>Lorem</td>
              <td>Eclair</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates sint neque quod quis, animi provident earum veritatis, modi eos a nobis itaque alias aliquam aperiam illum laboriosam, commodi? Eius, pariatur?</td>
              <td>Activo</td>
              <td>
                <div class="col s12" title="Editar"><i class="material-icons orange-text" id="edit">mode_edit</i></div>
                <div class="col s12" title="Borrar"><i class="material-icons red-text" id="delete">delete_forever</i></div> 
              </td>
            </tr>


            <tr>
              <td>Lorem</td>
              <td>Eclair</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates sint neque quod quis, animi provident earum veritatis, modi eos a nobis itaque alias aliquam aperiam illum laboriosam, commodi? Eius, pariatur?</td>
              <td>Activo</td>
              <td>
                <div class="col s12" title="Editar"><i class="material-icons orange-text" id="edit">mode_edit</i></div>
                <div class="col s12" title="Borrar"><i class="material-icons red-text" id="delete">delete_forever</i></div> 
              </td>
            </tr>


          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
<?php require 'view/footer.view.php'; ?>

<!--Start menu-->
<script type="text/javascript">
  $(".button-collapse").sideNav();

  $(document).ready(function(){
    $('.carousel').carousel();
  });

</script>
<!--End menu-->


</body>
</html>
