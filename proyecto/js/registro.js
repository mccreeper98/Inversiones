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
    success: function(respuesta){
      if (respuesta === 'done') {
        swal("Registro Exitoso!","Se a Enviado un correo a: "+correo,"success");
      }else{
        if (respuesta === 'existe') {
          sweetAlert("Error en el registro", "El correo "+ correo + "ya esta registrado", "error");
        }else{
          if (respuesta === 'Error') {
            alert("Error");
          }else{
          if (respuesta === 'correo') {
            sweetAlert("Error","No se ha podido enviar el correo","error");
          }
        }
        }
      }
    }
  });
  
};

