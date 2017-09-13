<form class="form-horizontal" id="formCoformador">
  <fieldset>


<center> <h1><label><?php echo $coformador->Nombres." ".$coformador->Apellidos; ?></label></h1></center> 
   

<table>
  <tbody>

  <tr>
    <td><label>Numero de Documento</label></td>
    <td><input value="<?php echo $documento; ?>"  id="txtDocumento_cof" type="text" disabled><br><br></td>
  </tr>

  <tr>
    <td><label>Nombres</label></td>
    <td><input value="<?php echo $coformador->Nombres; ?>" id="txtNombre" type="text"><br><br></td>
  </tr>
  <tr>
    <td><label>Apellidos</label></td>
    <td><input value="<?php echo $coformador->Apellidos; ?>" id="txtApellido" type="text"><br><br></td>
  </tr>
  <tr>
    <td><label>Correo</label></td>
    <td><input value="<?php echo $coformador->correo; ?>" id="txtCorreo" type="text"><br><br></td>
  </tr>
  <tr>
    <td><label>Telefono</label></td>
    <td><input value="<?php echo $coformador->telefono; ?>" id="txtTelefono" type="text"><br><br></td>
  </tr>
  <tr>
    <td><label>Nit Empresa</label></td>
    <td><input value="<?php echo $coformador->nit_empresa; ?>" id="txtNitEmpresa" type="text"><br><br></td>
  </tr>
  </tbody>
</table>





   <button id="btnModificarCoformador" type="button" name="btnModificarCoformador" class="btn btn-success">Modificar</button>




</fieldset>
</form>
