<?php

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

function bmw_css() {
	wp_enqueue_style( 'bmw_normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_slick', get_stylesheet_directory_uri() . '/assets/css/slick.css', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_slick_theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_additions', get_stylesheet_directory_uri() . '/assets/packages/demos/additions/css/additions.css ', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_additions_custom', get_stylesheet_directory_uri() . '/assets/css/additions_custom.css', array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'bmw_css' );



function bmw_js() {
	wp_enqueue_script( 'my_head_js', get_stylesheet_directory_uri() .'/js/my_script.js', array(), null );
}
add_action('wp_enqueue_scripts', 'bmw_js' );

