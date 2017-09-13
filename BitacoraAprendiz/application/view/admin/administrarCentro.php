<form class="form-horizontal" id="formCentro">
<fieldset>





<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtnom_cen">Nombre Centro</label>  
  <div class="col-md-4">
  <input  onkeypress="return soloLetras(event)"  id="txtnom_cen" name="txtnom_cen" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="sltRegional">Regional</label>
      <div class="col-md-4">

        <select id="sltRegional" name="sltRegional" class="form-control" required>
        </select>
      </div>
    </div>


<div class="form-group">
  <label class="col-md-4 control-label" for="btnCambiar"></label>
  <div class="col-md-4">
   <button id="btnGuardarCentro" type="button" name="btnGuardarCentro" class="btn btn-success">Guardar</button>
    <button id="btnCambiarCentro" type="button" name="btnCambiarCentro" class="btn btn-success">Modificar</button>
    <button id="btnEliminarCentro" type="button" name="btnEliminarCentro" class="btn btn-success">Eliminar</button>
  </div>
</div>



</fieldset>
</form>

<table id="tblCentro" class="table table-hover">
  <thead>
    <th>Id Centro</th>
    <th>Centro</th>
    <th>Regional</th>
    <th></th>
    <th></th>
  </thead>

  <tbody></tbody>
</table>

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
<?php 
  
  
  $js = "<script src='".URL."js/scripts/centro.js'></script>";
  

?>