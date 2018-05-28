<?php

	include '../inc/arrays/members.php';

	// Get page name
	$pagename = basename(__FILE__, '.php');

	// Fetch corresponding member info
	$memberinfo = $members[$pagename];


?><!DOCTYPE html>
<html lang="en">
<head>

    <!-- GOOGLE ANALYTICS SCRIPT -->

    <!-- END GOOGLE ANALYTICS SCRIPT -->

    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include '../inc/head/meta_tags_member.php'; ?>
    
</head>

<body>

<?php include '../inc/logo/logo.php'; ?>
<?php include '../inc/hiddengame/hiddengame.php'; ?>

<main>

	<?php include '../inc/team/member_content.php'; ?>

</main>

<?php include '../inc/footer/footer.php'; ?>

<!-- SCRIPTS -->
<?php include '../inc/footer/scripts.php'; ?>
<!-- END SCRIPTS -->

</body>
</html>