
$(document).ready(function(){


	$("#btnGuardarAprendiz").on("click", function(e){

		e.preventDefault();

		aprendiz.guardar();



	});

	$("#btnModificarAprendiz").on("click", function(e){

		e.preventDefault();

		aprendiz.modificar();



	});
	$("#btnActualizarPerfil").on("click", function(e){

		e.preventDefault();

		aprendiz.actualizarPerfil();



	});

	$("#btnEliminarAprendiz").on("click", function(e){

		e.preventDefault();

		aprendiz.eliminar();



	});
$("#btnVolverdeBitacora").on("click", function(e){

		e.preventDefault();

		window.location = url + "aprendiz/misBitacoras";


	});


});


var aprendiz =
{

	
	guardar: function()
	{
	
		var documento= $("#txtDocumento_apren").val();
		var nombre= $("#txtNombre").val();
		var apellido= $("#txtApellido").val();
		var correo= $("#txtCorreo").val();
		var telefono= $("#txtTelefono").val();
		var ficha= $("#sltFicha").val();
		var programa= $("#sltPrograma").val();
		var cadena= $("#sltCadena").val();

		
		
		$.ajax({
			url: url + "aprendiz/guardarAprendiz",
			type: "POST",
			dataType: "json",
			data: { 
		
				txtDocumento_apren: documento,
				txtNombre: nombre,
				txtApellido: apellido,
				txtCorreo:correo,
				txtTelefono: telefono,
				sltFicha: ficha,
				sltPrograma: programa,
				sltCadena: cadena

			},
		}).done(function(resultado){

			alertify.success("guardado");
			

		})
		.fail(function(error){

			console.log(error);

		});

	},

	modificar: function()
	{
	
		var documento= $("#txtDocumento_apren").val();
		var nombre= $("#txtNombre").val();
		var apellido= $("#txtApellido").val();
		var correo= $("#txtCorreo").val();
		var telefono= $("#txtTelefono").val();
		var ficha= $("#txtFicha").val();
		var programa= $("#txtPrograma").val();
		var cadena= $("#txtCadena").val();
		$.ajax({
			url: url + "aprendiz/modificarAprendiz",
			type: "POST",
			dataType: "json",
			data: { 
			
				txtDocumento_apren: documento,
				txtNombre: nombre,
				txtApellido: apellido,
				txtCorreo:correo,
				txtTelefono: telefono,
				txtFicha: ficha,
				txtPrograma: programa,
				txtCadena: cadena

			},
		}).done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});

	},

	eliminar: function()
	{

		var documento= $("#txtDocumento_apren").val();

		$.ajax({
			url: url + "aprendiz/eliminarAprendiz",
			type: "POST",
			dataType: "json",
			data: { 

				txtDocumento_apren: documento

			},
		}).done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});

	},
	actualizarPerfil: function()
	{

		
		var formData = new FormData($("#formPerfilAprendiz")[0]);
		$.ajax({
			url: url + "aprendiz/actualizarPerfilAprendiz",
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

	}


}