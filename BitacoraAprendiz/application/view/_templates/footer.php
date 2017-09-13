</div>

<div class="copy">
	<p> &copy; 2016 Minimal. All Rights Reserved</div>
</div>
</div>
<div class="clearfix"> </div>
</div>


<script>
	var url = "<?php echo URL; ?>";
</script>


<!---->
<!--scrolling js-->
<script src="<?php echo URL; ?>js/jquery.nicescroll.js"></script>
<script src="<?php echo URL; ?>js/scripts.js"></script>
<!--//scrolling js-->

<script src="<?php echo URL; ?>js/scripts/aprendiz.js"></script>
<script src="<?php echo URL; ?>js/scripts/cadena.js"></script>
<script src="<?php echo URL; ?>js/scripts/centro.js"></script>
<script src="<?php echo URL; ?>js/scripts/empresa.js"></script>
<script src="<?php echo URL; ?>js/scripts/funcionario.js"></script>
<script src="<?php echo URL; ?>js/scripts/ficha.js"></script>
<script src="<?php echo URL;?>js/scripts/admin.js"></script>


<?php 
if (isset($js)) {
	echo $js;
};
?>
</body>
</html>
