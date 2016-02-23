$(document).ready(function(){

	$(".mostrarDescripcion").click(function() {
		$(this).next("div").next("div").fadeToggle();
		// $(".abrirDescripcion").slideToggle(800);
		//$(".abrirDescripcion").attr('colspan',2);
		// $(this).show(".abrirDescripcion").slideToggle(400);  // abrir respuesta
	});

});