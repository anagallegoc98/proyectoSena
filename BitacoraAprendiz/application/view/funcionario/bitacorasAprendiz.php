
<h1>Aprendiz <?php echo $bitacora[0]->nombres." ".$bitacora[0]->apellidos; ?></h1>

       
<?php foreach ($bitacora as $value): ?>


<table>
	<th>
		<td><img style="height: 100px;" src="<?php echo URL; ?>img/bitacora.png"></td>
		<td><a style="text-decoration: none; font-size: 30px;color:black; " href="<?php echo URL .'funcionario/detallesBitacora/'. $value->id_bitacora  ?>">
		<?php echo "   Bitacora del  ". $value->fecha_bitacora; ?></a><?php if( $value->revisada == 1 ) { ?> <a style="text-decoration: none; font-size: 20px; color:green;" >- Bitacora Revisada</a>
 <?php } else { ?> <a style="text-decoration: none; font-size: 20px; color:red;" >- Bitacora No Revisada</a> <?php } ?>
</td>
	</th>
</table>


<?php endforeach ?>


