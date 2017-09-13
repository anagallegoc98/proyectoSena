<h1>PROGRAMAS</h1>

<?php foreach ($programa as $value): ?>

  
<li> <a href="<?php echo URL; ?>funcionario/listarFichas/<?php echo  $value->id_programa; ?>"> <?php echo $value->nombre; ?></a> </li>
  </p>


<?php endforeach ?>