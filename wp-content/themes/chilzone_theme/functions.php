<?php

/**
 * Functions Library
 */

/**
 * The proper way to add stylesheets or javascript files to a WordPress theme is via the enqueue system
 * Learn more: http://code.tutsplus.com/articles/how-to-include-javascript-and-css-in-your-wordpress-themes-and-plugins--wp-24321
 */
function web3_enqueues()
{

    /**Bootstrap CSS */
    wp_register_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('bootstrap-css');

    /**Font Awesome*/
    wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css', array(), '5.12.1', 'all');
    wp_enqueue_style('font-awesome');

    /**
     * I'm registering and enqueuing my custom stylesheet
     * get_stylesheet_directory_uri() points to the theme folder
     */
    wp_register_style('style-child', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('style-child');

    /**
     * Here I'm registering and enqueuing some Javascript dependencies
     */
    wp_register_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.12.9', true);
    wp_enqueue_script('popper-js');
    wp_register_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), '4.0.0', true);

}

add_action('wp_enqueue_scripts', 'web3_enqueues', 20);

// Menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'chilzone-theme' ),
    'secondary' => __('Footer Menu', 'chilzone-theme'),
    'social' => __('Social Media Menu', 'chilzone-theme')
) );




function wpse242371_remove_editor_from_some_pages()
{
    global $post;

    if( ! is_a($post, 'WP_Post') ) {
        return;
    }


    /* basename is used for templates that are in the subdirectory of the theme */
    $current_page_template_slug = basename( get_page_template_slug($post_id) );

    /* file names of templates to remove the editor on */
    $excluded_template_slugs = array(
        'home-page.php',
    );

    if( in_array($current_page_template_slug, $excluded_template_slugs) ) {
        /* remove editor from pages */
        remove_post_type_support('page', 'editor');
        /* if needed, add posts or CPTs to remove the editor on */
        // remove_post_type_support('post', 'editor');
        // remove_post_type_support('movies', 'editor');
    }

}

add_action('admin_enqueue_scripts', 'wpse242371_remove_editor_from_some_pages');

function wp_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'wp_excerpt_length');