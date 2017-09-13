<h1>fichasxPrograma</h1>


<table class="table"  id="tblfichasxPrograma">

	<label id="lblFicha"><?php echo $id_programa;?></label>
	<thead>
		<tr>
			<th>Numero Ficha</th>
		
		</tr>
	</thead>
	<tbody>
		<?php foreach ($fichas as $value): ?>
			
			<tr>
				<td><?php echo $value->numero_ficha; ?></td>
			

		<?php endforeach ?>
	</tbody>
</table>