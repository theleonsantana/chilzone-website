<?php /* Template Name: Artist Page */ ?>

<?php get_header();?>

<?php 
  $args = array( 'post_type' => 'Artist', 'posts_per_page' => 10 );
 
  $the_query = new WP_Query( $args ); 

?>

<div class="container">

  <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="row">
      

        <?php 
         $art_image = get_field('artist_experience_image');
        
        if (!$art_image) : ?>
        <div class="col-sm-12 artist-video">
          
          <?php  the_field('artist_reel'); ?>
        
        </div>
        <?php else : ?>
          <div class="col-sm-12 artist-image">

            <img src="<?php echo esc_url( $art_image['url'] ); ?>" alt="<?php echo esc_attr( $art_image['alt'] ); ?>"/>

          </div>
          
        
          <?php endif; ?>
      
      </div>

      <h2 class="col-sm-12"><?php the_title(); ?></h2>

      <div class="artist-entry col-sm-10">
        <?php the_content(); ?>
      </div>

      <?php 
      $art_quote = get_field('artist_quote', false, false);
      $art_photo = get_field('artist_photo');

      if($art_quote): ?>
          <p class="quote">
              "<?php echo $art_quote?>"
          </p>
          <img src="<?php echo esc_url( $art_photo['url'] ); ?>" alt="<?php echo esc_attr( $art_photo['alt'] ); ?>"/>
      <?php endif;?>
        
      <?php wp_reset_postdata(); ?>

    </div>
  </div>

    <?php endwhile; ?>
  <?php else : ?>

</div>


    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h3>Sorry, no posts matched your criteria.</h3>
        </div>
      </div>
    </div>

  <?php endif; ?>

<?php get_footer();?>