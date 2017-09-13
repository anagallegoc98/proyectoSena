$(document).ready(function(){
regional.listarZona();
	regional.listar();
	$("#btnGuardarRegional").on("click", function(e){

		e.preventDefault();

		regional.guardar();



	});

	$("#btnCambiarRegional").on("click", function(e){

		e.preventDefault();

		regional.modificar();



	});

	$("#btnEliminarRegional").on("click", function(e){

		e.preventDefault();

		regional.eliminar();



	});

});

var regional =
{
			listarZona: function()
	{
		$.ajax({
			url: url + 'regional/listarZona',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){
				var select="";
			$.each(resultado, function(index, val){
			 select += "<option value="+ val.id_zona +">"+ val.zona +"</option>"


			});
			$("#sltId_zona").append(select);
			console.log(resultado);
		
			
		})
		
		.fail(function(error){
			console.log(error);
		})

	},

	guardar: function()
	{
		
		var id_regional= $("#txtcod_reg").val();
		var regional= $("#txtnom_reg").val();
		var id_zona = $("#sltId_zona").val();
		
		$.ajax({
			url: url + "regional/guardarRegional",
			type: "POST",
			dataType: "json",
			data: { 
				txtcod_reg: id_regional,
				txtnom_reg: regional,
				sltId_zona:id_zona				
				
				
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
		var id_regional= $("#txtcod_reg").val();
		var regional= $("#txtnom_reg").val();
		var id_zona = $("#sltId_zona").val();
		
		$.ajax({
			url: url + "regional/modificarRegional",
			type: "POST",
			dataType: "json",
			data: { 
				txtcod_reg: id_regional,
				txtnom_reg: regional,
				sltId_zona:id_zona					
				
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
		
		var id_regional= $("#txtcod_reg").val();
		$.ajax({
			url: url + "regional/eliminarRegional",
			type: "POST",
			dataType: "json",
			data: { 
				
				txtcod_reg: id_regional,
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
			url: url + 'regional/listarRegional',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){

			
			$("#tblRegional tbody").empty();
			var filas = "";

			$.each(resultado, function(index, val) {
				var colId = "<td>" + val.id_regional + "</td>";
				var colNombre = "<td>" + val.regional + "</td>";
				var colzona ="<td>" + val.zona + "</td>";
				var colBtnModificar = "<td><button type='button' class='btn btn-primary'><i class='glyphicon-pencil'></i></button></td>";
				var colBtnEliminar = "<td><button type='button' class='btn btn-danger'><i class='glyphicon-remove'></i></button></td>";


				filas += "<tr>" + colId + colNombre + colzona + colBtnModificar+colBtnEliminar +"</tr>";

			});

			$("#tblRegional tbody").append(filas);

			console.log(resultado);
		})
		

		.fail(function(error){
			console.log(error);
		})
	}
}