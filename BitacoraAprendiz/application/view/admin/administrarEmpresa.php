
<form id="formEmpresa" class="form-horizontal">
  <fieldset>

    <!-- Form Name -->
    <legend>Administrar Empresas</legend>



  
  
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtNit" >Nit</label>  
      <div class="col-md-4">
      <input id="txtNit" name="txtNit"  type="number" placeholder="" class="form-control input-md" required="" >

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtNombre">Nombre</label>  
      <div class="col-md-4">
        <input id="txtNombre" name="txtNombre" type="text" placeholder="" class="form-control input-md" required="" onkeypress="return soloLetras(event)">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtTelefono">Telefono</label>  
      <div class="col-md-4">
        <input id="txtTelefono" name="txtTelefono" type="text" placeholder="" class="form-control input-md" required="" >

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtCorreo">Correo Electronico</label>  
      <div class="col-md-4">
        <input id="txtCorreo" name="txtCorreo" type="email" placeholder="" class="form-control input-md" required="" >

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtDireccion">Dirección</label>  
      <div class="col-md-4">
        <input id="txtDireccion" name="txtDireccion" type="text" placeholder="" class="form-control input-md" required="">

      </div>
    </div>


    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="btnGuardar"></label>
      <div class="col-md-4">
        <button id="btnGuardarEmpresa" type="submit" name="btnGuardarEmpresa" class="btn btn-success">Guardar</button>
        <button id="btnEliminarEmpresa" type="button" name="btnEliminarEmpresa" class="btn btn-success">Eliminar</button>
                <button id="btnCambiarEmpresa" type="button" name="btnCambiarEmpresa" class="btn btn-success">Modificar</button>


      </div>
    </div>

  </fieldset>
</form>


<table id="tblEmpresa" class="table table-hover table-bordered">

  <thead>
    <tr class="active">
      <th>Nit</th>
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Correo Electronico</th>
      <th>Direccion</th>
      <th></th>
      <th></th>
      <th></th>



    </tr>
  </thead>
  <tbody>

  </tbody>

</table>

</div>
</div>
</div>

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

<script src="js/alertify.min.js"></script>