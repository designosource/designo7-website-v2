<?php $url = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

if (strpos($url, 'cases/') !== false) {
	$prefix = '../';
} else if (strpos($url, 'team/') !== false) {
	$prefix = '../';
} else {
	$prefix = '';
}

?>