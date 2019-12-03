<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <main role="main">
                <!-- section -->
                <section>

                    <h1>
                        <?php the_title();?>
                    </h1>

                    <?php if (have_posts()): while (have_posts()): the_post();?>

                    <!-- article -->
                    <article id="post-<?php the_ID();?>" <?php post_class();?>>

                        <?php the_content();?>

                    </article>
                    <!-- /article -->

                    <?php endwhile;?>

                    <?php else: ?>

                    <!-- article -->
                    <article>

                        <h2>
                            <?php _e('Sorry, no page content at this time.', 'textdomain');?>
                        </h2>

                    </article>
                    <!-- /article -->

                    <?php endif;?>

                </section>
                <!-- /section -->
            </main>
        </div>
        <div class="col-sm-3">
            <?php get_sidebar();?>
        </div>
    </div>
</div>

<?php get_footer();?>