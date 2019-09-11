<?php get_header(); ?>

<!--Begin Site Content--> 

<div class="content">

<?php 
if (have_posts()) {
  while (have_posts()) {
    the_post();
    the_content(); 
  }
} ?>

<!--End Site Content-->


<!--Begin Our Vision-->

    <div id="curve-top"></div> 
      
    <ul class="vision-container">

<?php 

    $args = array(
     'post_type' => array('post'),
     'post_status' => 'publish',
     'posts_per_page' => 1,
     'ignore_sticky_posts' => true,
     'tax_query' => array(
    array (
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => 'vision',
    )
),
     );

    $ourVision = new WP_Query($args);
    
    
    if($ourVision->have_posts()):
      while($ourVision->have_posts()): $ourVision->the_post();
      ?>

  <li class="items">           

      <?php the_post_thumbnail( array(230, 230) ); ?>
      
      <h4><?php the_title() ?></h4>
        <h5><?php the_content(); ?> </h5>

     <?php endwhile; ?>
     <?php else: ?>

      <p>There are no recent posts right now</p>

     <?php endif; ?> </li>
 
</div>

<div id="curve-bottom"></div>  

<!--End Our Vision-->


<!--Begin Our Values-->

<h1>Our Values</h1>

<ul class="container">

<?php
    
        $args = array(
         'order' => 'ASC',
         'post_type' => array('post'),
         'post_status' => 'publish',
         'posts_per_page' => 3,
         'ignore_sticky_posts' => true,
         'tax_query' => array(
        array (
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'values',
        )
    ),
         );

        $ourValues = new WP_Query($args);
        
        
        if($ourValues->have_posts()):
          while($ourValues->have_posts()): $ourValues->the_post();
          ?>

      <li class="items">           

          <?php the_post_thumbnail( array(230, 230) ); ?>
          
          <h4><?php the_title() ?></h4>
            <h5><?php the_content(); ?> </h5>

         <?php endwhile; ?>
         <?php else: ?>

          <p>There are no recent posts right now</p>

         <?php endif; ?> </li>
        
    </div>

    <!--End Our Values-->

    
<?php get_footer(); ?>