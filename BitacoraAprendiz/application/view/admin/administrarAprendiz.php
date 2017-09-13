<form class="form-horizontal" id="formAprendiz">
  <fieldset>



    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtDocumento_apren">Numero de Documento</label>  
      <div class="col-md-4">
        <input id="txtDocumento_apren" name="txtDocumento_apren" type="number" placeholder="" class="form-control input-md" required>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtNombre">Nombres</label>  
      <div class="col-md-4">
        <input  onkeypress="return soloLetras(event)" id="txtNombre" name="txtNombre" type="text" placeholder="" class="form-control input-md" required>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtApellido">Apellidos</label>  
      <div class="col-md-4">
        <input  onkeypress="return soloLetras(event)" id="txtApellido" name="txtApellido" type="text" placeholder="" class="form-control input-md" required>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtCorreo">Correo</label>  
      <div class="col-md-4">
        <input id="txtCorreo" name="txtCorreo" type="email" placeholder="" class="form-control input-md" required >

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtTelefono">Telefono</label>  
      <div class="col-md-4">
        <input id="txtTelefono" name="txtTelefono" type="number" placeholder="" class="form-control input-md" required>

      </div>
    </div>

<!-- Text input-->
 <div class="form-group">
  <label class="col-md-4 control-label" for="sltCadena">Cadena</label>  
  <div class="col-md-4">
   <select id="sltCadena" name="sltCadena" class="form-control" required>
     <option>Seleccionar</option>
   </select>


 </div>
</div>

      <!-- Text input-->
   <div class="form-group">
    <label class="col-md-4 control-label" for="sltPrograma">Programa</label>  
    <div class="col-md-4">
      <select id="sltPrograma" name="sltPrograma" class="form-control" required>
       <option>Seleccionar</option>
     </select> 
   </div>
 </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="sltFicha">Ficha</label>  
      <div class="col-md-4">
        <select id="sltFicha" name="sltFicha" class="form-control" required>
         <option>Seleccionar</option>
       </select>
     </div>
   </div>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnCambiar"></label>
  <div class="col-md-4">
   <button id="btnGuardarAprendiz" type="button" name="btnGuardarAprendiz" class="btn btn-success">Guardar</button>
   <button id="btnEliminarAprendiz" type="button" name="btnEliminarAprendiz" class="btn btn-success">Eliminar</button>
 </div>
</div>



</fieldset>
</form>
<div id="columna"> 
<table id="tblAprendices"  class="table table-responsive">
        
        <thead>
          <tr>
            <th>Documento</th>
            <th colspan="2">Nombre</th>
             <th>Correo</th>
            <th>Telefono</th>
            <th>Docente</th>
            <th>Empresa</th>
            <th>Estado</th>
            <th>Alternativa Practica</th>
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
</div>

<style type="text/css">
#columna{
overflow: auto;
width: 1000px;
 /*establece la altura máxima, lo que no entre quedará por debajo y saldra la barra de scroll*/
}
</style>
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