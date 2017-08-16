<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <script type="text/javascript" src="js/sweetalert.min.js"> </script>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
          var psw = usrNombre+usrApellidos;

          $.ajax({
            type: 'POST',
            url: 'ajax/registrar.php',
            data:{
              'correo':usrCorreo,
              'nombre':usrNombre,
              'app':usrApellidos,
              'psw':psw
            },
            success: function(echo){

              if (echo === 'bien') {
                swal({     
                  title: "Registro Exitoso!", 
                  text: "Se a Enviado un correo a: "+ usrCorreo +" con la Contraseña",    
                  type: "success",             
                  closeOnConfirm: false },  
                  function(){    
                    location.href="login.php";
                  });
              }else{
                if (echo === 'existe') {
                  sweetAlert("Error en el registro", "El correo "+ usrCorreo + " ya esta registrado", "error");
                }else{
                  if (echo === 'Error') {
                    alert("Error");
                  }else{
                    if (echo === 'correo') {
                      sweetAlert("Error","No se ha podido enviar el correo","error");
                    }//correo
                  }//error
                }//existe
              }//done

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
 <script>
    function agregar() {
  var correo = document.getElementById('correo').value;
  var nombre = document.getElementById('nombre').value;
  var app = document.getElementById('app').value;
  var apm = document.getElementById('apm').value;
  var psw = document.getElementById('psw').value;
  var pswc = document.getElementById('pswc').value;

  if (psw === pswc) {
    var con = psw;
  }else{
    sweetAlert("Error en el registro", "Las Contraseñas no son iguales", "error");
    return false;
  }

  $.ajax({
    type: 'POST',
    url: 'ajax/agregar.php',
    data:{
      'correo':correo,
      'nombre':nombre,
      'app':app,
      'apm':apm,
      'psw':con
    },
    success: function(res){
      alert (res);  
      if (res === 'bien') {
        swal("Registro Exitoso!","Se a Enviado un correo a: "+ correo +"","success");
      }else{
        if (res === 'existe') {
          sweetAlert("Error en el registro", "El correo "+ correo + " ya esta registrado", "error");
        }else{
          if (res === 'Error') {
            alert("Error");
          }else{
          if (res === 'correo') {
            sweetAlert("Error","No se ha podido enviar el correo","error");
          }//correo
        }//error
        }//existe
      }//done
    }//function
  });//Ajax
  
};
  </script>
  <main class="animated fadeIn">
    <div class="row" style="height: 100vh; margin-bottom: 0px;">
      <div class="col s12 m7 l6 white-text" style="background-color: #393646; height: 100%">
        <form class="col s12 m10 push-m1" style="padding-top: 40px" method="post" onsubmit="return agregar();" id="registro" autocomplete="off">
          <center><h5>Registrate para continuar</h5></center><br>
          <div class="container">
            <input type="email" name="correo"  id="correo" value="" class="col s12" placeholder="Correo"  autocomplete="off" maxlength="30" required>
            <input type="text" name="nombre" id="nombre" value="" class="col s12" placeholder="Nombre(s)" autocomplete="off" maxlength="30" required>
            <input type="text" name="app" id="app" value="" class="col s6" placeholder="Apellido Paterno" autocomplete="off" maxlength="20" required>
            <input type="text" name="apm" id="apm" value="" class="col s6" placeholder="Apellido Materno" autocomplete="off" maxlength="20" required>
            <input type="password" name="psw" id="psw" value="" class="col s5" placeholder="Contraseña"  required>
            <input type="password" name="pswc" id="pswc" value="" class="col s7" placeholder="Confirme la Contraseña"  required>
            <div class="col s12" style="padding-bottom: 20px;">
              <button type="submit" id="action" class="btn-large col s12 waves-effect waes-light negro animated bounceIn"  name="action">Registrar</button>
            </div>
            <div class="divider col s12"></div>
            <div class="col s12 center" id="fbLogin" style="padding: 20px">
              <button class='btn-large waves-effect waves-light fb col s12' type='' onclick="ingresar();">Registrarme con Facebook
                <i class='left'><img src="img/fb.png" height="28px" id="imgFbLogin"></i>
              </button>
            </div>
          </div>
        </form>
        <div class="col s12 center" style="padding: 20px;">
          <p>
            ¿Ya tienes cuenta? <a href="login" class="acento">Ingresa aquí </a>para que tengas acceso a todos los proyectos.
          </p>
        </div>
      </div>
      <div class="col  m5 l6 hide-on-small-only" id="registroImg">
        <img id="logoLogin" class="responsive-img" src="img/logob.png">
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
