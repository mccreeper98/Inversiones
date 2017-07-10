<!DOCTYPE html>
<html>
<head>
  <title>Admin-RegistrodeProyectos</title>
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
          <li><ul id="dropdown" class="dropdown-content">
            <li><a href="registrarP.php">Registrar Proyecto</a></li>
            <li><a href="cerrar.php">Salir</a></li>
          </ul>
          <a class="btn dropdown-button" href="#!" data-activates="dropdown"><?php echo $_SESSION['user']; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    
<main class="col s12">
  
  <form accept-charset="utf-8" method="POST" name="registro" id="registro" enctype="multipart/form-data" autocomplete="off">
          <h5>Agegar Proyecto:</h5>
          <div class="input-field col s12 m6">
            <input placeholder="Nombre" name="nombre" id="nombre" type="text" class="validate" maxlength="50" required="required">
          </div>
          <input type="number" name="porcentaje" placeholder="Porcentaje" min="0" max="100" required="required" maxlength="3">
          <div class="input-field col s12 m6">
            <input placeholder="Monto Requerido" pattern="[0-9,]{1,10}" name="requerido" id="requerido" type="text" class="validate" maxlength="10" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Inversion Minima" name="inversion" id="inversion" type="text" class="validate" pattern="[0-9,]{1,5}" maxlength="5" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Tipo de Financiamieto" name="financiamieto" id="financiamieto" type="text" class="validate" maxlength="20" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Tipo de Proyecto" name="tipo" id="tipo" type="text" class="validate" maxlength="20" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Sector" name="sector" id="sector" type="text" class="validate" maxlength="20" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Plazo" name="plazo" id="plazo" type="text" class="validate" maxlength="20" required>
          </div>
          <div class="input-field col s12 m6">
            <input placeholder="Taza Anual" name="taza" type="text" class="validate" maxlength="5" required>
          </div>
          <div class="input-field col s12 m6">
          <label>Descripción</label>
            <textarea placeholder="Descripcion" name="descripcion" required="required">
            </textarea>
          </div>
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>Subir imagenes</span>
              <input type="file" name="imagen[]" id="imagen[]" multiple="" required="required">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <button class="btn waves-effect waves-light right" type="submit" name="action" class="aceptar">Agregar Proyecto
            <i class="material-icons right">send</i>
          </button>
        </form>  

</main>
        <footer class="page-footer negrobg">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
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

<!--Start of Tawk.to Script
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
End of Tawk.to Script-->

<!--Start parrallax-->
<script type="text/javascript">
     $(document).ready(function(){
      $('.parallax').parallax();
    });
</script>
<!--End parrallax-->

<script>
    $("#registro").on("submit", function(e){
      e.preventDefault();
      var formData = new FormData(document.getElementById("registro"));

      $.ajax({
        url: "ajax/proyecto.php",
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
                  text: "Se ha Guardado la Informacion del Proyecto.",   
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

</body>
</html>
