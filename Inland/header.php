<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
    <title><?php showTitleTag(); ?></title>
	<base href="<?php showSiteUrl(); ?>/" />
    <meta name="description" content="<?php showMetaDescriptionTag(); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Droid+Sans' rel='stylesheet' type='text/css' />
    <?php showLinkTags(); ?>
	<?php showScriptTags(); ?>
	<?php eval(callHook('endFrontHead')); ?>
</head>

<body>
<div id="wrapper960" class="clearfix">
	<div id="header" class="clearfix">
		<div id="sitetitle" class="clearfix">
			<h1><a href="<?php showSiteUrl(); ?>"><?php showSiteName(); ?></a></h1>
		</div>

		<div id="nav" class="clearfix">
			<ul>
				<?php showMainNavigation(); ?>
			</ul>
		</div>
	</div>

	<div class="slider-wrapper">
		<div id="slider" class="nivoSlider">
			<img src="theme/<?php echo $coreConf['theme']; ?>/images/slider0.jpg" alt="" />
			<img src="theme/<?php echo $coreConf['theme']; ?>/images/slider1.jpg" alt="" />
			<img src="theme/<?php echo $coreConf['theme']; ?>/images/slider2.jpg" alt="" />
			<img src="theme/<?php echo $coreConf['theme']; ?>/images/slider3.jpg" alt="" />
			<img src="theme/<?php echo $coreConf['theme']; ?>/images/slider4.jpg" alt="" />
		</div>
	</div>

	<div id="content" class="clearfix shadow">
		
				    <?php showBreadcrumb(); ?>
					<h2><?php showMainTitle(); ?></h2>		