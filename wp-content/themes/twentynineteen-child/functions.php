<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-style',  get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');


function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 1250,
		'width'       => 2084,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


?>