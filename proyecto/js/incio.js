'use strict'
$("#inicio").on("submit", function(e){ 
      e.preventDefault(); 
       
      var correo = document.getElementById("correo");
      var contraseña = document.getElementById("psw");

      alert (correo);

      $.ajax({
        type: 'POST',
        url: 'ajax/iniciar.php',
        data:{
        'correo':correo,
        'contraseña':contraseña
        },
        success: function(echo){
          if (echo === 'registro') {
              sweetAlert("Error al Iniciar Sesión", "El correo "+ correo + "no esta registrado", "error");
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
      });
    }); 