<?php

function cz_template_enqueue_styles() {
    wp_enqueue_style( 'parent-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-styles',  get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'cz_template_enqueue_styles');

function remove_parent_theme_features()
{
    // @link http://codex.wordpress.org/Function_Reference/unregister_nav_menu
    unregister_nav_menu( 'menu-1' );
    unregister_nav_menu( 'footer' );
    unregister_nav_menu( 'social' );

}
add_action( 'after_setup_theme', 'remove_parent_theme_features', 20 );

// Menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'cz-template' ),
) );

?>