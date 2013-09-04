<!DOCTYPE html>
<html lang="fr">
	<head>
		<title><?php showTitleTag(); ?></title>
   	
   	<meta charset="utf-8" />
   	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   	<meta name="description" content="<?php showMetaDescriptionTag(); ?>" />
		<meta name="viewport" content="width=device-width">
	
		<base href="<?php showSiteUrl(); ?>/" />
		
		<?php showLinkTags(); ?>
		<?php eval(callHook('endFrontHead')); ?>
		
		<link rel="shortcut icon" type="image/x-icon" href="theme/<?php echo $coreConf['theme']; ?>/img/favicon.ico" />
   </head>
	<body>
	
		<div class="header-container">
			<header class="wrapper clearfix">
			   <div id="logo"><a href="<?php showSiteUrl(); ?>"><?php showSiteName(); ?></a></div>
				<h2 class="title"><a title="<?php showSiteName(); ?>" href="<?php showSiteUrl(); ?>"><?php showSiteName(); ?></a></h2>
				<nav>
					<ul>
						<?php showMainNavigation(); ?>
					</ul>
				</nav>
			</header>
		</div>	

		<div class="main-container">
			<div class="main wrapper clearfix">
				<article>
					<section>
						<?php showBreadcrumb(); ?>
						<h1><?php showMainTitle(); ?></h1>