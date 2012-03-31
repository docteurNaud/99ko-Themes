<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
	    <title><?php showTitleTag(); ?></title>
        <meta name="description" content="<?php showMetaDescriptionTag(); ?>" />
        <!--[if lt IE 9]>
        <script src="theme/defaulthtml5/html5.js"></script>
        <![endif]-->
	<?php showLinkTags(); ?>
	<?php showScriptTags(); ?>
	<?php eval(callHook('endFrontHead')); ?>
    </head>
	<body>
	
		<div id="header">
			<ul id="navigation">
			    <li class="logo"><a title="<?php showSiteDescription(); ?>" href="<?php showSiteUrl(); ?>"><?php showSiteName(); ?></a></li>
			    <?php showMainNavigation(); ?>
			</ul>
			
		</div>
		
		<div id="main">
			<div class="content">
				<div id="page">
				    <?php showBreadcrumb(); ?>
					<h1><?php showMainTitle(); ?></h1>		