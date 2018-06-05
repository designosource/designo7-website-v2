<meta name="description" content="<?php echo $caseinfo["descriptionmeta"]; ?>">
<meta name="author" content="Designosource">
<meta name="subject" content="Designosource | <?php echo $caseinfo["name"]; ?>">
<meta name="copyright" content="Designosource">
<meta name="designer" content="Designosource">
<meta name="reply-to" content="hello@designosource.be">
<meta name="owner" content="Designosource">
<meta name="url" content="<?php echo $url; ?>team/<?php echo $caseinfo["shortname"]; ?>.php">
<meta name="url" content="<?php echo $url_s; ?>team/<?php echo $caseinfo["shortname"]; ?>.php">
<meta name="identifier-URL" content="<?php echo $url; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta property="og:title" content="Designosource | <?php echo $caseinfo["name"]; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $url; ?>cases/<?php echo $caseinfo["shortname"]; ?>.php">
<meta property="og:image" content="<?php echo $url; ?>img/meta/og-team.jpg">
<meta property="og:image:secure_url" content="<?php echo $url_s; ?>img/meta/og-team.jpg">
<meta property="og:image:alt" content="Designosource | OG image <?php echo ucfirst($caseinfo["shortname"]); ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="627">
<meta property="og:description" content="<?php echo $caseinfo["descriptionmeta"]; ?>">
<meta property="og:locale" content="nl_BE">
<meta property="og:site_name" content="Designosource | <?php echo $caseinfo["name"]; ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@designosource">
<meta name="twitter:creator" content="@designosource">
<meta name="twitter:title" content="Designosource | <?php echo $caseinfo["name"]; ?>">
<meta name="twitter:description" content="<?php echo $caseinfo["descriptionmeta"]; ?>">
<meta name="twitter:image" content="<?php echo $url; ?>img/meta/twitter-team.jpg">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $prefix; ?>img/meta/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $prefix; ?>img/meta/apple-icon-180x180.png">
<meta name="apple-mobile-web-app-title" content="Designosource | <?php echo $caseinfo["name"]; ?>">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default-translucent">
<meta name="apple-touch-fullscreen" content="yes">

<title>Cases | <?php echo ucfirst($pagename); ?></title>

<!-- Animate.css -->
<link href="../css/animate.css" rel="stylesheet">

<!-- Custom styles -->
<?php include '../inc/head/check_browser.php'; ?>