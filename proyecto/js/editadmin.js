
//envio de formulario por el metodo POST 
  $("#editar").on("submit", function(e){ 
      e.preventDefault(); 
      var formData = new FormData(document.getElementById("editar")); 
 
      $.ajax({ 
        url: "ajax/editarproyecto.php", 
        type: "POST", 
        dataType: "HTML", 
        data: formData, 
        cache: false, 
        contentType: false, 
        processData: false 
      }).done(function(echo){ 
        if (echo === 'done') { 
            swal({     
                  title: "Actualizacion Exitosa!", 
                  text: "Se a Actualizado la informacion del Proyecto.",    
                  type: "success",             
                  closeOnConfirm: false },  
                  function(){    
                    location.href="admin.php"  
                  }); 
          }else{ 
              sweetAlert({ 
                title:"Error en el registro", 
                text: echo, 
                type:"error",  
                closeOnConfirm: false }, 
                function(){    
                    location.href="admin.php"  
                });   
            } 
      }); 
    }); 
