  
<div class="bottom-transition"></div>
  <footer class="footer" role="contentinfo">
  
    <div class="container">
      <div class="row">
        
        <div class="col-sm-6">
          <img src="<?php bloginfo('stylesheet_directory')?>/images/ChilZone-logo.png" />
        </div>

        <div class="col-sm-6">
          <div class="branding-footer">
            <img src="<?php bloginfo('stylesheet_directory')?>/images/Monte-logo.png"/>
            <img src="<?php bloginfo('stylesheet_directory')?>/images/EA-logo.png" />
          </div>
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
  
  <?php wp_footer(); ?>
  </body>
</html>
