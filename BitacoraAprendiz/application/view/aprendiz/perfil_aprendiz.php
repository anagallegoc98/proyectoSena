<label><?php echo  $_SESSION["nombres"] ." ". $_SESSION["apellidos"] ; ?></label>
<form class="form-horizontal" id="formPerfilAprendiz">
  <fieldset>


    <table>
      <tbody>
        <tr>
          <td>
            <label>Documento</label> 
            <td><input id="txtDocumento_apren" name="txtDocumento_apren" onkeypress="return soloLetras(event)" value="<?php echo $_SESSION['documento']; ?>" type="text" ><br></td>
          </td>
        </tr>
        
        <tr>
          <td>
            <label>Nombres</label>
          </td>
          <td>
            <input  value="<?php echo $_SESSION["nombres"]; ?>"  onkeypress="return soloLetras(event)" id="txtNombre" name="txtNombre" type="text">
          </td>

        </tr>
        <tr>
          <td>
            <label>Apellidos</label>
          </td>
          <td>
            <input value="<?php echo $_SESSION["apellidos"]; ?>"  onkeypress="return soloLetras(event)" id="txtApellido" name="txtApellido" type="text">
          </td>

        </tr>
        <tr>
          <td>
            <label>Correo</label>
          </td>
          <td>
            <input value="<?php echo $_SESSION["correo"]; ?>" id="txtCorreo" name="txtCorreo" type="text"></td>
          </tr>
          <tr>
            <td>
              <label>Telefono</label>
            </td>
            <td>
              <input value="<?php echo $_SESSION["telefono"]; ?>" id="txtTelefono" name="txtTelefono"  type="text">
            </td>

          </tr>

          <tr>
            <td>
              <label>Cadena</label>
            </td>
            <td>
            <input value="<?php echo $_SESSION["cadena"]; ?>"  type="text" id="sltCadena" name="sltCadena" disabled>
             
              </td>
            </tr>
            <tr>
              <td>
                <label>Programa</label>
              </td>
              <td>
              <input value="<?php echo $_SESSION["programa"]; ?>"  type="text" id="sltPrograma" name="sltPrograma" disabled>
            
               </td>

              </tr>
              <tr>
                <td>
                  <label>Ficha</label>
                </td>
                <td>
               <input value="<?php echo $_SESSION["numero_ficha"]; ?>"  type="text" id="sltFicha" name="sltFicha" disabled>
            
                </td>

              </tr>
            </tbody>
          </table>

             <button id="btnActualizarPerfil" type="button" name="btnActualizarPerfil" class="btn btn-success">Modificar</button>




       </fieldset>
     </form>




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