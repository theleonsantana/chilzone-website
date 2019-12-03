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