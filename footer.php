  <footer class="site-footer">
    <div class="container">
      <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
      <nav>
        <?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
      </nav>
      <nav>
        <?php wp_nav_menu(array( 'theme_location' => 'corporate' )); ?>
      </nav>
      <span class="copyright-info">© <?php echo bloginfo('name') . " " . date("Y")?>. Created by <a href="http://smallwins.co.uk">Small Wins</a>.</span>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
