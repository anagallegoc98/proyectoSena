$(document).ready(function(){
	cadena.listar();
	
	$("#btnGuardarCadena").on("click", function(e){

		e.preventDefault();

		cadena.guardar();



	});

	$("#btnCambiarCadena").on("click", function(e){

		e.preventDefault();

		cadena.modificar();



	});

	$("#btnEliminarCadena").on("click", function(e){

		e.preventDefault();

		cadena.eliminar();



	});

});
var cadena =
{

	guardar: function()
	{
		var cadena= $("#txtnom_cad").val();
		var id_centro= $("#sltCentro").val();
		
		$.ajax({
			url: url + "cadena/guardarCadena",
			type: "POST",
			dataType: "json",
			data: { 
				txtnom_cad: cadena,				
				sltCentro: id_centro
				
			},
		}).done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});

	},

	modificar: function()
	{
		var	id_cadena= $("#txtcod_cad").val();
		var cadena= $("#txtnom_cad").val();
		var id_centro= $("#sltCentro").val();
		$.ajax({
			url: url + "cadena/modificarCadena",
			type: "POST",
			dataType: "json",
			data: { 
				txtcod_cad: id_cadena,
				txtnom_cad: cadena,				
				sltCentro: id_centro
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
		
		var	id_cadena= $("#txtcod_cad").val();
		$.ajax({
			url: url + "cadena/eliminarCadena",
			type: "POST",
			dataType: "json",
			data: { 
				
				
				txtcod_cad: id_cadena,
			},
		}).done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});

	},


	listar: function()
	{
			$.ajax({
			url: url + 'cadena/listarCadena',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){

			
			$("#tblCadena tbody").empty();
			var filas = "";

			$.each(resultado, function(index, val) {
				var colId = "<td>" + val.id_cadena + "</td>";
				var colNombre = "<td>" + val.cadena + "</td>";
				var colCentro ="<td>" + val.centro + "</td>";
				var colBtnModificar = "<td><button type='button' class='btn btn-primary'><i class='glyphicon-pencil'></i></button></td>";
				var colBtnEliminar = "<td><button type='button' class='btn btn-danger'><i class='glyphicon-remove'></i></button></td>";


				filas += "<tr>" + colId + colNombre + colCentro + colBtnModificar+colBtnEliminar +"</tr>";

			});

			$("#tblCadena tbody").append(filas);

			console.log(resultado);
		})
		

		.fail(function(error){
			console.log(error);
		})
	}
}