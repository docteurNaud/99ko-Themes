				</section>

				<section class="partners">
					
					<div id="partners-slider">
						<div class="slider-holder2">
						    <img src="theme/<?php echo $coreConf['theme']; ?>/assets/images/partners1.png" width="92" height="52" />
						    <img src="theme/<?php echo $coreConf['theme']; ?>/assets/images/partners2.png" width="172" height="52" />
						    <img src="theme/<?php echo $coreConf['theme']; ?>/assets/images/partners3.png" width="236" height="52" />
						    <img src="theme/<?php echo $coreConf['theme']; ?>/assets/images/partners4.png" width="121" height="52" />
						    <img src="theme/<?php echo $coreConf['theme']; ?>/assets/images/partners1.png" width="92" height="52" />
						    <img src="theme/<?php echo $coreConf['theme']; ?>/assets/images/partners2.png" width="172" height="52" />
						    <img src="theme/<?php echo $coreConf['theme']; ?>/assets/images/partners3.png" width="236" height="52" />
						    <img src="theme/<?php echo $coreConf['theme']; ?>/assets/images/partners4.png" width="121" height="52" />
						</div>
					</div>
					<div class="slider-arr">
						<a class="prev-arr arr-btn" href="#"></a>
						<a class="next-arr arr-btn" href="#"></a>
					</div>
				</section>

				<div class="socials">
					<p>We are currently <strong>available</strong> for work. Please, contact us for a quote at <span><a href="#">contact [at] websitename [dot] com</a></span></p>

					<ul>
						<li><a href="#" class="facebook-ico">facebook-ico</a></li>
						<li><a href="#" class="twitter-ico">twitter-ico</a></li>
						<li><a href="#" class="skype-ico">skype-ico</a></li>
						<li><a href="#" class="rss-ico">rss-ico</a></li>
					</ul>
				</div>
			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->	
		<!-- footer -->
		<div id="footer">
			<!-- shell -->
			<div class="shell">
				<!-- footer-cols -->
				<div class="footer-cols">
			
					<?php showSidebarItems('
					<!-- News -->
					<div class="col" id="[id]">
						<h2>[title]</h2>
					    [content]
					</div>'); ?>

					<div class="col">
						<h2>SOLUTIONS</h2>
						<ul>
							<li><a href="#">Quisque nec lacuss volutpat</a></li>
							<li><a href="#">Aenean bibendum lacus varius </a></li>
							<li><a href="#">Nullam euismod quam vel</a></li>
							<li><a href="#">Pellentesque sed nulla nec </a></li>
							<li><a href="#">Donec a velit nisi, ac dignissim </a></li>
						</ul>
					</div>

					<div class="col">
						<h2>BLOG</h2>
						<ul>
							<li><a href="#">Quisque nec lacuss volutpat</a></li>
							<li><a href="#">Aenean bibendum lacus varius </a></li>
							<li><a href="#">Nullam euismod quam vel</a></li>
							<li><a href="#">Pellentesque sed nulla nec </a></li>
							<li><a href="#">Donec a velit nisi, ac dignissim </a></li>
						</ul>
					</div>

					<div class="col">
						<h2>CONTACT us</h2>

						<p>Email: <a href="#">info@websitename.com</a></p>
						<p>Phone: 655-606-605</p>
						<p>Address: East Pixel Bld. 99, </p>
						<p>Template City, 9000</p>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of footer-cols -->
				<div class="footer-bottom">
					<div class="footer-nav">
						<ul>
							<?php showMainNavigation(); ?>
						</ul>
					</div>
					<p class="copy">Just using <a target="_blank" title="CMS sans base de données" href="http://99ko.tuxfamily.org/">99ko</a> | Thème <?php showTheme(); ?> | <a rel="nofollow" href="admin/">Administration</a> | <?php showExecTime(); ?>s</p>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- end of shell -->
		</div>
		<!-- footer -->
	</div>
	<!-- end of wrapper -->
	<script src="theme/<?php echo $coreConf['theme']; ?>/js/jquery.touchwipe.1.1.1.js" type="text/javascript"></script>
	<script src="theme/<?php echo $coreConf['theme']; ?>/js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
	<script src="theme/<?php echo $coreConf['theme']; ?>/js/functions.js" type="text/javascript"></script>	
	<?php eval(callHook('endFrontBody')); ?>
</body>
</html>