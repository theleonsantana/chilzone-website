  
<div class="bottom-transition"></div>
  <footer class="footer" role="contentinfo">
  
    <div class="container">
      <div class="row">
        
        <div class="col-sm-6 footer-logo-container">
          <img src="<?php bloginfo('stylesheet_directory')?>/images/ChilZone-logo.png" />
        </div>

        <div class="col-sm-6">
          <div class="branding-footer">
            <img src="<?php bloginfo('stylesheet_directory')?>/images/Monte-logo.png"/>
            <img src="<?php bloginfo('stylesheet_directory')?>/images/EA-logo.png" />
          </div>
          <h3 class="footer-heading">Contact Us!</h3>
          <?php
          echo do_shortcode( '[ninja_form id=1]' );
          ?>
        </div>       
      </div>
      <div class="row">

        <div class="col-sm-12">
        <!-- copyright -->
        <p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.</p>
        <!-- /copyright -->
      </div>

      </div>
    </div>
  
  </footer>
  <!-- nav -->
  <nav>
      <?php
      wp_nav_menu( array(
          'theme_location'  => 'secondary',
          'menu_class'     => 'footer-menu nav justify-content-center',
      ))
      ?>
  </nav>
  <!-- /nav -->
  
  <?php wp_footer(); ?>
  </body>
</html>
