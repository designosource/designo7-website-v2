<?php

	include '../inc/arrays/cases.php';

	// Get page name
	$pagename = basename(__FILE__, '.php');

	// Fetch corresponding member info
	$caseinfo = $cases[$pagename];

?><!DOCTYPE html>
<html lang="en">
<head>

    <!-- GOOGLE ANALYTICS SCRIPT -->

    <!-- END GOOGLE ANALYTICS SCRIPT -->

    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include '../inc/head/meta_tags_case.php'; ?>
    
</head>

<body>

<?php include '../inc/logo/logo.php'; ?>
<?php include '../inc/hiddengame/hiddengame.php'; ?>

<main>

	<?php include '../inc/cases/detail.php'; ?>

</main>

<?php include '../inc/footer/footer.php'; ?>

<!-- SCRIPTS -->
<?php include '../inc/footer/scripts.php'; ?>
<script type="text/javascript" src="../js/case-detail.js"></script>
<!-- END SCRIPTS -->

</body>
</html>