

$(document).ready(function(){


	$("#edit").click(function(event){
	   event.preventDefault();
	   $('.perfil').prop("disabled", false); 
	   $('#edit').prop("disabled", true); 
	   $('#actualizar').prop("disabled", false); 

	});

});