<h1><label class="title">INFORME BITACORA ALTERNATIVA ETAPA PRODUCTIVA</label></h1>

<div id="contenedor">
		<div class="subapartado">
			<div class="titulo">
				<p class="titulo">Estado de Mi Bitacora</p>
			</div>
		    <div class="informacion">
		    	<p class="informacion"><div >
 <?php if( $bitacora->aprobada == 1 ) { ?> <label>- Bitacora Aprobada</label>
 <?php } else { ?>  <label>- Bitacora No Aprobada</label> <?php } ?>

 <br>
<?php if( $bitacora->revisada == 1 ) { ?> <label>- Bitacora Revisada</label>
 <?php } else { ?>  <label>- Bitacora No Revisada</label> <?php } ?> 
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
			<label>Fecha Bitacora: </label>  

			<label><?php echo $bitacora->fecha_bitacora; ?></label>
		</td>

		<td>
			<label>Reporte:</label>
		</td>
		<td>
			<label for="txtFechaInicio">Desde: </label>
			<label><?php echo $bitacora->fecha_inicial; ?></label><br><br>
			<label for="txtFechaFin">Hasta: </label>
			<label><?php echo $bitacora->fecha_final; ?> </label>
		</td>
	</tr>
	<tr>
		<td>
			<label>Municipio:</label>
			<label><?php echo $bitacora->municipio; ?></label>
		
	</td>
</tr>

</table>



<table>

	<th>

		<table id="tbl_Aprendiz" class="table">



			<thead>
				<th>Aprendiz</th>
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
			<th>Empresa</th>
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

<table  class="table tableActividades">
	<thead>
		<th>Actividades Realizadas En La<br> Empresa</th>
		<th>¿Están relacionadas con <br>el programa de formación?</th>
		<th>Principales <br> Dificultades</th>
		<th>Principales<br> Aprendizajes</th>
	</thead>
	<tbody><?php foreach ($actividades as  $value): ?>
		<tr>
			<td>

				

				<label >
					<?php 
					echo $value->actividad;
					?>
				</label>
			</td>
			
			<td>

				<input type="radio" <?php if( $value->relacionadaConPrograma == 1 ) { ?> checked="checked" <?php } ?>> SI   

				<input type="radio"  <?php if( $value->relacionadaConPrograma ==  0) { ?> checked="checked" <?php } ?>> NO
			</td>
			<td>
				<label><?php echo $value->dificultades; ?></label>

			</td>
			<td>
				<label ><?php echo $value->aprendizajes; ?></label>



			</td>

			
		<?php endforeach ?>
		<td>
			
		<tr><td colspan="3"><center><h3>Nueva Actividad:</h3></td></center></tr>
			<tr>
				<form id="formActividades">
					<input name="txtId_Bitacora" id="txtId_Bitacora" value="<?php echo $id_bitacora; ?>" type="hidden" >

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
			</td>
		</tr>


	</tbody>
</table>


<div class="observaciones" id="observaciones" style="margin: 0px; width: 880px; height: 104px;">
	<label>Observaciones:</label>

</div>
<br><br>
<center>
	<button id="btnCrearActividad" class="btn btn-primary" type="submit">Actualizar Bitácora</button>
	<button id="btnVolverdeBitacora" class="btn " type="submit" >Volver</button>

</center>


</form>