<label><?php echo $aprendiz->nombres." ".$aprendiz->apellidos ;?></label>
<form class="form-horizontal" id="formAprendiz">
  <fieldset>


    <table>
      <tbody>
        <tr>
          <td>
            <label>Documento</label>
            <td><input id="txtDocumento_apren" onkeypress="return soloLetras(event)" value="<?php echo $aprendiz->documento; ?>" type="text"></td>
          </td>
        </tr>
        <tr>
          <td>
            <label>Nombres</label>
          </td>
          <td>
            <input  value="<?php echo $aprendiz->nombres; ?>"  onkeypress="return soloLetras(event)" id="txtNombre" type="text">
          </td>

        </tr>
        <tr>
          <td>
            <label>Apellidos</label>
          </td>
          <td>
            <input value="<?php echo $aprendiz->apellidos; ?>"  onkeypress="return soloLetras(event)" id="txtApellido" type="text">
          </td>

        </tr>
        <tr>
          <td>
            <label>Correo</label>
          </td>
          <td>
            <input value="<?php echo $aprendiz->correo; ?>" id="txtCorreo" name="txtCorreo type="text"></td>
          </tr>
          <tr>
            <td>
              <label>Telefono</label>
            </td>
            <td>
              <input value="<?php echo $aprendiz->telefono; ?>" id="txtTelefono" name="txtTelefono"  type="text">
            </td>

          </tr>

          <tr>
            <td>
              <label>Cadena</label>
            </td>
            <td>
              <select id="sltCadena" name="sltCadena"></select>
              </td>
            </tr>
            <tr>
              <td>
                <label>Programa</label>
              </td>
              <td>
                <select id="sltPrograma" name="sltPrograma"></select></td>

              </td>

              </tr>
              <tr>
                <td>
                  <label>Ficha</label>
                </td>
                <td>
                  <select id="sltFicha" name="sltFicha"></select>
                </td>

              </tr>
            </tbody>
          </table>

             <button id="btnModificarAprendiz" type="button" name="btnModificarAprendiz" class="btn btn-success">Modificar</button>




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