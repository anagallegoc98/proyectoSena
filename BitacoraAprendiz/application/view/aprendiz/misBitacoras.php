<h1>
	<center>MIS BITACORAS</center>
</h1>
<?php foreach ($bitacora as $value): ?>


<table>
	<th>
		<td><img style="height: 100px;" src="<?php echo URL; ?>img/bitacora.png"></td>
		<td><a style="font-size: 30px;" href="<?php echo URL .'aprendiz/detallesBitacora/'. $value->id_bitacora  ?>">
		<?php echo "   Bitacora del  ". $value->fecha_bitacora; ?></a></td>
	</th>
</table>


<?php endforeach ?>


