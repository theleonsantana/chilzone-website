<?php /* Template Name: Technology Page */ ?>

<?php get_header();?>

<?php $args = array( 'post_type' => 'Technology', 'posts_per_page' => 10, 'order' => 'ASC' );
      $the_query = new WP_Query( $args ); ?>

<div class="container">
  <h2 class="page-heading">Our Technology</h2>
</div>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="container">
  <div class="row">
      <?php $tech_image = get_field('tech_img');  
      if (!$tech_image) : ?>
      <div class="col-sm-12 artist-video">
        <?php  the_field('tech_vid'); ?>
      </div>
      <?php else : ?>
        <div class="col-sm-12 artist-image">
          <img src="<?php echo esc_url( $tech_image['url'] ); ?>" alt="<?php echo esc_attr( $tech_image['alt'] ); ?>"/>
        </div>       
      <?php endif; ?>
  </div>

  <div class="row">
    <h2 class="col-sm-8 artist-heading"><?php the_title(); ?></h2>
    <div class="artist-entry col-sm-8">
      <?php the_content(); ?>
    </div>  
  </div>

  <?php $patient_quote = get_field('patient_quote', false, false);
        $patient_photo = get_field('patient_photo');
        if($art_quote): ?>
    <div class="artist-quote-wrapper">
      <div class="module d-flex flex-row justify-content-end">
        <div class="col-sm-5">         
          <p class="quote">"<?php echo $patient_quote?>"</p>
        </div>
        <img class="artist-photo"  src="<?php echo esc_url( $patient_photo['url'] ); ?>" alt="<?php echo esc_attr( $patient_photo['alt'] ); ?>"/>
      </div>
    </div>
  
<?php endif;?>

  <div class="artist-separator"></div>
</div>

<?php wp_reset_postdata(); ?>
<?php endwhile; ?>

<?php else : ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3>Sorry, no posts matched your criteria.</h3>
      </div>
    </div>
  </div>

<?php endif; ?>

<?php get_footer();?>