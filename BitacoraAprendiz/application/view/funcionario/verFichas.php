<h1>FICHAS</h1>

<?php foreach ($fichas as $value): ?>

  
<li> <a href="<?php echo URL; ?>funcionario/aprendizxFicha/<?php echo  $value->numero_ficha; ?>"><?php echo $value->numero_ficha; ?></a>  </li>


<?php endforeach ?>