<?php /* Template Name: Home Page */ ?>

<?php get_header();?>


<div class="container-fluid">
    <div class="row">

        <?php
        $hero_image = get_field('hero_background_image');

        if( $hero_image ): ?>

            <div id="hero-image" style="background-image: url('<?php echo esc_url( $hero_image['url'] ); ?>')">
                
            </div>

        <?php endif; ?>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <main role="main">
                <!-- section -->
                <section>

                    <!-- <?php #if (have_posts()): while (have_posts()): the_post();?>

                    <!-- article -->
                    <!-- <article id="post-<?php #the_ID();?>" <?php #post_class();?>> -->

                        <?php # the_content();?>

                    <!-- </article> -->
                    <!-- /article -->

                    <?php # endwhile;?>

                    <?php # else: ?>

                    <!-- article -->
                    <!-- <article> -->

                        <!-- <h2> -->
                            <?php #_e('Sorry, no page content at this time.', 'textdomain');?>
                        <!-- </h2> -->

                    <!-- </article> -->
                    <!-- /article -->

                    <?php # endif;?>

                <!-- </section> -->
                <!-- /section -->

                <!-- MAIN CONTENT FROM THE TEMPLATE -->
                


            </main>
        </div>
        <!-- <div class="col-sm-3">
            <?php #get_sidebar();?>
        </div> -->
    </div>
</div>

<?php get_footer();?>