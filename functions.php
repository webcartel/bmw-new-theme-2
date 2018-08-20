<?php

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

remove_filter( 'the_content', 'wpautop' );

add_theme_support( 'menus' );

function bmw_css() {
	wp_enqueue_style( 'bmw_normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_bootstrap_css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_slick', get_stylesheet_directory_uri() . '/assets/css/slick.css', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_slick_theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_additions', get_stylesheet_directory_uri() . '/assets/packages/demos/additions/css/additions.css ', array(), '1.0.0' );
	wp_enqueue_style( 'bmw_additions_custom', get_stylesheet_directory_uri() . '/assets/css/additions_custom.css', array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'bmw_css' );



function bmw_js() {
	wp_enqueue_script( 'bmw_jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-1.11.2.min.js', array(), null, false);
	wp_enqueue_script( 'bmw_jquery_browser_fix', get_stylesheet_directory_uri() . '/assets/js/jquery.browser.fix.js', array(), null, false);
	wp_enqueue_script( 'bmw_bootstrap_js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, false);

	wp_enqueue_script( 'bmw_jquery_validate', get_stylesheet_directory_uri() . '/assets/js/jquery.validate.min.js', array(), null, true);
	wp_enqueue_script( 'bmw_messages_ru', get_stylesheet_directory_uri() . '/assets/js/locales/messages_ru.js', array(), null, true);
	wp_enqueue_script( 'bmw_jquery_maskedinput', get_stylesheet_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array(), null, true);
	wp_enqueue_script( 'bmw_jquery_responsivetext', get_stylesheet_directory_uri() . '/assets/js/jquery.responsivetext.js', array(), null, true);
	wp_enqueue_script( 'bmw_slick', get_stylesheet_directory_uri() . '/assets/js/slick.js', array(), null, true);
	wp_enqueue_script( 'bmw_script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), null, true);
	wp_enqueue_script( 'bmw_inputmask', get_stylesheet_directory_uri() . '/assets/js/inputmask.js', array(), null, true);
	wp_enqueue_script( 'bmw_inputmask_bundle', get_stylesheet_directory_uri() . '/assets/js/jquery.inputmask.bundle.js', array(), null, true);
	wp_enqueue_script( 'bmw_additions_script', get_stylesheet_directory_uri() . '/assets/packages/demos/additions/js/additions_script.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'bmw_js' );

