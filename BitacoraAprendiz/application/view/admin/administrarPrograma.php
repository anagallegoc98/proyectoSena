<form class="form-horizontal" id="formPrograma">
<fieldset>



<!-- Select Basic -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcod_pro">Codigo de Programa</label>  
  <div class="col-md-4">
  <input id="txtcod_pro" name="txtcod_pro" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtnom_pro">Nombre Programa</label>  
  <div class="col-md-4">
  <input  onkeypress="return soloLetras(event)" id="txtnom_pro" name="txtnom_pro" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sltCadena">Cadena</label>  
  <div class="col-md-4">
  <select id="sltCadena" name="sltCadena" class="form-control">
   <option>Seleccionar</option>
       </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="btnCambiar"></label>
  <div class="col-md-4">
   <button id="btnGuardarPrograma" type="button" name="btnGuardarPrograma" class="btn btn-success">Guardar</button>
    <button id="btnCambiarPrograma" type="button" name="btnCambiarPrograma" class="btn btn-success">Modificar</button>
    <button id="btnEliminarPrograma" type="button" name="btnEliminarPrograma" class="btn btn-success">Eliminar</button>
  </div>
</div>


</fieldset>
</form>



  <table id="tblPrograma" class="table table-hover">
    <thead>
    <tr>
      <th>Codigo</th>
      <th>Programa</th>
      <th>Cadena</th>
      <th></th>
      <th></th>
      </tr>
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
  
  
  $js = "<script src='".URL."js/scripts/programa.js'></script>";
  

?>