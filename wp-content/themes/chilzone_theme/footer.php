  
<div class="bottom-transition"></div>
  <footer class="footer" role="contentinfo">
  
    <div class="container">
      <div class=" logo-footer-container">
        
          <img src="<?php bloginfo('stylesheet_directory')?>/images/ChilZone-logo.png" />
        
        
          <img src="<?php bloginfo('stylesheet_directory')?>/images/Monte-logo.png"/>
        
        
          <img src="<?php bloginfo('stylesheet_directory')?>/images/EA-logo.png" />
        
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-6">

          <h3 class="footer-heading">Contact Us!</h3>
          <?php
          echo do_shortcode( '[ninja_form id=1]' );
          ?>

        <div class="social-media-section">

          <?php 
            $yt_link = get_field('youtube_sm');
            if( $yt_link ): ?>
                <a class="yt_button" target="_blank" href="<?php echo esc_url( $yt_link ); ?>"><i class="fab fa-youtube"></i></a>
            <?php endif; ?>

            <?php 
            $fb_link = get_field('facebook_sm');
            if( $fb_link ): ?>
                <a class="fb_button" target="_blank" href="<?php echo esc_url( $fb_link ); ?>"><i class="fab fa-facebook-square"></i></a>
            <?php endif; ?>

            <?php 
            $in_link = get_field('instagram_sm');
            if( $in_link ): ?>
                <a class="in_button" target="_blank" href="<?php echo esc_url( $in_link ); ?>"><i class="fab fa-instagram"></i></a>
            <?php endif; ?>

            <?php 
            $li_link = get_field('linkedin_sm');
            if( $li_link ): ?>
                <a class="li_button" target="_blank" href="<?php echo esc_url( $li_link ); ?>"><i class="fab fa-linkedin"></i></a>
            <?php endif; ?>

            <?php 
            $tw_link = get_field('twitter_sm');
            if( $tw_link ): ?>
                <a class="tw_button" target="_blank" href="<?php echo esc_url( $tw_link ); ?>"><i class="fab fa-twitter-square"></i></a>
            <?php endif; ?>

        </div>  

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
