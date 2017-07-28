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

$(".mdlAddAlumnos").on("click",function(){
   $('#mdlAlumnos').openModal();
   $("#mdlTitulo").text("Agregar Alumno");
   $(".formAlumnos")[0].reset();
});


