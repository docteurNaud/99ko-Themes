<html>
	<head>
        <meta charset="utf-8" />
	    <title><?php showTitleTag(); ?></title>
	    <base href="<?php showSiteUrl(); ?>/" />
        <meta name="description" content="<?php showMetaDescriptionTag(); ?>" />

		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<noscript><link rel="stylesheet" href="theme/<?php echo $coreConf['theme']; ?>/css/5grid/core.css" /><link rel="stylesheet" href="theme/<?php echo $coreConf['theme']; ?>/css/5grid/core-desktop.css" /><link rel="stylesheet" href="theme/<?php echo $coreConf['theme']; ?>/css/5grid/core-1200px.css" /><link rel="stylesheet" href="theme/<?php echo $coreConf['theme']; ?>/css/5grid/core-noscript.css" /><link rel="stylesheet" href="theme/<?php echo $coreConf['theme']; ?>/css/style.css" /><link rel="stylesheet" href="theme/<?php echo $coreConf['theme']; ?>/css/style-desktop.css" /></noscript>
		<script src="theme/<?php echo $coreConf['theme']; ?>/css/5grid/jquery.js"></script>
		<script src="theme/<?php echo $coreConf['theme']; ?>/css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=55&amp;mobileUI.openerWidth=66"></script>
		<!--[if IE 9]><link rel="stylesheet" href="theme/<?php echo $coreConf['theme']; ?>/css/style-ie9.css" /><![endif]-->
	    <?php showLinkTags(); ?>
	    <?php showScriptTags(); ?>
	    <?php eval(callHook('endFrontHead')); ?>		
	</head>
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid-layout">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a class="mobileUI-site-name" title="<?php showSiteDescription(); ?>" href="<?php showSiteUrl(); ?>"><?php showSiteName(); ?></a></h1>
							<nav class="mobileUI-site-nav">
								<?php showMainNavigation('<a href="[target]">[label]</a>'); ?>
							</nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
		<div id="main">
			<div class="5grid-layout">
				<div class="row main-row">
					<div class="4u">

						<section id="[id]">
					    <?php showSidebarItems('<div id="[id]">
							<h2[title]</h2>
					        <p>[content]</p>
					    </div>'); ?>
						</section>

						
					</div>
					<div class="8u mobileUI-main-content">

						<section class="right-content">
						
				         <?php showBreadcrumb(); ?>
					     <h2><?php showMainTitle(); ?></h2>		