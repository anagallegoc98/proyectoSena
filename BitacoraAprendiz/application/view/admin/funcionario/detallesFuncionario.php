

<h1><label><?php echo $funcionario->nombres." ".$funcionario->apellidos; ;?></label></h1>

<table class="table tbl">
	
	<tbody>
		
		<tr>
			<td><LABEL>Documento</LABEL></td>
			<td><input value="<?php echo $funcionario->documento; ?>"  onkeypress="return soloLetras(event)" id="txtDocumento_fun" name="txtNombre" type="text" placeholder="" class="form-control input-md"></td>
		</tr>
		<tr>
			<td><LABEL>Nombres</LABEL></td>
			<td><input value="<?php echo $funcionario->nombres; ?>"  onkeypress="return soloLetras(event)" id="txtNombre" name="txtNombre" type="text" placeholder="" class="form-control input-md"></td>
		</tr>
		<tr>
			<td><LABEL>Apellidos</LABEL></td>
			<td> <input value="<?php echo $funcionario->apellidos; ?>" onkeypress="return soloLetras(event)" id="txtApellido" name="txtApellido" type="text" placeholder="" class="form-control input-md">
			</td>
		</tr>
		<tr>
			<td><LABEL>Correo</LABEL></td>
			<td><input value="<?php echo $funcionario->correo; ?>" id="txtCorreo" name="txtCorreo" type="email" placeholder="" class="form-control input-md"></td>
		</tr>	
		<tr>
			<td><LABEL>Telefono</LABEL></td>
			<td><input value="<?php echo $funcionario->telefono; ?>" id="txtTelefono" name="txtTelefono" type="number" placeholder="" class="form-control input-md"></td>
		</tr>
		<tr>
			<td><LABEL>Cadena</LABEL></td>
			<td><select  id="sltCadena" name="sltCadena" class="form-control">
				<option value="<?php $funcionario->id_cadena ?>"><?php echo $funcionario->id_cadena; ?></option>
			</select>
		</td>

	</tr>

</tbody>
</table>


<button id="btnCambiarFuncionario" type="button" name="btnCambiarFuncionario" class="btn btn-success">Modificar</button>
<script>
	function soloLetras(e){
		key = e.keyCode || e.which;
		tecla = String.fromCharCode(key).toLowerCase();
		letras = " áéíóúabcdefghijklmnñopqrstuvwxyz_/";
		especiales = "8-37-39-46";

		tecla_especial = false
		for(var i in especiales){
			if(key == especiales[i]){
				tecla_especial = true;
				break;
			}
		}

		if(letras.indexOf(tecla)==-1 && !tecla_especial){
			return false;
		}
	}
</script>