<?php 

	include '../inc/arrays/cases.php';
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

    <?php include '../inc/head/meta_tags.php'; ?>

    <title>Cases | Overview</title>

    <!-- Font(s) for this template (Google font / font-awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css">
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

                <a href="../index.php#cases"><img src="../img/arrow-right-red.svg" alt="icon previous page"><span>vorige pagina</span></a>

            </div>

            <h1>All our cases</h1>
            <article class="overview" id="cases-grid">
                <?php foreach ($cases as $case): ?>
                    <div class="grid-item">
                        <a title="<?php echo $case["title"]; ?>" href="<?php echo $case["shortname"]; ?>.php">
                            <img src="<?php echo $case['image']; ?>" alt="<?php echo $case['name']; ?>">
                        </a>
                        <div class="grid-details">
                            <p class="first-detail"><?php echo $case['technology']; ?></p>
                            <p class="second-detail"><?php echo $case['name']; ?></p>
                            <a title="<?php echo $case["title"]; ?>" href="<?php echo $case["shortname"]; ?>.php" class="third-detail">Meer info +</a>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="grid-item last-item">
                    <p>Meer projecten volgen nog door de volgende generatie…</p>
                </div>
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