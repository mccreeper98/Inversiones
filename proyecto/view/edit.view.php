<!DOCTYPE html>
<html>
<head>
  <title>Panel de control-Editar</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"> </script>
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
            <li><a href="estadisticas">Estadisticas</a></li>
            <li><a href="#"><span><?php echo $_SESSION['user']; ?></span></a></li>
            <li><a href="cerrar.php"><span class="ingresar">Cerrar Sesión</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="admin">Administrar</a></li>
          <li><a href="proyectos">Proyectos</a></li>
          <li><a href="estadisticas">Estadisticas</a></li>
          <li><a href="#"><span ><?php echo $_SESSION['user']; ?></span></a></li>
          <li><a href="cerrar.php"><span >Cerrar Sesión</span></a></li>
        </ul>
      </div>
    </nav>
  </div>

  <main class="animated fadeIn">
  <div class="row">
      <div class="container">
  <?php  
    require 'conn.php';

    $consultaProyecto = "SELECT * FROM proyecto WHERE idProy =$id";
    if($proyect = $conn->query($consultaProyecto)){
    foreach ($proyect as $p) {
   ?>
 <form accept-charset="utf-8" method="POST" name="editar" id="editar" enctype="multipart/form-data" autocomplete="off">
          <h5>Editar Proyecto:</h5>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <div class="input-field col s12 m6">
            <input placeholder="Nombre" name="nombre" id="nombre" type="text" class="validate" maxlength="50" required="required" value="<?php echo $p['Nombre']; ?>">
          </div>
          <div class="input-field col s12 m6">
          <input type="number" name="porcentaje" placeholder="Porcentaje" min="0" max="100" required="required" maxlength="3" value="<?php echo $p['Por']; ?>">
          </div>
          <div class="input-field col s12 m6">
            <select id="estatus" name="estatus">
              <option value="<?php echo $p['Estatus']; ?>"><?php echo $p['Estatus']; ?></option>
              <option value="Activo">Activo</option>
              <option value="Inactivo">Inactivo</option>
              <option value="Finalizado">Finalizado</option>
            </select>
          <label>Estatus</label>
        </div>
          <div class="input-field col s12 m6">
            <input placeholder="Monto Requerido" pattern="[0-9,]{1,10}" name="requerido" id="requerido" type="text" class="validate" maxlength="10" required value="<?php echo $p['Req']; ?>">
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Inversion Minima" name="inversion" id="inversion" type="text" class="validate" pattern="[0-9,]{1,5}" maxlength="5" required value="<?php echo $p['Inv']; ?>">
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Tipo de Financiamieto" name="financiamieto" id="financiamieto" type="text" class="validate" maxlength="20" required value="<?php echo $p['Fina']; ?>">
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Tipo de Proyecto" name="tipo" id="tipo" type="text" class="validate" maxlength="20" required value="<?php echo $p['Tip']; ?>">
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Sector" name="sector" id="sector" type="text" class="validate" maxlength="20" required value="<?php echo $p['Sector']; ?>">
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Plazo" name="plazo" id="plazo" type="text" class="validate" maxlength="20" required value="<?php echo $p['Plazo']; ?>">
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Taza Anual" name="taza" type="text" class="validate" maxlength="5" required value="<?php echo $p['Taza']; ?>">
          </div>
          <div class="input-field col s12">
          <label>Descripción</label>
            <textarea id="descripcion" placeholder="Descripcion" name="descripcion"  class="materialize-textarea" required="required" value="<?php echo $p['Des']; ?>"><?php echo $p['Des']; ?></textarea>
          </div>
          <div class="input-field col s12 m6">
          <button class="btn waves-effect waves-light " type="submit" name="action" class="aceptar">Actualizar
            <i class="material-icons right">send</i>
          </button>
          <a href="admin.php" class="waves-effect waves-green btn-flat">Cancelar</a>
          </div>
        </form>  
        <?php }
          } ?>
      </div>
  </div>
</main>

<!--Start menu-->
<script type="text/javascript">
  $(".button-collapse").sideNav();

  $(document).ready(function(){
    $('.carousel').carousel();
  });

  $(document).ready(function() {
    $('select').material_select();
  });

</script>
<script src="js/editadmin.js"></script>
</body>
</html>
