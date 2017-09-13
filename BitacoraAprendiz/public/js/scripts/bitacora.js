$(document).ready(function(){

	$("#btnCrearBitacora").on("click", function(e){

		e.preventDefault();

		bitacora.guardar();
		alert("Bitacora Guardada.");
		window.location = url + "aprendiz/misBitacoras";


	});

	$("#btnGuardarObservacion").on("click", function(e){

		e.preventDefault();
		bitacora.guardarObservaciones();


	});
	
	$("#btnAprobarBitacora").on("click", function(e){

		e.preventDefault();
		bitacora.aprobarBitacora();
		


	});
	$("#btnRevisarBitacora").on("click", function(e){

		e.preventDefault();
		bitacora.revisarBitacora();
		


	});
	$("#btnVolver").on("click", function(e){

		window.location = url + "coformador/verAprendices";


	});

	$("#btnCrearActividad").on("click", function(e){

		e.preventDefault();
bitacora.guardarActividades();
window.location = url + "aprendiz/misBitacoras";
		


	});



});


var bitacora =
{

	guardar: function()
	{

		
		var formData = new FormData($("#formBitacora")[0]);
		$.ajax({
			url: url + "aprendiz/crearBitacora",
			type: "POST",
			dataType: 'json',
			data: formData,
			processData:false,
			contentType:false

		}).done(function(resultado){

			alert("guardada");


		})
		.fail(function(error){

			console.log(error);

		});

	},
	guardarObservaciones: function()
	{

		
		var formData = new FormData($("#formObservaciones")[0]);
		$.ajax({
			url: url + "coformador/guardarObservaciones",
			type: "POST",
			dataType: 'json',
			data: formData,
			processData:false,
			contentType:false

		}).done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});

	},
	aprobarBitacora: function() {
		var formData = new FormData($("#formObservaciones")[0]);
		$.ajax({
			url: url + "coformador/aprobarBitacora",
			type: "POST",
			dataType: 'json',
			data: formData,
			processData:false,
			contentType:false
		}).done(function(resultado){

			
			alert("Aprobada");

			
		}).fail(function(error){
			alert("Error al aprobar esta bitacora, intente nuevamente");
			console.log(error);
		});


	},
	revisarBitacora: function() {
		var formData = new FormData($("#formRevisarBitacora")[0]);
		$.ajax({
			url: url + "funcionario/revisarBitacora",
			type: "POST",
			dataType: 'json',
			data: formData,
			processData:false,
			contentType:false
		}).done(function(resultado){

			
			alert("Se Ha Marcado Como Revisada");

			
		}).fail(function(error){
			alert("Error, intente nuevamente");
			console.log(error);
		});


	},
	guardarActividades: function() {
		var formData = new FormData($("#formActividades")[0]);
		$.ajax({
			url: url + "aprendiz/guardarActividadNueva",
			type: "POST",
			dataType: 'json',
			data: formData,
			processData:false,
			contentType:false
		}).done(function(resultado){

			
			alert("guardada");

			
		}).fail(function(error){
			alert("Error al guardar, intente nuevamente");
			console.log(error);
		});


	}
}