<form class="form-horizontal" id="formCoformador">
  <fieldset>



    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="sltTipodocumento">Tipo de Documento</label>
      <div class="col-md-4">

        <select id="sltTipodocumento" name="sltTipo_documento" class="form-control" required>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtDocumento_cof">Numero de Documento</label>  
      <div class="col-md-4">
        <input id="txtDocumento_cof" name="txtDocumento_cof" type="text" placeholder="" class="form-control input-md" required>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtNombre">Nombres</label>  
      <div class="col-md-4">
        <input id="txtNombre" name="txtNombre" type="text" placeholder="" class="form-control input-md" required>

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtApellido">Apellidos</label>  
      <div class="col-md-4">
        <input id="txtApellido" name="txtApellido" type="text" placeholder="" class="form-control input-md" required>

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
        <input id="txtTelefono" name="txtTelefono" type="text" placeholder="" class="form-control input-md" required>

      </div>
    </div>

     <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="txtNitEmpresa">Nit Empresa</label>  
      <div class="col-md-4">
        <input id="txtNitEmpresa" name="txtNitEmpresa" type="text" placeholder="" class="form-control input-md" required>

      </div>
    </div>





 


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnCambiar"></label>
  <div class="col-md-4">
   <button id="btnGuardarCoformador" type="button" name="btnGuardarCoformador" class="btn btn-success">Guardar</button>
   <button id="btnModificarCoformador" type="button" name="btnModificarCoformador" class="btn btn-success">Modificar</button>
   <button id="btnEliminarCoformador" type="button" name="btnEliminarCoformador" class="btn btn-success">Eliminar</button>
 </div>
</div>



</fieldset>
</form>

<br>
<br>
<br>
<center><h1>COFORMADORES</h1></center>
<br><br>
<table id="tblCoformador" class="table table-hover">
        
        <thead>
          <tr>
            <th>Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
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

<?php 
  
  $js = "";
  $js .= "<script src='".URL."js/scripts/coformador.js'></script>";
  

?>