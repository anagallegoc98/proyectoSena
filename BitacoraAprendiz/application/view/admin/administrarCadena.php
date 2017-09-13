<form class="form-horizontal" id="formCadena">
<fieldset>



<!-- Select Basic -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcod_cad">Codigo de Cadena</label>  
  <div class="col-md-4">
  <input id="txtcod_cad" name="txtcod_cad" type="number" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtnom_cad">Nombre Cadena</label>  
  <div class="col-md-4">
  <input  onkeypress="return soloLetras(event)" id="txtnom_cad" name="txtnom_cad" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sltCentro">Centro</label>  
  <div class="col-md-4">
  <select id="sltCentro" name="sltCentro" class="form-control">
   <option>Seleccionar</option>
       </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="btnCambiar"></label>
  <div class="col-md-4">
   <button id="btnGuardarCadena" type="button" name="btnGuardarCadena" class="btn btn-success">Guardar</button>
    <button id="btnCambiarCadena" type="button" name="btnCambiarCadena" class="btn btn-success">Modificar</button>
    <button id="btnEliminarCadena" type="button" name="btnEliminarCadena" class="btn btn-success">Eliminar</button>
  </div>
</div>


</fieldset>
</form>

<table id="tblCadena" class="table table-hover">
  <thead>
    <th>Id Cadena</th>
    <th>Cadena</th>
    <th>Centro</th>
    <th></th>
    <th></th>
  </thead>
  <tbody>
    
  </tbody>
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
  
  
  $js = "<script src='".URL."js/scripts/cadena.js'></script>";
  

?>