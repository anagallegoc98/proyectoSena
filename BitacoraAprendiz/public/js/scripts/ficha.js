$(document).ready(function(){

	$("#btnGuardarFicha").on("click", function(e){

		e.preventDefault();

		ficha.guardar();
	});

	$("#btnCambiarFicha").on("click", function(e){

		e.preventDefault();

		ficha.modificar();
	});

	$("#btnEliminarFicha").on("click", function(e){ 

		e.preventDefault();

		ficha.eliminar();
	});

});

var ficha =
{

	listarFichas: function()
	{

		$.ajax({
			url: url + 'ficha/listarFicha',
			type: 'GET',
			dataType: 'json',
			
			
		})
		.done(function(resultado){
			$("#tblFichas tbody").empty();
			var filas = "";

			$.each(resultado, function(index, val) {

				var colPrograma = "<td>" + val.nombre + "</td>";
				var colFicha = "<td>" + val.numero_ficha + "</td>";
				var colBtnModificar =  '<td><button id="'+ index +'" type="button" class="btn btn-primary btn-editar"><i class="glyphicon glyphicon-pencil"></i></button></td>';
				var colBtnEliminar = '<td><button id="'+ index +'" type="button" class="btn btn-danger btn-eliminar"><i class="glyphicon glyphicon-trash"></i></button></td>';
				
				var btnAsignar='<td><a id="btnAsignar" href="'+ url +'admin/aprendizxFicha/' + val.numero_ficha + '" class="btn btn-success">Ver Ficha</a></td>';

				

				filas += "<tr>" + colPrograma + colFicha+colBtnModificar+colBtnEliminar+btnAsignar +"</tr>";

			});

			$("#tblFichas tbody").append(filas);

			console.log(resultado);
		

			
		})
		
		.fail(function(error){
			console.log(error);
		})

	},

	guardar: function()
	{
		var	numero_ficha= $("#txtnum_fic").val();
		var id_programa= $("#sltPrograma").val();

		
		$.ajax({
			url: url + "ficha/guardarFicha",
			type: "POST",
			dataType: "json",
			data: { 
				txtnum_fic: numero_ficha,
				sltPrograma: id_programa			
				
				
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
		var	numero_ficha= $("#txtnum_fic").val();
		var id_programa= $("#sltPrograma").val();

		$.ajax({
			url: url + "ficha/modificarFicha",
			type: "POST",
			dataType: "json",
			data: { 
				txtnum_fic: numero_ficha,
				sltPrograma: id_programa	
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
		
		var	numero_ficha= $("#txtnum_fic").val();
		$.ajax({
			url: url + "ficha/eliminarFicha",
			type: "POST",
			dataType: "json",
			data: { 
				
				txtnum_fic: numero_ficha,
			},
		}).done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});

	}
}