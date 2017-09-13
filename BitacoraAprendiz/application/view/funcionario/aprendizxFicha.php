<h1>Aprendices ficha <?php echo  $numero_ficha; ?></h1>


<table class="table"  id="tblAprendizxFicha">

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
				<td><a href="<?php echo URL; ?>funcionario/bitacorasAprendiz/<?php echo $value->documento; ?>"   type="button" class="btn btn-primary">Ver Bitacoras</i></a></td>
			</tr>

		<?php endforeach ?>
	</tbody>
</table>