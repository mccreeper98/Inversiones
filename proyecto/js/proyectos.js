
$("#registro").on("submit",function(e){

	e.preventDefault();
	var formData = new FormData(document.getElementById('registro'));

	$.ajax({		
		url: "ajax/proyecto.php",
		type: "POST",
		dataType: "HTML",
		data: formData,
		cache: false,
		contentType: false,
		processData:false,
		success: function(res) {

			switch(res){
				case 'done':
					swal("Registro Exitoso!","Se a dado de alta el proyecto ","success");
					break;

				case 'existe':
					sweetAlert("Error en el registro","Ya hay un proyecto registrado con ese nombre ","error");
					break;

				case 'Error':
					alert("Error");
					break;

				case 'extenion':
					sweetAlert("Error en el registro","Solo se permiten archivos con las siguientes extensiones: .jpgj, .peg, .gif, .png ","error");
					break;

				case 'tamaño':
					sweetAlert("Error en el registro","El archivo es demaciado grande. El tamaño maximo del archivo es de 2048KB","error");
					break;

			} 
		}
	});

	return false;

});