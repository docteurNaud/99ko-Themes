	</div>

	<div id="footer" class="shadow">
		<p>Just using <a target="_blank" title="CMS sans base de données" href="http://99ko.tuxfamily.org/">99ko</a> | Thème <?php showTheme(); ?> | <a rel="nofollow" href="admin/">Administration</a> | <?php showExecTime(); ?>s</p>
	</div>
</div>

<script type="text/javascript" src="theme/<?php echo $coreConf['theme']; ?>/js/jquery.nivo.slider.js"></script>
<?php eval(callHook('endFrontBody')); ?>	
<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
</script>
</body>
</html>