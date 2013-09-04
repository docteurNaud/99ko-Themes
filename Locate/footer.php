		</article>
	</div>
</div>

<footer>
	<div id="footer">
		<nav><?php showMainNavigation($format = '<a href="[target]">[label]</a>'); ?></nav>
		
		<p>Just using <a target="_blank" title="CMS sans base de données" href="http://99ko.tuxfamily.org/">99ko</a>. Thème <?php showTheme(); ?> - <?php showExecTime(); ?>s <br><a rel="nofollow" href="admin/">Administration</a></p>
	</div>
</footer>

<?php eval(callHook('endFrontBody')); ?>

</body>
</html>