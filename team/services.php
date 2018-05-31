<?php

	include '../inc/head/prefix.php';
	include '../inc/head/function_browser.php';

?><!DOCTYPE html>
<html lang="en">
<head>

    <!-- GOOGLE ANALYTICS SCRIPT -->

    <!-- END GOOGLE ANALYTICS SCRIPT -->

    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include '../inc/head/meta_tags.php'; ?>

    <title>Team | Services</title>

    <!-- Font(s) for this template (Google font / font-awesome) -->
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

	<section class="memberpage" id="services">
  	<div class="container big-grid maxwidth">
			<figure class="content-image overlay"></figure>
			<figure class="content-image pop-up-image"></figure>

			<div class="previous-next-page">

				<a title="Vorige pagina" href="werkwijze.php"><img src="../img/arrow-right-red.svg" alt="icon previous page"><span>Werkwijze</span></a>
				
				<a title="Overzicht" href="../team/"><img src="../img/team-icon-dark.svg" alt="icon team page" onmouseover="$(this).attr('src','../img/team-icon-red.svg').css('transition', '0.4s');" onmouseleave="$(this).attr('src','../img/team-icon-dark.svg').css('transition', '0.4s');" ></a>
				
				<a title="Wat pagina" href="wat.php"><span>Wat</span><img src="../img/arrow-right-red.svg" alt="icon previous page"></a>

			</div>

			<h1>Services</h1>

			<article class="content-rightblock scrollbar">
					<p>Wij ademen digitaal, en daarom is geen enkele creatieve uitdaging ons teveel. Met een “out-of-the-box” aanpak leveren wij (digitale) oplossingen die perfect beantwoorden aan de vraag van onze klant.</p>
					<p>Heeft jouw project net dat ietsje meer royalty gehalte of sashimi flavour nodig? Dan ben je bij ons aan het juiste adres, let’s make magic!
</p>
					<a title="Contact" href="../index.php#contact" class="btn">Contacteer ons<span class="arrow-right"></span></a>
			</article>
			
			<div class="fixed-bottom-mobile-navigation"></div>
			
		</div> <!-- /maxwidth -->
	</section>

</main>

<?php include '../inc/footer/footer.php'; ?>

<!-- SCRIPTS -->
<?php include '../inc/footer/scripts.php'; ?>
<!-- END SCRIPTS -->

</body>
</html>