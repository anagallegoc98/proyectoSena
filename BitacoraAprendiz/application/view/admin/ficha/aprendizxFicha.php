<h1>Aprendizxficha</h1>


<table class="table"  id="tblAprendizxFicha">

	<label id="lblFicha"><?php echo $numero_ficha;?></label>
	<thead>
		<tr>
			<th>Documento</th>
			<th>Nombre</th>
			<th>Apellido</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($aprendices as $value): ?>
			
			<tr>
				<td><?php echo $value->documento; ?></td>
				<td><?php echo $value->nombres; ?></td>
				<td><?php echo $value->apellidos; ?></td>
			</tr>

		<?php endforeach ?>
	</tbody>
</table>