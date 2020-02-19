  
<div class="bottom-transition"></div>
  <footer class="footer" role="contentinfo">
  
    <div class="container">
      <div class="row">
        
        <div class="col-sm-6 footer-logo-container">
          <img src="<?php bloginfo('stylesheet_directory')?>/images/ChilZone-logo.png" />
          <div class="recent-post-container">
          <?php 
              // the query
              $the_query = new WP_Query( array(
                  'posts_per_page' => 3,
              )); 
            ?>

            <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              
              <div class="recent-post">

                <p class="recent-post-date"><?php echo get_the_date( 'M j, Y' ); ?></p>

                <h3 class="recent-post-title"><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php echo get_the_permalink() ?>" class="recent-post-link-more">Read More</a>

              </div>

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>

            <?php else : ?>

            <div class="recent-post">

              <h3 class="no-post-message">No Recent Post</h3>

            </div>

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
