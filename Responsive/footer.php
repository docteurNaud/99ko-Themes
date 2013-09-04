				</section>                      

				<section id="sidebar">
					<?php showSidebarItems('<div class="item" id="[id]"><h2 class="title">[title]</h2>[content]</div>'); ?>
				</section>				

			</article>
            
				<aside>
					<h2>À propos de <?php showSiteName(); ?></h2>
					<p><?php showSiteDescription(); ?></p>
				</aside> 
			
			</div>
		</div> 
      
      <footer class="wrapper">
      	<p>© Copyright <?php $annee = date("Y"); echo $annee; ?> <a href="<?php showSiteUrl(); ?>"><?php showSiteName(); ?></a> | Just using <a target="_blank" title="CMS sans base de données" href="http://99ko.tuxfamily.org/">99ko</a> | Thème <?php showTheme(); ?> | Page générée en <?php showExecTime(); ?>s</p>
		</footer>
			   
    </body>
</html>