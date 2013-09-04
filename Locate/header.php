<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title><?php showTitleTag(); ?></title>
	<meta name="description" content="<?php showMetaDescriptionTag(); ?>" />	
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	
	<?php showLinkTags(); ?>
	<?php showScriptTags(); ?>
	<?php eval(callHook('endFrontHead')); ?>
</head>

<body>
<section id="burger">
	<section id="head">
		<div id="top">
			<a href="<?php showSiteUrl(); ?>"><?php showSiteName(); ?></a> <?php showSiteDescription() ?>
		</div>
	</section>
	<header><a href="<?php showSiteUrl(); ?>"></a></header>
	
	<div id="content">
		<article>
			<h1><?php showMainTitle(); ?></h1>