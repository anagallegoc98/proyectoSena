<h1>
	<center>TODAS LAS BITACORAS</center><br>
</h1>
	<?php foreach ($bitacora as $value): ?>
			
			<li>
				<a href="<?php echo URL .'funcionario/detallesBitacora/'. $value->id_bitacora  ?>"> <?php echo  " Aprendiz "."<b>".$value->nombres." ".$value->apellidos."</b>"."  Del  ". $value->fecha_bitacora ; ?><?php if( $value->aprobada == 1 ) { ?> <a style="text-decoration: none; font-size: 20px; color:green;" >- Bitacora Revisada</a>
 <?php } else { ?> <a style="text-decoration: none; font-size: 20px; color:red;" >- Bitacora No Revisada</a> <?php } ?><br></a>
				
			</li>
		


		<?php endforeach ?>