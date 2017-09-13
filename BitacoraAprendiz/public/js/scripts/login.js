$(document).ready(function(){
	login.listar_roles();
	login.init();
});


var login ={
	listar_roles: function()
	{
		$.ajax({
			url: url + 'login/listar_roles',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){
			var select="";
			$.each(resultado, function(index, val){
				select += "<option value="+ val.id_rol +">"+ val.nombrerol +"</option>"


			});
			$("#sltrol").append(select);
			console.log(resultado);
		})
		
		.fail(function(error){
			console.log(error);
		})

	},

	init: function(){

		$("#formlogin").on('submit', function(event){
			event.preventDefault();
			
			login.validarAprendiz();
			
			login.validarFuncionario();
			
			login.validarEmpresa();
			
			login.validarCoformador();
			
			

		});
	},

	validarAprendiz: function(){
		$.ajax({
			url: url + 'login/validarAprendiz',
			type: 'POST',
			dataType: 'json',
			data: {
				documento:$('#txtdocumento').val(),
				contrasena:$('#txtcontrasena').val(),
				rol: $("#sltrol").val()
			}
		})
		.done(function(resultado){
			if(resultado.usuarioValido==true)
			{
				window.location = url + "aprendiz/index";


			}else{
			//	alert(resultado.mensaje);
		}
	})
		.fail(function(error){
			console.log(error);

		});
	},
	validarFuncionario: function(){
		$.ajax({
			url: url + 'login/validarFuncionario',
			type: 'POST',
			dataType: 'json',
			data: {
				documento:$('#txtdocumento').val(),
				contrasena:$('#txtcontrasena').val(),
				rol: $("#sltrol").val()
			}
		})
		.done(function(resultado){
			if(resultado.usuarioValido==true)
			{
				window.location = url + "funcionario/index";


			}else{
				//alert(resultado.mensaje);
			}
			
		})
		.fail(function(error){
			console.log(error);

		});
	},
	validarCoformador: function(){
		$.ajax({
			url: url + 'login/validarCoformador',
			type: 'POST',
			dataType: 'json',
			data: {
				documento:$('#txtdocumento').val(),
				contrasena:$('#txtcontrasena').val(),
				rol: $("#sltrol").val()
			}
		})
		.done(function(resultado){
			if(resultado.usuarioValido==true)
			{
				window.location = url + "coformador/index";


			}else{
			//	alert(resultado.mensaje);
		}
	})
		.fail(function(error){
			console.log(error);

		});
	},
	validarEmpresa: function(){
		$.ajax({
			url: url + 'login/validarEmpresa',
			type: 'POST',
			dataType: 'json',
			data: {
				documento:$('#txtdocumento').val(),
				contrasena:$('#txtcontrasena').val(),
				rol: $("#sltrol").val()
			}
		})
		.done(function(resultado){
			if(resultado.usuarioValido==true)
			{
				window.location = url + "empresa/index";


			}else{
				//alert(resultado.mensaje);
			}
		})
		.fail(function(error){
			console.log(error);

		});
	}


}
