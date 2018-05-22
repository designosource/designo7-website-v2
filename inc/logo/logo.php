<div id="logo" class="fixed">
	
	<?php $url = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

		if (strpos($url, 'cases/') !== false) {
    	$prefix = '../';
		} else if (strpos($url, 'team/') !== false) {
			$prefix = '../';
		} else {
			$prefix = '';
		}
	?>
	
	<a href="<?php echo $prefix; ?>index.php">
		<img src="<?php echo $prefix; ?>img/designologo.svg" alt="Logo Designosource">
	</a>
	
</div>