<form class="form-horizontal" id="formPerfilFuncionario">
  <fieldset>

<h1><label><?php echo $_SESSION["nombres"]," ", $_SESSION["apellidos"] ;?></label></h1>

<table>
  
  <tbody>
    
    <tr>
      <td><LABEL>documento</LABEL></td>
      <td><input value="<?php echo $_SESSION["documento"]; ?>"  onkeypress="return soloLetras(event)" id="txtDocumento_fun" name="txtNombre" type="text"></td>
    </tr>
    <tr>
      <td><LABEL>Nombres</LABEL></td>
      <td><input value="<?php echo $_SESSION["nombres"]; ?>"  onkeypress="return soloLetras(event)" id="txtNombre" name="txtNombre" type="text" ></td>
    </tr>
    <tr>
      <td><LABEL>Apellidos</LABEL></td>
      <td> <input value="<?php echo $_SESSION["apellidos"]; ?>" onkeypress="return soloLetras(event)" id="txtApellido" name="txtApellido" type="text" >
      </td>
    </tr>
    <tr>
      <td><LABEL>Correo</LABEL></td>
      <td><input value="<?php echo $_SESSION["correo"]; ?>" id="txtCorreo" name="txtCorreo" type="email" ></td>
    </tr> 
    <tr>
      <td><LABEL>Telefono</LABEL></td>
      <td><input value="<?php echo $_SESSION["telefono"]; ?>" id="txtTelefono" name="txtTelefono" type="number" ></td>
    </tr>
    <tr>
      <td><LABEL>Cadena</LABEL></td>
      <td><label><input type="text" value="<?php echo $_SESSION["cadena"]; ?>" disabled="true"></label>

  </tr>

</tbody>
</table>

<br>
 <button id="btnActualizarPerfilFuncionario" type="button" name="btnActualizarPerfilFuncionario" class="btn btn-primary">Actualizar Perfil</button>



</fieldset>
</form>
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