<form class="form-horizontal" id="formFuncionario">
<fieldset>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtDocumento_fun">Numero de Documento</label>  
  <div class="col-md-4">
  <input id="txtDocumento_fun" name="txtDocumento_fun" type="number" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtNombre">Nombres</label>  
  <div class="col-md-4">
  <input  onkeypress="return soloLetras(event)" id="txtNombre" name="txtNombre" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtApellido">Apellidos</label>  
  <div class="col-md-4">
  <input  onkeypress="return soloLetras(event)" id="txtApellido" name="txtApellido" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtCorreo">Correo</label>  
  <div class="col-md-4">
  <input id="txtCorreo" name="txtCorreo" type="email" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtTelefono">Telefono</label>  
  <div class="col-md-4">
  <input id="txtTelefono" name="txtTelefono" type="number" placeholder="" class="form-control input-md">
    
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sltCadena">Cadena</label>  
  <div class="col-md-4">
   <select id="sltCadena" name="sltCadena" class="form-control">
   <option>Seleccionar</option>
       </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" ></label>
  <div class="col-md-4">
   <button id="btnGuardarFuncionario" type="button" name="btnGuardarFuncionario" class="btn btn-success">Guardar</button>
   
    <button id="btnEliminarFuncionario" type="button" name="btnEliminarFuncionario" class="btn btn-success">Eliminar</button>
  </div>
</div>



</fieldset>
</form>
<table id="tblFuncionario" class="table table-hover">
        
        <thead>
          <tr>

            <th>Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Cadena</th>
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