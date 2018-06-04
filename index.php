<?php

	session_start();
	
//	unset( $_SESSION['intro'] );

	include 'inc/head/prefix.php';
	include 'inc/head/function_browser.php';

?><!DOCTYPE html>
<html lang="en">
<head>

    <!-- GOOGLE ANALYTICS SCRIPT -->

    <!-- END GOOGLE ANALYTICS SCRIPT -->

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'inc/head/meta_tags_home.php'; ?>

    <title>Designosource</title>

    <!-- Animate.css -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Custom styles -->
    <?php include 'inc/head/check_browser.php'; ?>

</head>

<body>

<?php include 'inc/header/header.php'; ?>
<?php include 'inc/hiddengame/hiddengame.php'; ?>

<main id="fullpage">

    <?php include 'inc/index/intro.php'; ?>

    <?php include 'inc/index/home'. $version . '.php'; ?>

    <?php include 'inc/index/team'. $version . '.php'; ?>

    <?php include 'inc/index/cases'. $version . '.php'; ?>

    <?php include 'inc/index/contact'. $version . '.php'; ?>

</main>

<?php include 'inc/footer/footer.php'; ?>

<!-- SCRIPTS -->
<?php include 'inc/footer/scripts.php'; ?>
<script type="text/javascript" src="js/homepage-min.js"></script>
<script type="text/javascript" src="js/fullpage-min.js"></script>
<!-- END SCRIPTS -->

</body>
</html>