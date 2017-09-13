$(document).ready(function(){
	coformador.listarAprendiz();

	
	$("#btnGuardarCoformador").on("click", function(e){

		e.preventDefault();

		coformador.guardar();



	});

	$("#btnModificarCoformador").on("click", function(e){

		e.preventDefault();

		coformador.modificar();



	});

	$("#btnEliminarCoformador").on("click", function(e){

		e.preventDefault();

		coformador.eliminar();



	});

	$("#btnActualizarPerfilCoformador").on("click", function(e){

		e.preventDefault();

		coformador.actualizarPerfil();

	});

});

var coformador=
{
	guardar: function()
	{
				var documento= $("#txtDocumento_cof").val();
				var nombres= $("#txtNombre").val();
				var apellidos= $("#txtApellido").val();
				var correo= $("#txtCorreo").val();
				var telefono= $("#txtTelefono").val();
				var nit_empresa=$("#txtNitEmpresa").val();				
			
		$.ajax({
			url: url + "coformador/guardarCoformador",
			type: "POST",
			dataType: "json",
			data: { 
				txtDocumento_cof: documento,
					txtNombre: nombres,
					txtApellido: apellidos,
					txtCorreo:correo,
					txtTelefono: telefono,
					txtNitEmpresa:nit_empresa
								
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
				
				var documento= $("#txtDocumento_cof").val();
				var nombres= $("#txtNombre").val();
				var apellidos= $("#txtApellido").val();
				var correo= $("#txtCorreo").val();
				var telefono= $("#txtTelefono").val();
				var nit_empresa=$("#txtNitEmpresa").val();				
			
		$.ajax({
			url: url + "coformador/modificarCoformador",
			type: "POST",
			dataType: "json",
			data: { 
					
					txtDocumento_cof: documento,
					txtNombre: nombres,
					txtApellido: apellidos,
					txtCorreo:correo,
					txtTelefono: telefono,
					txtNitEmpresa:nit_empresa
								
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
				
				var documento= $("#txtDocumento_cof").val();
								
			
		$.ajax({
			url: url + "coformador/eliminarCoformador",
			type: "POST",
			dataType: "json",
			data: { 
					
					txtDocumento_cof: documento,
				
								
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
			url: url + 'coformador/listarAprendiz',
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
				var colBitacoras= '<td><a href="'+ url +'coformador/BitacorasAprendiz/' + val.documento + '"  type="button" name"btnBitacoras" class="btn btn-primary">Ver Bitacoras</i></a></td>';


				filas += "<tr>" + colDocumento + colNombre + colApellido + colCorreo + colTelefono+colBitacoras+ "</tr>";

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
			url: url + 'coformador/listarCoformador',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){

			
			$("#tblCoformador tbody").empty();
			var filas = "";

			$.each(resultado, function(index, val) {

				var colDocumento = "<td>" + val.documento + "</td>";
				var colNombre = "<td>" + val.nombres + "</td>";
				var colApellido ="<td>" + val.apellidos + "</td>";
				var colCorreo = "<td>" + val.correo + "</td>";
				var colTelefono = "<td>" + val.telefono + "</td>";
				var colBtnModificar = "<td><button type='button' class='btn btn-primary'><i class='glyphicon-pencil'></i></button></td>";
				var colBtnEliminar = "<td><button type='button' class='btn btn-danger'><i class='glyphicon-remove'></i></button></td>";


				filas += "<tr>" + colDocumento + colNombre + colApellido + colCorreo + colTelefono+ +colBtnModificar+colBtnEliminar+"</tr>";

			});

			$("#tblCoformador tbody").append(filas);

			console.log(resultado);
		})
		
		.fail(function(error){
			console.log(error);
		})

	},
	actualizarPerfil: function()
	{

		
		var formData = new FormData($("#formPerfilCoformador")[0]);
		$.ajax({
			url: url + "coformador/actualizarPerfilCoformador",
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
