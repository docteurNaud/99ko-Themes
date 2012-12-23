<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
    <title><?php showTitleTag(); ?></title>
	<base href="<?php showSiteUrl(); ?>/" />
    <meta name="description" content="<?php showMetaDescriptionTag(); ?>" />
    
	<link rel="shortcut icon" type="image/x-icon" href="theme/<?php echo $coreConf['theme']; ?>/css/images/favicon.ico" />
    <?php showLinkTags(); ?>
	<link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Jura:400,500,600,300' rel='stylesheet' type='text/css' />

	<script src="theme/<?php echo $coreConf['theme']; ?>/js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="theme/<?php echo $coreConf['theme']; ?>/js/modernizr.custom.js"></script>
	<![endif]-->
		
	<?php showScriptTags(); ?>
	<?php eval(callHook('endFrontHead')); ?>	
</head>
<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!-- header -->
		<header class="header">
			<div class="shell">
				<div class="header-top">
					<h1 id="logo"><a href="<?php showSiteUrl(); ?>"><?php showSiteName(); ?></a></h1>
					<nav id="navigation">
						<a class="nav-btn" title="<?php showSiteDescription(); ?>" href="<?php showSiteUrl(); ?>"><?php showSiteName(); ?><span></span></a>
						<ul>
							<?php showMainNavigation(); ?>
						</ul>
					</nav>
					<div class="cl">&nbsp;</div>
				</div>

                <?php include_once(ROOT.'theme/'.$coreConf['theme'].'/carousel.php') ?>	
			</div>
		</header>
		<!-- end of header -->
		<!-- shell -->
		<div class="shell">
			<!-- main -->
			<div class="main">

				<section class="content">			
				    <?php showBreadcrumb(); ?>
					<h1><?php showMainTitle(); ?></h1>		