
<h1><label class="title">INFORME BITACORA ALTERNATIVA ETAPA PRODUCTIVA</label></h1>

<form id="formBitacora">
	<table class="table tbl-responsive">
		<tr>
			<td>
				<label>Fecha Actual: </label>  
				<input type="date" name="txtFechaActual" id="txtFechaActual" step="1" min="2017-05-01"  value="<?php echo date("Y-m-d");?>">

				 
			</td>

			<td>
				<label>Reporte:</label>
			</td>
			<td>
				<label for="txtFechaInicio">Desde: </label>
				<input type="date" name="txtFechaInicio" id="txtFechaInicio" ><br><br>
				<label for="txtFechaFin">Hasta: </label>
				<input type="date" name="txtFechaFin" id="txtFechaFin" > 
			</td>
		</tr>
		<tr>
			<td>
				<label>Cuidad:</label>
				<select id="sltCiudad" name="sltCiudad" required>
					<option>Seleccionar</option>
				</select>
			</td>
		</tr>
		
	</table>

	<table >
		<th>
			<table id="tbl_Aprendiz" class="table" >



				<thead>
					<th>Aprendiz</th>
				</thead>


				<tbody>

					<tr>
						<td>Documento</td>
						<td>
							<input type="text" id="txtDocumento_apren" name="txtDocumento_apren" value="<?php echo $_SESSION["documento"]; ?>" >
						</td>
					</tr>
					<tr>
						<td>Nombre</td>
						<td>
							<?php echo $_SESSION["nombres"]," ",$_SESSION["apellidos"]; ?>
						</tr>
						<tr>
							<td>Telefono</td>
							<td>
								<?php echo $_SESSION["telefono"]; ?>
							</td>
						</tr>
						<tr>
							<td>Correo</td><td><?php echo $_SESSION["correo"]; ?></td>
						</tr>
						<tr>
							<td>Cadena</td><td><?php echo $_SESSION["cadena"]; ?></td>
						</tr>
						<tr>
							<td>Programa</td><td><?php echo $_SESSION["programa"]; ?></td>
						</tr>
						<tr>
							<td>Ficha</td><td><?php echo $_SESSION["numero_ficha"]; ?></td>
						</tr>

					</tbody>
				</table>
			</th>

			<th>

				<br><br><br>
				<table id="tbl_Empresa" class="table">
					<thead>
						<th>Empresa</th>
					</thead>
					<tbody>
						<tr><td>Nit Empresa</td><td> <input id="txtNit" name="txtNit" value="<?php echo $_SESSION["nit_empresa"]; ?>" ></td></tr>
						<tr>
							<td>Nombre Empresa</td><td><label><?php echo $_SESSION["empresa"]; ?></label></td></td>
						</tr>
						<tr>
							<td>Direccion</td><td><label><?php echo $_SESSION["direccion"];?></td></label>
						</tr>
						<tr>
							<td>Coformador</td><td><?php echo $_SESSION["Nombres"]; ?></td>
						</tr>
						<tr>
							<td>Documento</td><td><input type="text" name="txtDocumento_cof" id="txtDocumento_cof" value="<?php echo $_SESSION["documento_cof"]; ?>"></td>
						</tr>
						<tr>
							<td>E-mail</td><td><?php echo $_SESSION["correo_c"] ?></td>	
						</tr>
						<tr>
							<td>Telefono</td><td><label><?php echo $_SESSION["telefono_e"];?></td></label>
						</tr>
						<tr>
							<td>Alternativa de Practica<br>desarrollada</td><td>
							<select id="sltAlternativa" name="sltAlternativa"></select>
						</td>
					</tr>

				</tbody>
			</table>
		</th>

	</table>

</table>


<table  class="table tableActividades">
	<thead>
		<th>Actividades Realizadas En La<br> Empresa</th>
		<th>¿Están relacionadas con <br>el programa de formación?</th>
		<th>Principales <br> Dificultades</th>
		<th>Principales<br> Aprendizajes</th>
	</thead>
	<tbody>
		<tr>
			<td>
				<textarea id="txtActividades" name="txtActividades"></textarea>

			</td>
			<td>

				<input type="radio" id="rdbRelacion" name="rdbRelacion" value="1">SI 

				<input type="radio" id="rdbRelacion" name="rdbRelacion" value="0">NO

			</td>
			<td>
				<textarea name="txtDificultades" id="txtDificultades"></textarea>

			</td>
			<td>
				<textarea name="txtAprendizajes" id="txtAprendizajes"></textarea>

			</td>
		</tr>


	</tbody>
</table>


<button id="btnCrearBitacora" class="btn" type="submit">Guardar Bitácora</button>



</form>