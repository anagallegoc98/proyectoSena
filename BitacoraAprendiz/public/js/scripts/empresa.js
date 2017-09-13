$(document).ready(function(){
	empresa.listarAprendiz();
	empresa.listarEmpresa();
	empresa.listarCoformador();

	$("#formEmpresa").on("submit", function(e){

		e.preventDefault();

		empresa.guardar();

	});

	$("#btnCambiarEmpresa").on("click", function(e){

		e.preventDefault();

		empresa.modificar();
	});



	$("#btnEliminarEmpresa").on("click", function(e){

		e.preventDefault();

		empresa.eliminar();
	});

	$("#btnasignarAprendizACoformador").on("click", function(e){

		e.preventDefault();

		empresa.asignarAprendiz();
	});



});
var empresa =
{
	asignarAprendiz: function()
	{
		var documento_a=$("#txtDocumento_a").val();
		var documento_c=$("#txtDocumento_c").val();

		$.ajax({
			url: url + "empresa/asignarAprendizACoformador",
			type: "POST",
			dataType: "json",
			data: { 
				txtDocumento_a:documento_a,
				txtDocumento_c:documento_c
			},
		})
		.done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});


	},
	guardar: function()
	{
		
		var nit= $("#txtNit").val();
		var empresa= $("#txtNombre").val();
		var telefono= $("#txtTelefono").val();
		var correo= $("#txtCorreo").val();
		var direccion= $("#txtDireccion").val();
		$.ajax({
			url: url + "empresa/guardarEmpresa",
			type: "POST",
			dataType: "json",
			data: { 
				txtNit: nit,
				txtNombre : empresa,
				txtTelefono: telefono,

				txtCorreo : correo,
				txtDireccion: direccion

				
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
		var nit= $("#txtNit").val();
		var empresa= $("#txtNombre").val();
		var telefono= $("#txtTelefono").val();
		var correo= $("#txtCorreo").val();
		var direccion= $("#txtDireccion").val();
		$.ajax({
			url: url + "empresa/modificarEmpresa",
			type: "POST",
			dataType: "json",
			data: { 
				txtNit: nit,
				txtNombre : empresa,
				txtTelefono: telefono,
				txtCorreo : correo,
				txtDireccion: direccion

				
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
		
		var nit= $("#txtNit").val();
		$.ajax({
			url: url + "empresa/eliminarEmpresa",
			type: "POST",
			dataType: "json",
			data: { 
				
				txtNit: nit
				
			},
		}).done(function(resultado){

			alert(resultado);
			

		})
		.fail(function(error){

			console.log(error);

		});

	},
	listarAprendiz: function()
	{
		$.ajax({
			url: url + 'empresa/listarAprendiz',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){

			
			$("#tblAprendiz tbody").empty();
			var filas = "";

			$.each(resultado, function(index, val) {
				var colDocumento = "<td>" + val.documento + "</td>";
				var colNombre = "<td>" + val.nombres + "</td>";
				var colApellido ="<td>" + val.apellidos + "</td>";
				var colCorreo = "<td>" + val.correo + "</td>";
				var colTelefono = "<td>" + val.telefono + "</td>";

				filas += "<tr>" + colDocumento + colNombre + colApellido + colCorreo + colTelefono+ "</tr>";

			});

			$("#tblAprendiz tbody").append(filas);

			console.log(resultado);
		})
		
		.fail(function(error){
			console.log(error);
		})

	},
	listarCoformador: function()
	{
		$.ajax({
			url: url + 'empresa/listarCoformador',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){

			
			$("#tblCoformador tbody").empty();
			var filas = "";

			$.each(resultado, function(index, val) {
				var colDocumento = "<td>" + val.documento + "</td>";
				var colNombre = "<td>" + val.Nombres + "</td>";
				var colApellido ="<td>" + val.Apellidos + "</td>";
				var colCorreo = "<td>" + val.correo + "</td>";
				var colTelefono = "<td>" + val.telefono + "</td>";
				var colBtnModificar =  '<td><a href="'+ url +'empresa/detallesCoformador/' + val.documento + '" id="'+ index +'" type="button" class="btn btn-primary btn-editar"><i class="glyphicon glyphicon-pencil"></i></a></td>';
				var colBtnEliminar = '<td><button  onclick="empresa.eliminar()" type="button" class="btn btn-danger btn-eliminar"><i class="glyphicon glyphicon-trash"></i></button></td>';

				var btnAsignar='<td><a id="btnAsignar" href="'+ url +'empresa/asignarAprendiz/' + val.documento + '" class="btn btn-success">Asignar</a></td>';


				filas += "<tr>" + colDocumento + colNombre + colApellido + colCorreo + colTelefono+colBtnModificar+colBtnEliminar+btnAsignar+ "</tr>";

			});

			$("#tblCoformador tbody").append(filas);

			console.log(resultado);
		})
		
		.fail(function(error){
			console.log(error);
		})

	},
	listarEmpresa: function()
	{
		$.ajax({
			url: url + 'empresa/listarEmpresa',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){

			
			$("#tblEmpresa tbody").empty();
			var filas = "";

			$.each(resultado, function(index, val) {
				var colNit = "<td>" + val.nit_empresa + "</td>";
				var colNombre = "<td>" + val.empresa + "</td>";
				var colTelefono = "<td>" + val.telefono + "</td>";
				var colCorreo = "<td>" + val.correo + "</td>";
				var colDireccion = "<td>" + val.direccion + "</td>";
				var colBtnModificar =  '<td><a href="'+ url +'admin/detallesEmpresa/' + val.nit_empresa + '" id="'+ index +'" type="button" class="btn btn-primary btn-editar"><i class="glyphicon glyphicon-pencil"></i></a></td>';
				var colBtnEliminar = '<td><button  onclick="empresa.eliminar()" type="button" class="btn btn-danger btn-eliminar"><i class="glyphicon glyphicon-trash"></i></button></td>';

				var btnAsignar='<td><a id="btnAsignar" href="'+ url +'admin/asignarAprendiz/' + val.nit_empresa + '" class="btn btn-success">Asignar</a></td>';





				
				filas += "<tr>" + colNit + colNombre + colTelefono + colCorreo + colDireccion +colBtnModificar+colBtnEliminar+ btnAsignar+"</tr>";

			});

			$("#tblEmpresa tbody").append(filas);

			console.log(resultado);


		})
		
		.fail(function(error){
			console.log(error);
		})

	}
}