<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"> </script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body bgcolor="#393646">
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '107669469909511',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

 /* function ingresar() {  
    FB.login(function(response){  
        validarUsuario();  
    }, {scope: 'public_profile, email'});  
  }

  function validarUsuario() {  
    FB.getLoginStatus(function(response) {  
        if(response.status == 'connected') {  
            FB.api('/me', function(response) {  
                console.log(response);   
            });  
        } else if(response.status == 'not_authorized') {   
            swal({     
                  title: "Error al Iniciar Sesión", 
                  text: "Debes Autorizar la App!",    
                  type: "error",             
                  closeOnConfirm: false },  
                  function(){    
                    location.reload();  
                  }); 
        } else {    
            swal({     
                  title: "Error al Iniciar Sesión", 
                  text: "Debes ingresar a tu cuenta de Facebook!",    
                  type: "error",             
                  closeOnConfirm: false },  
                  function(){    
                    location.reload();  
                  });  
        }  
    });  
  }   
*/
  function ingresar() {
    FB.login(function(response){
      validarUsuario();
    }, {scope: 'public_profile,email'});
    FB.api('/me', function(response) {
      //console.log(JSON.stringify(response));
    });

  }
  function validarUsuario() {
    FB.getLoginStatus(function(response) {
      if(response.status == 'connected') {
       FB.api(
        '/me',
        'GET',
        {"fields":"email,first_name,last_name,id,gender"},
        function(response) {
          var usrNombre = response.first_name;
          var usrApellidos = response.last_name;
          var usrCorreo = response.email;
          var usrID = response.id;
          var usrSexo = response.gender;
          $.ajax({
            type: 'POST',
            url: 'ajax/iniciar.php',
            data:{
              'correo':usrCorreo
            },
            success: function(echo){
              if (echo === 'entro') {
                    location.reload();
                  }else{if (echo === 'registro') {
                sweetAlert("Error al Iniciar Sesión", "El correo "+ usrCorreo + "no esta registrado", "error");
              }else{
                if (echo === 'estado') {
                  sweetAlert("Error al Iniciar Sesión", "La cueunta no a sido activada", "error");
                }else{
                  if (echo === 'psw') {
                    sweetAlert("Error al Iniciar Sesión", "Contraseña Incorrecta", "error");
                  }
                  sweetAlert("Error al Iniciar Sesión ",echo, "error");
                }
              }
            }

            }
          });
        });
     } else if(response.status == 'not_authorized') {   
            swal({     
                  title: "Error al Iniciar Sesión", 
                  text: "Debes Autorizar la App!",    
                  type: "error",             
                  closeOnConfirm: false },  
                  function(){    
                    location.reload();  
                  }); 
        } else {    
            swal({     
                  title: "Error al Iniciar Sesión", 
                  text: "Debes ingresar a tu cuenta de Facebook!",    
                  type: "error",             
                  closeOnConfirm: false },  
                  function(){    
                    location.reload();  
                  });  
        }  
    });
  }

</script>
  <main class="animated fadeIn">
    <div class="row" style="height: 100vh; margin-bottom: 0px;">
      <div class="col  m5 l6 hide-on-small-only" id="loginImg">
        <img id="logoLogin" class="responsive-img" src="img/logob.png">
      </div>
      <div class="col s12 m7 l6 white-text" style="background-color: #393646; height: 100%">
        <form method="post" class="col s12 m8 push-m2" style="padding-top: 80px" id="inicio" name="inicio" action="iniciar.php">
          <center><h5>Inicia tu sesión</h5></center>
          <br>
          <div class="input-field col s12">
            <i class="material-icons prefix">mail</i>
            <input type="text" name="correo" id="correo" class="validate" required="required">
            <label for="correo">Correo</label>
          </div>

          <div class="input-field col s12">
            <i class="material-icons prefix">https</i>
            <input type="password" name="psw" id="psw" class="validate" required="required">
            <label for="psw">Contraseña</label>
          </div>
          <div class="col s12 center" style="padding: 20px">
            <button class='btn-large waves-effect waves-light negro col s12 animated bounceIn' type='submit' name='action'>Iniciar
            </button>
          </div>
          <div class="divider col s12"></div>
          <div class="col s12 center" id="fbLogin" style="padding: 20px">
          <button class='btn-large waves-effect waves-light fb col s12' type='button' onclick="ingresar();">Iniciar con Facebook
                <i class='left'><img src="img/fb.png" height="28px" id="imgFbLogin"></i>
              </button>
          </div>
          
        </form>
        <div class="col s12 center" style="padding: 20px;">
          <p><a href="#" class="acento">Olvidé mi contraseña</a></p>
          <p>
            ¿No tienes cuenta?
            <a href="registra" class="acento">Registrate aquí</a>
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
