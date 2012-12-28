<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
	<title><?php showTitleTag(); ?></title>
    <meta name="description" content="<?php showMetaDescriptionTag(); ?>" />
	<base href="<?php showSiteUrl(); ?>/" />
	<link rel="stylesheet" href="theme/<?php echo $coreConf['theme']; ?>/pygment_trac.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--[if lt IE 9]>
        <script src="theme/<?php echo $coreConf['theme']; ?>/html5.js"></script>
    <![endif]-->
	<?php showLinkTags(); ?>
	<?php showScriptTags(); ?>
	<?php eval(callHook('endFrontHead')); ?>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <h1><?php showSiteName(); ?></h1>
        <p><?php showSiteDescription(); ?></p>
        <p class="view"><?php showMainNavigation('<a href="[target]">[label]</a> '); ?></p>
        <ul>
          <li><a href="https://github.com/orderedlist/minimal/zipballmus/master">Download <strong>ZIP File</strong></a></li>
          <li><a href="https://github.com/orderedlist/minimal/tarball/master">Download <strong>TAR Ball</strong></a></li>
          <li><a href="http://github.com/orderedlist/minimal">Fork On <strong>GitHub</strong></a></li>
        </ul>        
      </header>
      
      <section class="<?php showPluginId(); ?>">
			<?php showBreadcrumb(); ?>
			<h1><?php showMainTitle(); ?></h1>