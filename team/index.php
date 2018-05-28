<?php
include '../inc/arrays/members.php';
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

    <title>Team | Overview</title>

    <!-- Font(s) for this template (Google font / font-awesome) -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/cooper-hewitt" type="text/css"/>

    <!-- Animate.css -->
    <link href="../css/animate.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../css/style.css" rel="stylesheet">

</head>

<body>

<?php include '../inc/logo/logo.php'; ?>
<?php include '../inc/hiddengame/hiddengame.php'; ?>

<main>
    <section class="page-container">
        <div class="maxwidth">

            <div class="previous-page">
                <a title="Vorige pagina" href="../index.php#team"><img src="../img/arrow-right-dark.svg"
                                                                       alt="icon previous page"><span>vorige pagina</span></a>
            </div>

            <h1>Meet the team</h1>
            <article class="overview" id="members-grid">
                <!--TODO: loop all members in grid-->
                <?php foreach($members as $member): ?>
                    <div class="grid-item">
                        <a title="Title" href="#">
                            <img src="<?php echo $member['Image']; ?>" alt="Chris Oortman">
                        </a>
                        <div class="grid-details">
                            <p class="first-detail"><?php echo $member['Title']; ?></p>
                            <p class="second-detail"><?php echo $member['Shortname'] . ' '. $member['Name'] ; ?></p>
                            <a title="Title" href="#" class="third-detail">Meer info +</a>
                        </div>
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