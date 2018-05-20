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
	
	<img src="<?php echo $prefix; ?>img/tm_logo.png" alt="Logo Designosource">
	
</div>