$(document).ready(function(){
	admin.listarAprendiz();
	
	$("#btnGuardaAprendiz").on("click", function(e){

		e.preventDefault();

		admin.guardar();
	});

	$("#btnCambiaAprendiz").on("click", function(e){

		e.preventDefault();

		admin.modificar();
	});

	$("#btnEliminaAprendiz").on("click", function(e){

		e.preventDefault();

		admin.eliminar();
	});

	$("#asignar").on("click", function(e){

		e.preventDefault();

		admin.asignarFichas();
	});

	$("#asignarAprendiz").on("click", function(e){

		e.preventDefault();

		admin.asignarAprendiz();
	});

});
var admin =
{

	asignarFichas: function()
	{
		var documento=$("#txtDocumento").val();
		var ficha=$("#txtFicha").val();

		$.ajax({
			url: url + "admin/asignarFichasAFuncionario",
			type: "POST",
			dataType: "json",
			data: { 
				txtDocumento:documento,
				txtFicha:ficha
			},
		})
		.done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});


	},
	asignarAprendiz: function()
	{
		var documento=$("#txtDocumento").val();
		var ficha=$("#txtNit").val();

		$.ajax({
			url: url + "admin/asignarAprendizAEmpresa",
			type: "POST",
			dataType: "json",
			data: { 
				txtDocumento:documento,
				txtNit:ficha
			},
		})
		.done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});


	},
	listarAprendiz: function()
	{
		$.ajax({
			url: url + 'admin/listarAprendiz',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){

			$("#tblAprendices tbody").empty();
			var filas = "";

			$.each(resultado, function(index, val) {
				var colDocumento    = "<td>" + val.documento + "</td>";
				var colNombre       = "<td colspan='2'>" + val.nombres+" "+val.apellidos +  "</td>";
				var colCorreo       = "<td>" + val.correo + "</td>";
				var colTelefono     = "<td>" + val.telefono + "</td>";
				var colDocente      = "<td>" + val.nombres_fun+" "+ val.apellidos_fun + "</td>";
				var colEmpresa      = "<td>" + val.empresa + "</td>";
				var colEstado       = "<td>" + val.estado + "</td>";
				var colPractica     = "<td>" + val.alternativa + "</td>";
				var colBtnModificar = '<td><a href="'+ url +'admin/detallesAprendiz/' + val.documento + '"  type="button" name"btnEditar" class="btn btn-primary"><i class="glyphicon-pencil"></i></a></td>';
				var colBtnEliminar  = '<td><button  onclick=aprendiz.eliminar() type="button" class="btn btn-danger btn-eliminar"><i class="glyphicon glyphicon-trash"></i></button></td>';


				filas += "<tr>" + colDocumento + colNombre + colCorreo +colTelefono+colDocente+colEmpresa+colEstado+colPractica+ colBtnModificar+colBtnEliminar +"</tr>";

			});

			$("#tblAprendices tbody").append(filas);

			console.log(resultado);
		})
		

		.fail(function(error){
			console.log(error);
		})

		

	}

			
}
