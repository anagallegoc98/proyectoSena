<form class="form-horizontal" id="formRegional">
<fieldset>



<!-- Select Basic -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcod_reg">Codigo de Regional</label>  
  <div class="col-md-4">
  <input id="txtcod_reg" name="txtcod_reg" type="number" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtnom_reg">Nombre Regional</label>  
  <div class="col-md-4">
  <input  onkeypress="return soloLetras(event)" id="txtnom_reg" name="txtnom_reg" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sltId_zona">Zona</label>
  <div class="col-md-4">
  
    <select id="sltId_zona" name="sltId_zona" class="form-control">
   <option>Seleccionar</option>
       </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="btnCambiar"></label>
  <div class="col-md-4">
   <button id="btnGuardarRegional" type="button" name="btnGuardarRegional" class="btn btn-success">Guardar</button>
    <button id="btnCambiarRegional" type="button" name="btnCambiarRegional" class="btn btn-success">Modificar</button>
    <button id="btnEliminarRegional" type="button" name="btnEliminarRegional" class="btn btn-success">Eliminar</button>
  </div>
</div>



</fieldset>
</form>

<table id="tblRegional" class="table table-hover">
  <thead>
    <th>Id Regional</th>
    <th>Regional</th>
    <th>Zona</th>
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
  
  
  $js = "<script src='".URL."js/scripts/regional.js'></script>";
  

?>