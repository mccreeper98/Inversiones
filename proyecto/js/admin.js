function load(page) {
	var parametros = {"action":"ajax","page":page};
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'ajax/admin.php',
		data: parametros,
		beforeSend: function(objeto){
			$("#loader").html("<img src='img/loader.gif'>");
		},
		success:function(data){
			$(".outer_div").html(data).fadeIn('slow');
			$("#loader").html("");
		}

	})
}

$(document).ready(function(){ 
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered 
    $('#AgregarProyecto').modal(); 

  });

/*
$(".outer_div").on("click","#edit",function(){
	var id = $(this).data('id');
	alert(id);

	var modal = $(this)
	modal.find('.modal .modal-content #editar #nombre').val(id)
});
*/
$(".outer_div").on("click","#delete",function(){
  var id = $(this).data('id');
  var nombre = $(this).data('nom');

	swal({    title: "Seguro que desea eliminar el proyecto "+nombre+" ?",
              text: "No se podrá recuperar la informaciondel proyecto!",   
              type: "warning",   
              showCancelButton: true,
              cancelButtonText: "Cancelar",   
              confirmButtonColor: "#DD6B55",   
              confirmButtonText: "Eliminar",   
              closeOnConfirm: false }, 
              function(){   
                $.ajax({
                  type: 'POST',
                  url: 'ajax/delete.php',
                  data:{
                    'id':id
                  },
                  success: function(respuesta){
                    if (respuesta === 'done') {
                      swal("Eliminado!", "El proyecto se ha eliminado.", "success");
                      location.reload();
                    }else{
                        sweetAlert("Error al Tratar de Eliminar", "El proyecto "+ nombre + "no se ha eliminado", "error");
                        location.reload();
                    }
                  }
                });
              }); 
});
//envio de formulario por el metodo POST 
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
                  text: "Se a Registrado la informacion del Proyecto.",    
                  type: "success",             
                  closeOnConfirm: false },  
                  function(){    
                    location.reload();  
                  }); 
          }else{ 
              sweetAlert({ 
                title:"Error en el registro", 
                text: echo, 
                type:"error",  
                closeOnConfirm: false }, 
                function(){    
                    location.reload();  
                });   
            } 
      }); 
    }); 
