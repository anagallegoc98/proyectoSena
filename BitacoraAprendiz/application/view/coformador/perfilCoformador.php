<form class="form-horizontal" id="formPerfilCoformador" name="formPerfilCoformador">
  <fieldset>


    <center> <h1><label>ACTUALIZAR DATOS</label></h1></center> 
    

    <table>
      <tbody>

        <tr>
          <td><label>Documento</label></td>
          <td><input value="<?php echo $_SESSION["documento"]; ?>"  id="txtDocumento_cof" name="txtDocumento_cof" type="text"><br><br></td>
        </tr>

        <tr>
          <td><label>Nombres</label></td>
          <td><input value="<?php echo $_SESSION["nombres"]; ?>" id="txtNombre" name="txtNombre" type="text"><br><br></td>
        </tr>
        <tr>
          <td><label>Apellidos</label></td>
          <td><input value="<?php echo $_SESSION["apellidos"]; ?>" id="txtApellido" name="txtApellido" type="text"><br><br></td>
        </tr>
        <tr>
          <td><label>Correo</label></td>
          <td><input value="<?php echo $_SESSION["correo"]; ?>" id="txtCorreo" name="txtCorreo" type="text"><br><br></td>
        </tr>
        <tr>
          <td><label>Telefono</label></td>
          <td><input value="<?php echo $_SESSION["telefono"]; ?>" id="txtTelefono" name="txtTelefono" type="text"><br><br></td>
        </tr>
        <tr>
          <td><label>Empresa</label></td>
          <td><input value="<?php echo $_SESSION["empresa"]; ?>" id="txtNitEmpresa" name="txtNitEmpresa" type="text"><br><br></td>
        </tr>
      </tbody>
    </table>

    <button id="btnActualizarPerfilCoformador" type="button" name="btnActualizarPerfilCoformador" class="btn btn-primary">Actualizar Perfil</button>





  </fieldset>
</form>
