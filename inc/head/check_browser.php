<?php 

	if( ($ua['name'] == "Google Chrome" && $ua['version'] < 57) || ($ua['name'] == "Apple Safari" && $ua['version'] < 10.2) || ($ua['name'] == "Mozilla Firefox" && $ua['version'] < 52) || ($ua['name'] == "Internet Explorer") || ($ua['name'] == "Opera" && $ua['version'] < 44) || ($ua['name'] == "Edge" && $ua['version'] < 52  ) ): 

?>
<link href="<?php echo $prefix; ?>css/oldbrowsers.css" rel="stylesheet">
<?php $version = "-2"; ?>
<?php else: ?>
<link href="<?php echo $prefix; ?>css/style.css" rel="stylesheet">
<?php $version = ""; ?>
<?php endif; ?>