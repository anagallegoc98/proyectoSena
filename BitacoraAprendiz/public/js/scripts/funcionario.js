$(document).ready(function(){
	funcionario.listarAprendiz();
	funcionario.listarFuncionario();
	
	$("#btnGuardarFuncionario").on("click", function(e){

		e.preventDefault();

		funcionario.guardar();


	});

	$("#btnCambiarFuncionario").on("click", function(e){

		e.preventDefault();

		funcionario.modificar();



	});

	$("#btnEliminarFuncionario").on("click", function(e){

		e.preventDefault();

		funcionario.eliminar();



	});

	$("#btnActualizarPerfilFuncionario").on("click", function(e){

		e.preventDefault();

		funcionario.actualizarPerfil();

	});

	$("#btnBuscar").on("click", function(e){

		e.preventDefault();

		funcionario.detallesFuncionario();



	});

	$("#btnEditar").on("click", function(e){

		e.preventDefault();

		alert("HOLA");


	});

});

var funcionario=
{
	guardar: function()
	{
		var documento= $("#txtDocumento_fun").val();
		var nombre= $("#txtNombre").val();
		var apellido= $("#txtApellido").val();
		var correo= $("#txtCorreo").val();
		var telefono= $("#txtTelefono").val();
		var cadena= $("#sltCadena").val();

		$.ajax({
			url: url + "funcionario/guardarFuncionario",
			type: "POST",
			dataType: "json",
			data: { 
				txtDocumento_fun: documento,
				txtNombre: nombre,
				txtApellido: apellido,
				txtCorreo:correo,
				txtTelefono: telefono,
				sltCadena: cadena

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

		var documento= $("#txtDocumento_fun").val();
		var nombre= $("#txtNombre").val();
		var apellido= $("#txtApellido").val();
		var correo= $("#txtCorreo").val();
		var telefono= $("#txtTelefono").val();
		var cadena= $("#sltCadena").val();

		$.ajax({
			url: url + "funcionario/modificarFuncionario",
			type: "POST",
			dataType: "json",
			data: { 
				
				txtDocumento_fun: documento,
				txtNombre: nombre,
				txtApellido: apellido,
				txtCorreo:correo,
				txtTelefono: telefono,
				sltCadena: cadena

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

		var documento= $("#txtDocumento_fun").val();


		$.ajax({
			url: url + "funcionario/eliminarFuncionario",
			type: "POST",
			dataType: "json",
			data: { 

				txtDocumento_fun: documento,


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
			url: url + 'funcionario/listarAprendiz',
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


	
	listarFuncionario: function()
	{
		$.ajax({
			url: url + 'funcionario/listarFuncionario',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){

			
			$("#tblFuncionario tbody").empty();
			var filas = "";

			$.each(resultado, function(index, val) {
				var colDocumento = "<td>" + val.documento + "</td>";
				var colNombre = "<td>" + val.nombres + "</td>";
				var colApellido ="<td>" + val.apellidos + "</td>";
				var colCorreo = "<td>" + val.correo + "</td>";
				var colTelefono = "<td>" + val.telefono + "</td>";
				var colCadena = "<td>" + val.cadena + "</td>";
				var colBtnModificar = '<td><a href="'+ url +'admin/detallesFuncionario/' + val.documento + '"  type="button" name"btnEditar" class="btn btn-primary"><i class="glyphicon-pencil"></i></a></td>';
				var colBtnEliminar = "<td><button type='button' class='btn btn-danger'><i class='glyphicon-remove'></i></button></td>";
				var btnAsignar='<td><a id="btnAsignar" href="'+ url +'admin/asignarFichas/' + val.documento + '" class="btn btn-success">Asignar</a></td>';

				filas += "<tr>" + colDocumento + colNombre + colApellido + colCorreo + colTelefono+colCadena+ colBtnModificar+colBtnEliminar+btnAsignar+"</tr>";

			});

			$("#tblFuncionario tbody").append(filas);

			console.log(resultado);
		})
		
		.fail(function(error){
			console.log(error);
		})

	},
	actualizarPerfil: function()
	{

		
		var formData = new FormData($("#formPerfilFuncionario")[0]);
			$.ajax({
				url: url + "funcionario/actualizarPerfilFuncionario",
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
