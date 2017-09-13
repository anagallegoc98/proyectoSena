<h1>Detalles Empresa</h1>


<table class="table"  >

	<label><?php echo $nit_empresa ;?></label>

	<tbody>
		
		

		<tr>

			<td>
				<label>Nit Empresa</label> </td>
				<td>
					<input id="txtNit" type="text" value="<?php echo $empresa->nit_empresa; ?>" name="">
				</td>

			</tr>

			<tr>

				<td>
					<label>Empresa</label> </td>
					<td>
						<input id="txtNombre" type="text" value="<?php echo $empresa->empresa; ?>" name="">
					</td>

				</tr>
				<tr>

					<td><label>Telefono</label></td>
					<td>
						<input id="txtTelefono" type="text" value="<?php echo $empresa->telefono; ?>" name="">
					</td>

				</tr>
				<tr>

					<td>
						<label>Correo</label> </td>
						<td>
							<input id="txtCorreo" type="text" value="<?php echo $empresa->correo; ?>" name=""> 
						</td>
					</tr>
					<tr>

						<td>
							<label>Direccion</label> </td>
							<td>
								<input id="txtDireccion" type="text" value="<?php echo $empresa->direccion; ?>" name=""> 
							</td>

						</tr>


					</tbody>
				</table>

				<button id="btnCambiarEmpresa" type="button" name="btnCambiarEmpresa" class="btn btn-success">Modificar</button>
