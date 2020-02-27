<?php /* Template Name: Home Page */ ?>

<?php get_header();?>

<div class="row justify-content-center">
  <div class="col-sm-6">

    <h3 class="footer-heading">Contact Us!</h3>
    <?php
    echo do_shortcode( '[ninja_form id=1]' );
    ?>
  </div>
</div>

<?php get_footer();?>