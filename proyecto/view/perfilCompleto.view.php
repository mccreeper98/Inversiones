<!DOCTYPE html>
<html>
<head>
  <title>Actualizar perfil</title>
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
            <li><a href="#funciona">Ayuda</a></li>
            <li><a href="misproyectos">Mis Proyectos</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="#"><span class="registro"><?php echo $_SESSION['user']; ?></span></a></li>
            <li><a href="cerrar.php"><span class="ingresar">Cerrar Sesión</span></a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#funciona">Ayuda</a></li>
          <li><a href="misproyectos">Mis Proyectos</a></li>
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
       <form class="col s12 z-depth-3" accept-charset="utf-8" method="POST" id="perfil" enctype="multipart/form-data" autocomplete="off">
    <div class="container">
      <h5 class="grey-text center" style="padding-top: 50px">Por favor confirma que todo esté completo y correcto</h5>
      <hr style="padding-bottom: 40px">
      <input type="text" name="usuario" id="usuario" value="" class="col s12 m9 perfil" placeholder="Usuario" autocomplete="off" maxlength="20" required="required">
      <input type="tel" name="telefono" pattern="[0-9]{10}" id="telefono" value="" class="col s12 m4 perfil" placeholder="Telefono"  autocomplete="off" maxlength="10" required="required">
      <input type="text" name="clave" pattern="[0-9]{18}" id="clave" value="" class="col s12 m4 perfil" placeholder="Clave Interbancaria" autocomplete="off" maxlength="18" required="required">
      <input type="text" name="rfc" id="rfc" value="" class="col s12 m4 perfil" placeholder="RFC" autocomplete="off" maxlength="15" required="required">
      <h6 class="col s12 grey-text">Dirección</h6>
      <input type="text" name="calle" id="calle" value="" class="col s12 m6 perfil" placeholder="Calle" autocomplete="off" maxlength="30" required="required">
      <input type="text" name="ext" pattern="[0-9]{1,4}" id="ext" value="" class="col s12 m3 perfil" placeholder="N° Ext" autocomplete="off" maxlength="4" required="required">
      <input type="text" name="int" pattern="[0-9]{1,4}" id="int" value="" class="col s12 m3 perfil" placeholder="N° Int" autocomplete="off" maxlength="4" required="required">
      <input type="text" name="colonia" id="colonia" value="" class="col s12 m4 perfil" placeholder="Colonia" autocomplete="off" maxlength="20" required="required">
      <input type="text" name="cp" pattern="[0-9]{5}" id="cp" value="" class="col s12 m4 perfil" placeholder="C.P." autocomplete="off" maxlength="5" required="required">
      <input type="text" name="pais" id="pais" value="" class="col s12 m4 perfil" placeholder="País" autocomplete="off" maxlength="20" required="required">
      <div class="col s12 center" style="padding-top: 15px">
        <p class="center grey-text" style="margin-bottom: 0px;margin-top: 5px">Sube tu identificación oficial</p>
    <p class="center grey-text" style="margin-bottom: 0px;margin-top: 5px">Formatos aceptados: PNG, JPG o PDF</p>
    <p class="center grey-text" style="margin-bottom: 0px;margin-top: 5px">IFE / INE, pasaporte o licencia</p>
     <hr style="padding-bottom: 40px">
      </div>
      <div class="file-field input-field col s12 m6">
            <div class="btn negrobg">
              <span>INE Vista Frontal</span>
              <input type="file" name="inef" required="required" >
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="file-field input-field col s12 m6">
            <div class="btn negrobg">
              <span>INE Vista Trasera</span>
              <input type="file" name="ineb" required="required">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="file-field input-field col s12 m6">
            <div class="btn negrobg">
              <span>Comprobane de Domicilio</span>
              <input type="file" name="comp" required="required" >
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="file-field input-field col s12 m6">
            <div class="btn negrobg">
              <span>Estado de Cuenta</span>
              <input type="file" name="est" required="required" > 
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
      <div class="col s12" style="padding-bottom: 60px; padding-top: 30px">
        <!--a class=" col s12 m5 push-m1 waves-effect waves-light btn-large">Actualizar</a-->
        <input type="submit" name="action" id="action" class=" col s12 m6 push-m3 waves-effect waves-light btn-large" value="Guardar">    
      </div>
    </div>
  </form>


     </div>
   </div>
</main>
<?php require 'footer.php'; ?>

  <script>
    $("#perfil").on("submit", function(e){
      e.preventDefault();
      var formData = new FormData(document.getElementById("perfil"));

      $.ajax({
        url: "ajax/perfil.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
      }).done(function(echo){
        if (echo === 'done') {
            swal({    
                  title: "Registro Exitoso!",
                  text: "Se a Registrado la informacion del Perfil.",   
                  type: "success",            
                  closeOnConfirm: false }, 
                  function(){   
                    location.reload(); 
                  });
          }else{
              sweetAlert("Error en el registro",echo, "error");
            }
      });
    });
    </script>

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
