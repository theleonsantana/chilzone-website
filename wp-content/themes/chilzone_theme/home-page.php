<?php /* Template Name: Home Page */ ?>

<?php get_header();?>

<div class="container-fluid">
    <div class="row">
        <?php
        $hero_image = get_field('hero_background_image');
        if( $hero_image ): ?>
            <div id="hero-image" style="background-image: url('<?php echo esc_url( $hero_image['url'] ); ?>')">  
                <div class="container">
                    <div class="row">
                    <div class="col-sm-5 helper-position">
                        <?php
                        $hero_btn = get_field('hero_button')
                        ?>
                        <div class="hero-container">
                            <h3 class="headline"><?php the_field('hero_headline_slogan');?></h3>
                            <h4 class="tagline"><?php the_field('hero_banner_tagline');?></h4>
                            <p class="hero-content"><?php the_field('hero_text')?></p>
                            <a href="<?php echo esc_url( $hero_btn );?>" class="learn-more-button">Learn More</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center home-quote-container">
        <div class="col-sm-6">
            <?php
            $home_quote = get_field('home_quote', false, false);
            $author_quote = get_field('author_quote')
            ?>
            <?php if($home_quote): ?>
                <p class="home-quote">
                    "<?php echo $home_quote?>"
                </p>
            <?php endif;?>
        <?php if($author_quote): ?>
            <p class="quote-cite">- <?php echo $author_quote?></p>
        <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 home-video">
            <?php the_field('home_page_video'); ?>
        </div>
    </div>
</div>
<img class="upper-shape" src="<?php bloginfo('stylesheet_directory')?>/images/Rectangle8.svg" alt=""/>
<div class="container-fluid our-vision-container">
    <div class="container our-vision">
        <div class="row">
            <div class="col-sm-5">
                <h3><?php the_field('our_vision_headline')?></h3>
                <?php echo the_field('our_vision_content')?>
            </div>
            <div class="col-sm-7">
            <?php if( have_rows('images_in_our_vision') ): ?>
            <?php while( have_rows('images_in_our_vision') ): the_row(); 
                    // Get sub field values.
                    $image = get_sub_field('single_our_vision_image'); ?>
                    <div>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<img class="lower-shape" src="<?php bloginfo('stylesheet_directory')?>/images/Rectangle8copy.svg" alt=""/>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <?php 
        $experience_img = get_field('home_flavor_image');
        $experience_credits = get_field('experience_credits')
        ?>
            <img src="<?php echo esc_url( $experience_img['url'] ); ?>" alt="<?php echo esc_attr( $experience_img['alt'] ); ?>"/>
        <?php if($experience_credits): ?>
            <cite>- <?php echo $experience_credits?></cite>
        <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>Our Values</h3>    
        </div>
        <div class="col-sm-4">
            <?php if( have_rows('first_value') ): ?>
            <?php while( have_rows('first_value') ): the_row(); 
                    // Get sub field values.
                    $icon = get_sub_field('first_icon'); 
                    $headline = get_sub_field('first_value_headline');
                    $content = get_sub_field('first_value_content');
                    ?>
                    <div>
                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                        <h4><?php echo $headline?></h4>
                        <?php echo $content?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-sm-4">
            <?php if( have_rows('second_value') ): ?>
            <?php while( have_rows('second_value') ): the_row(); 
                    // Get sub field values.
                    $icon = get_sub_field('second_icon'); 
                    $headline = get_sub_field('second_value_headline');
                    $content = get_sub_field('second_value_content');
                    ?>
                    
                    <div>
                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                        <h4><?php echo $headline?></h4>
                        <?php echo $content?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-sm-4">
            <?php if( have_rows('third_value') ): ?>
            <?php while( have_rows('third_value') ): the_row(); 
                    // Get sub field values.
                    $icon = get_sub_field('third_icon'); 
                    $headline = get_sub_field('third_value_headline');
                    $content = get_sub_field('third_value_content');
                    ?>
                    <div>
                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                        <h4><?php echo $headline?></h4>
                        <?php echo $content?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <?php
        $mid_banner_img = get_field('mid_banner_image');
        $mid_banner_headline = get_field('mid_headline');
        $mid_banner_content = get_field('mid_content');
        $mid_banner_button = get_field('mid_read_more');

        if( $mid_banner_img ): ?>
            <div id="mid-banner" style="background-image: url('<?php echo esc_url( $mid_banner_img['url'] ); ?>')">  
                <div class="container">
                    <div class="row">
                    <div class="col-sm-5 helper-position">
                        <div class="hero-container">
                            <h4 class="tagline"><?php echo $mid_banner_headline;?></h4>
                            <p class="hero-content"><?php echo $mid_banner_content; ?></p>
                            <a href="<?php echo esc_url( $mid_banner_button );?>">Read More</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>Partners</h3>    
        </div>
        <?php
        $partner_1 = get_field('partner_1');
        $partner_2 = get_field('partner_2');
        $partner_3 = get_field('partner_3');
        $partner_4 = get_field('partner_4');
        $partner_5 = get_field('partner_5');
        $partner_6 = get_field('partner_6');
        
        ?>
        <div class="col-sm-2">
            <img src="<?php echo esc_url( $partner_1['url'] ); ?>" alt="<?php echo esc_attr( $partner_1['alt'] ); ?>" />
        </div>
        <div class="col-sm-2">
            <img src="<?php echo esc_url( $partner_2['url'] ); ?>" alt="<?php echo esc_attr( $partner_2['alt'] ); ?>" />
        </div>
        <div class="col-sm-2">
            <img src="<?php echo esc_url( $partner_3['url'] ); ?>" alt="<?php echo esc_attr( $partner_3['alt'] ); ?>" />
        </div>
        <div class="col-sm-2">
            <img src="<?php echo esc_url( $partner_4['url'] ); ?>" alt="<?php echo esc_attr( $partner_4['alt'] ); ?>" />
        </div>
        <div class="col-sm-2">
            <img src="<?php echo esc_url( $partner_5['url'] ); ?>" alt="<?php echo esc_attr( $partner_5['alt'] ); ?>" />
        </div>
        <div class="col-sm-2">
            <img src="<?php echo esc_url( $partner_6['url'] ); ?>" alt="<?php echo esc_attr( $partner_6['alt'] ); ?>" />
        </div>
    </div>
</div>


<?php get_footer();?>