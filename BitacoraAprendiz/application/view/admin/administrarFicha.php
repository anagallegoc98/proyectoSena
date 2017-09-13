<form class="form-horizontal" id="formFicha">
<fieldset>



<!-- Select Basic -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtnum_fic">Numero de Ficha</label>
  <div class="col-md-4">
  <input id="txtnum_fic" name="txtnum_fic" type="number" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sltPrograma">Programa</label>  
  <div class="col-md-4">
  <select id="sltPrograma" name="sltPrograma" class="form-control">
   <option>Seleccionar</option>
       </select> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="btnCambiar"></label>
  <div class="col-md-4">
  <button id="btnGuardarFicha" type="submit" name="btnGuardarFicha" class="btn btn-success">Guardar</button>
    <button id="btnCambiarFicha" type="submit" name="btnCambiarFicha" class="btn btn-success">Modificar</button>
    <button id="btnEliminarFicha" type="submit" name="btnEliminarFicha" class="btn btn-success">Eliminar</button>
  </div>
</div>



</fieldset>
</form>

 <table id="tblFichas" class="table table-hover" >
        
        <thead>
          <tr>
            <th>Programa</th>
            <th>Ficha</th>
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

<?php 
  
  
  $js = "<script src='".URL."js/scripts/ficha.js'></script>";
  

?>