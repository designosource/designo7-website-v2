<footer>
   
  	<?php $url = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

		if (strpos($url, 'cases/') !== false) {
    	$prefix = '../';
		} else if (strpos($url, 'team/') !== false) {
			$prefix = '../';
		} else {
			$prefix = '';
		}
	
		?>
		
		<div class="hamburger-menu">
			<div class="inner-hamburger-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
   
    <div class="footer maxwidth">
        <nav id="footer-left">
            <a href="<?php echo $prefix; ?>index.php#home">Home</a>
            <a href="<?php echo $prefix; ?>index.php#team">Team</a>
            <a href="<?php echo $prefix; ?>index.php#cases">Cases</a>
            <a href="<?php echo $prefix; ?>index.php#contact">Contact</a>
        </nav>
        <nav id="footer-right">
            <a target="_blank" href="https://www.facebook.com/Designosource/">Facebook</a>
            <a target="_blank" href="https://twitter.com/designosource">Twitter</a>
            <a target="_blank" href="http://instagram.com/designosource">Instagram</a>
        </nav>
    </div>
</footer>