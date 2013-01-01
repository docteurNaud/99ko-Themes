<?php if(!defined('ROOT')) die(); ?>
<?php include_once(ROOT.'theme/'.$coreConf['theme'].'/header.php') ?>

		<div id="sidebar" class="left">
			<div class="inner">
				<?php showSidebarItems('<h2 id="[id]">[title]</h2><p>[content]</p>'); ?>
			</div>
		</div>
		
		<div id="main" class="right">
		<!-- main content -->
		
			<div id="page-content">
				<div class="page-text">
						
<?php if($mode == 'list'){ ?>
<?php foreach($news as $k=>$v){ ?>
                  <div class="item">
	                <h2><?php echo $v['name']; ?></h2>
	                <p class="date"><?php echo $v['date']; ?></p>
	                <?php echo $v['content']; ?>
	                 <p><a href="<?php echo $v['url']; ?>">Lire</a></p>
                  </div>
<?php } ?>
<ul class="pagination">
	<?php foreach($pagination as $k=>$v){ ?>
	<li><a href="<?php echo $v['url']; ?>"><?php echo $v['num']; ?></a></li>
	<?php } ?>
</ul>
<?php } ?>

<?php if($mode == 'read'){ ?>
<div class="item">
	<p class="date"><?php echo $news['date']; ?></p>
	<?php echo $news['content']; ?>
</div>
<?php } ?>
				</div>
			</div>
<?php include_once(ROOT.'theme/'.$coreConf['theme'].'/footer.php') ?>