  
<div class="bottom-transition"></div>
  <footer class="footer" role="contentinfo">
  
    <div class="container">
      <div class="row">
        
        <div class="col-sm-6 footer-logo-container">
          <img src="<?php bloginfo('stylesheet_directory')?>/images/ChilZone-logo.png" />
          <div class="recent-post">
          <?php 
              // the query
              $the_query = new WP_Query( array(
                  'posts_per_page' => 3,
              )); 
            ?>

            <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php echo get_the_permalink() ?>">Read More</a>

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>

            <?php else : ?>
              <p>No News</p>
            <?php endif; ?>
          </div>
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
