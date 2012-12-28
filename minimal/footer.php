      </section>
      
      <footer>
        <?php showSidebarItems('<div class="item" id="[id]"><h2>[title]</h2><p>[content]</p></div>'); ?>
        <p><small>Just using <a target="_blank" title="CMS sans base de données" href="http://99ko.tuxfamily.org/">99ko</a> | Thème <?php showTheme(); ?> | <a rel="nofollow" href="admin/">Administration</a> | <?php showExecTime(); ?>s</small></p>
      </footer>
    </div>
    <?php eval(callHook('endFrontBody')); ?>
  </body>
</html>