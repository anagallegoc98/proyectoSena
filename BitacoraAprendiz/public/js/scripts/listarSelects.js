$(document).ready(function(){

	selects.listarAlternativa();
	selects.listarCiudad();
	selects.listarCadena();
	selects.listarPrograma();
	selects.listarFicha();

});

var selects=
{
		listarCiudad: function()
	{
		$.ajax({
			url: url + 'selects/listarCiudad',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){
			var select="";
			$.each(resultado, function(index, val){

				select += "<option value="+ val.id_municipio +">"+ val.municipio +"</option>";


			});
			$("#sltCiudad").append(select);
			

			
		})
		
		.fail(function(error){
			console.log(error);
		})
	},
	listarAlternativa: function()
	{
		$.ajax({
			url: url + 'selects/listarAlternativa',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){
			var select="";
			$.each(resultado, function(index, val){

				select += "<option value="+ val.id_Alternativa +">"+ val.alternativa +"</option>";


			});
			$("#sltAlternativa").append(select);
			

			
		})
		
		.fail(function(error){
			console.log(error);
		})
	},
	listarPrograma: function()
	{
		$.ajax({
			url: url + 'aprendiz/listarPrograma',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){
			var select="";
			$.each(resultado, function(index, val){
				select += "<option value="+ val.id_programa +">"+ val.nombre +"</option>"


			});
			$("#sltPrograma").append(select);
			console.log(resultado);

			
		})
		
		.fail(function(error){
			console.log(error);
		})

	},
	listarCadena: function()
	{
		$.ajax({
			url: url + 'selects/listarCadena',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){
			var select="";
			$.each(resultado, function(index, val){
				select += "<option value="+ val.id_cadena +">"+ val.cadena +"</option>"


			});
			$("#sltCadena").append(select);
			console.log(resultado);

			
		})
		
		.fail(function(error){
			console.log(error);
		})

	},

	listarFicha: function()
	{
		$.ajax({
			url: url + 'selects/listarFicha',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){
			var select="";
			$.each(resultado, function(index, val){
				select += "<option value="+ val.numero_ficha +">"+ val.numero_ficha +"</option>"


			});
			$("#sltFicha").append(select);
			console.log(resultado);

			
		})
		
		.fail(function(error){
			console.log(error);
		})

	},
		listarPrograma: function()
	{
		$.ajax({
			url: url + 'selects/listarPrograma',
			type: 'GET',
			dataType: 'json',
			
		})
		.done(function(resultado){
			var select="";
			$.each(resultado, function(index, val){
				select += "<option value="+ val.id_programa +">"+ val.nombre +"</option>"


			});
			$("#sltPrograma").append(select);
			console.log(resultado);

			
		})
		
		.fail(function(error){
			console.log(error);
		})

	}
}