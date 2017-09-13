$(document).ready(function(){
	programa.listarPrograma();
	
	$("#btnGuardarPrograma").on("click", function(e){

		e.preventDefault();

		programa.guardar();



	});

	$("#btnCambiarPrograma").on("click", function(e){

		e.preventDefault();

		programa.modificar();



	});

	$("#btnEliminarPrograma").on("click", function(e){

		e.preventDefault();

		programa.eliminar();



	});

});
var programa =
{
	listarPrograma: function()
	{
		$.ajax({
			url: url + 'programa/listarPrograma',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){
			$("#tblPrograma tbody").empty();
			var filas = "";

			$.each(resultado, function(index, val) {
				var colIdPrograma="<td>" + val.id_programa + "</td>";
				var colPrograma = "<td>" + val.nombre + "</td>";
				var colcadena = "<td>" + val.cadena + "</td>";
				var colBtnModificar = "<td><button type='button' class='btn btn-primary'><i class='glyphicon-pencil'></i></button></td>";
				var colBtnEliminar = "<td><button type='button' class='btn btn-danger'><i class='glyphicon-remove'></i></button></td>";
				var btnDetalles='<td><a id="btnDetalles" href="'+ url +'admin/fichasxPrograma/' + val.id_programa + '" class="btn btn-success">Detalles</a></td>';

				

				filas += "<tr>" + colIdPrograma + colPrograma+colcadena +colBtnModificar+colBtnEliminar+btnDetalles+"</tr>";

			});

			$("#tblPrograma tbody").append(filas);
			console.log(resultado);
			
		})
		
		.fail(function(error){
			console.log(error);
		})

	},
	guardar: function()
	{
		
		
		var formData = new FormData($("#formPrograma")[0]);
		$.ajax({
			url: url + "programa/guardarPrograma",
			type: 'POST',
			dataType: 'json',
			data: formData,
			processData:false,
			contentType:false
		})
		.done(function() {
			alert("Guardado");
			console.log("success");
		})
		.fail(function() {

			console.log("error");
		})

	},

	modificar: function()
	{
		
		var id_programa= $("#txtcod_pro").val();
		var nombre= $("#txtnom_pro").val();
		var	id_cadena= $("#sltCadena").val();
		$.ajax({
			url: url + "programa/modificarPrograma",
			type: "POST",
			dataType: "json",
			data: { 
				txtcod_pro: id_programa,
				txtnom_pro: nombre,				
				sltCadena: id_cadena
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
		
		var id_programa= $("#txtcod_pro").val();
		$.ajax({
			url: url + "programa/eliminarPrograma",
			type: "POST",
			dataType: "json",
			data: { 
				
				txtcod_pro: id_programa,
			},
		}).done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});

	}
}