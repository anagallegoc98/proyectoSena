<h1><label class="title">INFORME BITACORA ALTERNATIVA ETAPA PRODUCTIVA</label></h1>

<div id="contenedor">
	<div class="subapartado">
		<div class="titulo">
			<p class="titulo">Estado de Bitacora</p>
		</div>
		<div class="informacion">
			<p class="informacion"><div >
				<br>
				<?php if( $bitacora->revisada == 1 ) { ?> <a>- Bitacora Revisada</a>
				<?php } else { ?>  <a>- Bitacora No Revisada</a> <?php } ?> 
			</div></p>
		</div>
	</div>
</div>

<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		font-family: helvetica;
	}
	div#contenedor{
		width: 250px;
		min-height: 50px;
		background: red;
	}
	div.subapartado{
		width: 250px;
		min-height: 50px;
		background: green;
	}

	div.titulo{
		width: 250px;
		height: 50px; 
		background: #31B404;
		overflow: hidden;
	}
	p.titulo{
		margin: 13px;
		color: white;
	}

	div.informacion{
		width: 250px;
		height: 0px;
		background: #D5F9F1;	
		overflow: hidden;
		transition: height 1.2s;

	}
	p.informacion{
		margin: 20px;
		text-align: center;
		color:#460606;
	}

/*Cuando pase el mouse por subapartado acepte al 
div.informacion*/
div.subapartado:hover div.informacion{
	height: 100px;	

}

</style>




	<table class="table tbl-responsive">

		<tr>
			<td>
				<label>Fecha Bitácora: </label>  

				<label><?php echo $bitacora->fecha_bitacora; ?></label>
			</td>

			<td>
				<label>Reporte:</label>
			</td>
			<td>
				<label for="txtFechaInicio">Desde: </label>
				<input disabled type="date" name="txtFechaInicio" id="txtFechaInicio" value="<?php echo $bitacora->fecha_inicial; ?>" ><br><br>
				<label for="txtFechaFin">Hasta: </label>
				<input disabled type="date" name="txtFechaFin" id="txtFechaFin" value="<?php echo $bitacora->fecha_final; ?>" > 
			</td>
		</tr>
		<tr>
			<td>
				<label>Municipio:</label>
				<label><?php echo $bitacora->municipio; ?></label>
			</select>
		</td>
	</tr>

</table>

<table>

	<th>

		<table id="tbl_Aprendiz" class="table">



			<thead>
				<th>Datos Aprendiz</th>
			</thead>


			<tbody>

				<tr>
					<td>Documento</td>
					<td>
						<label><?php echo $bitacora->documento_apren; ?></label>

					</td>
				</tr>
				<tr>
					<td>Nombre</td>
					<td>
						<label><?php echo $bitacora->nombres; ?></label>
					</td>
				</tr>
				<tr>
					<td>Telefono</td>
					<td>
						<label><?php echo $bitacora->telefono; ?></label>
					</td>
				</tr>
				<tr>
					<td>Correo</td><td><label><?php echo $bitacora->correo; ?></label></td>
				</tr>
				<tr>
					<td>Cadena</td><td>
					<label><?php echo $bitacora->cadena; ?></label>
				</td>
			</tr>
			<tr>
				<td>Programa</td>
				<td>
					<label><?php echo $bitacora->programa; ?></label>
				</td>
			</tr>
			<tr>
				<td>Ficha</td><td>
				<label><?php echo $bitacora->numero_ficha; ?></label>
			</td>
		</tr>

	</tbody>
</table>
</th>

<th>

	<br><br><br>
	<table id="tbl_Empresa" class="table">
		<thead>
			<th>Datos Empresa</th>
		</thead>
		<tbody>
			<tr><td>Nit Empresa</td><td><label><?php echo $bitacora->nit_empresa; ?></label></td></tr>
			<tr>
				<td>Nombre Empresa</td><td> <label><?php echo $bitacora->empresa; ?></label></td>
			</tr>
			<tr>
				<td>Direccion</td><td><label ><?php echo $bitacora->direccion; ?></label></td>
			</tr>
			<tr>
				<td> Documento Coformador</td><td><label><?php echo $bitacora->documento_cof; ?></label></td>
			</tr>
			<tr>
				<td>Nombre</td> <td><label ><?php echo $bitacora->Nombres; ?></label></td> 
			</tr>
			<tr>
				<td>E-mail</td><td><label> <?php echo $bitacora->correo_cof ?></label></td>
			</tr>
			<tr>
				<td>Telefono</td><td><label> <?php echo $bitacora->telefono_cof ?></label></td>
			</tr>
			<tr>
				<td>Alternativa de Practica<br>desarrollada</td><td>
				<label><?php echo $bitacora->alternativa; ?></label>
			</td>
		</tr>

	</tbody>
</table>
</th>

</table>
<br>
<br>
<br>
<br>
<br>
<table  class="table" >
	<thead>
		<th>Actividades Realizadas En La<br> Empresa</th>
		<th>¿Están relacionadas con <br>el programa de formación?</th>
		<th>Principales <br> Dificultades</th>
		<th>Principales<br> Aprendizajes</th>
	</thead>
	<tbody>
		<tr>
			<td>
				<label >
					<?php 
					echo $bitacora->actividad;
					?>
				</label>
			</td>
			<td>

				<input disabled="true" type="radio" name="rdbRelacion" value="1" <?php if( $bitacora->relacionadaConPrograma == 1 ) { ?>checked="checked"<?php } ?> >SI   

				<input disabled="true" type="radio" name="rdbRelacion" value="0" <?php if( $bitacora->relacionadaConPrograma ==  0) { ?>checked="checked"<?php } ?>>NO
			</td>
			<td>
				<label disabled="true"  id="txtDificultades"><?php echo $bitacora->dificultades; ?></label>

			</td>
			<td>
				<label disabled="true" id="txtAprendizajes"><?php echo $bitacora->aprendizajes; ?></label>



			</td>
		</tr>


	</tbody>
</table>


<br>
<br>
<br>
<div class="observaciones" id="observaciones">
	<table class="table table-inverse">
		<thead>
			<th >
				<a style="text-decoration: none;color: grey;">Observaciones:</a >
				</th>
			</thead>
			<tdody>
				<?php foreach ($observaciones as $value):?>
					<tr>

						<td>
						<ul>
							<li><label>
								<?php echo $value->observacion; ?>
							</label>
							<br></li>
						</ul>
							
							
						</td>
					<?php endforeach ?>
				</tr>
			</tdody>
		</table> 

		
	</div>
<form id="formRevisarBitacora">

	<input type="hidden" id="txtId_Bitacora" name="txtId_Bitacora" value="<?php echo $id_bitacora ?>"></input>


	<br><br>
	<button id="btnRevisarBitacora" name="btnRevisarBitacora" class="btn btn-success" type="button">Marcar Como Revisada</button>
	<a style="text-decoration: none; color: white;" href="<?php echo URL; ?>funcionario/bitacorasAprendiz/<?php echo $bitacora->documento_apren;?>"><button  class="btn btn-danger" type="button">Volver</button></a>



</form>