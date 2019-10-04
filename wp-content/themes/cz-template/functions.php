<?php

function cz_template_enqueue_styles() {
    wp_enqueue_style( 'parent-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-styles',  get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'cz_template_enqueue_styles');

?>