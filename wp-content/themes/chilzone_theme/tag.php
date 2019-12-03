<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <main role="main">
                <!-- section -->
                <section>

                    <h1>
                        <?php _e('Tag Archive: ', 'textdomain');?>
                        <?php echo single_tag_title('', false); ?>
                    </h1>

                    <?php if (have_posts()): while (have_posts()): the_post();?>

                    <!-- article -->
                    <article id="post-<?php the_ID();?>" <?php post_class();?>>

                        <!-- post thumbnail -->
                        <?php if (has_post_thumbnail()): // Check if thumbnail exists ?>
                        <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                            <?php the_post_thumbnail(array(120, 120)); // Declare pixel size you need inside the array ?>
                        </a>
                        <?php endif;?>
                        <!-- /post thumbnail -->

                        <!-- post title -->
                        <h2>
                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                <?php the_title();?>
                            </a>
                        </h2>
                        <!-- /post title -->

                        <!-- post details -->
                        <span class="date">
                            <?php the_time('F j, Y');?>
                            <?php the_time('g:i a');?>
                        </span>
                        <span class="author">
                            <?php _e('Published by', 'textdomain');?>
                            <?php the_author_posts_link();?>
                        </span>
                        <!-- /post details -->

                        <?php edit_post_link();?>

                    </article>
                    <!-- /article -->

                    <?php endwhile;?>

                    <?php else: ?>

                    <!-- article -->
                    <article>
                        <h2>
                            <?php _e('Sorry, nothing to display.', 'textdomain');?>
                        </h2>
                    </article>
                    <!-- /article -->

                    <?php endif;?>

                </section>
                <!-- /section -->

                <div class="navigation pagination">
                    <?php
                    the_posts_pagination();
                    ?>
                </div>
            </main>
        </div>
        <div class="col-sm-3">
            <?php get_sidebar();?>
        </div>
    </div>
</div>

<?php get_footer();?>