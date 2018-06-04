<?php 

	include '../inc/arrays/members.php';
	include '../inc/head/prefix.php';
	include '../inc/head/function_browser.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- GOOGLE ANALYTICS SCRIPT -->

    <!-- END GOOGLE ANALYTICS SCRIPT -->

    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include '../inc/head/meta_tags_overviewteam.php'; ?>

    <title>Team | Overview</title>

    <!-- Font(s) for this template (Google font / font-awesome) -->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/cooper-hewitt" type="text/css"/>

    <!-- Animate.css -->
    <link href="../css/animate.css" rel="stylesheet">

    <!-- Custom styles -->
    <?php include '../inc/head/check_browser.php'; ?>

</head>

<body>

<?php include '../inc/logo/logo.php'; ?>
<?php include '../inc/hiddengame/hiddengame.php'; ?>

<main>
    <section class="page-container">
        <div class="maxwidth">

            <div class="previous-next-page">
                <a title="Vorige pagina" href="../index.php#team"><img src="../img/arrow-right-red.svg" alt="icon previous page"><span>vorige pagina</span></a>
            </div>

            <h1>Meet the team</h1>
            <article class="overview" id="members-grid">
                <?php foreach($members as $member): ?>
                    <div class="grid-item" onmouseover="$(this).find('img').attr('src','<?php echo $prefix . $member["imagehover"]; ?>').css('transition', '0.4s');" onmouseleave="$(this).find('img').attr('src','<?php echo $prefix . $member["image"]; ?>').css('transition', '0.4s');">
                        <a title="<?php echo $member["name"]; ?>" href="<?php echo $member["shortname"]; ?>.php">
                            <img src="<?php echo $prefix . $member['image']; ?>" alt="<?php echo $member['name'] ; ?>">
                        </a>
                        <div class="grid-details">
                            <p class="first-detail"><?php echo $member['title']; ?></p>
                            <p class="second-detail"><?php echo $member['name'] ; ?></p>
                            <a title="Meer info | <?php echo $member["name"]; ?>" href="<?php echo $member["shortname"]; ?>.php" class="third-detail">Meer info +</a>
                        </div>
                        <a title="<?php echo $member["name"]; ?>" href="<?php echo $member["shortname"]; ?>.php">
                            <div class="more-button">
                                <span>+</span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </article>

        </div> <!-- /maxwidth -->
    </section>
</main>

<?php include '../inc/footer/footer.php'; ?>

<!-- SCRIPTS -->
<?php include '../inc/footer/scripts.php'; ?>
<!-- END SCRIPTS -->

</body>
</html>