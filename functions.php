<?php

define('THEME_ROOT', get_template_directory_uri());
define('CSS_DIR', THEME_ROOT . '/assets/css');
define('JS_DIR', THEME_ROOT . '/assets/js');
define('LIBS_DIR', THEME_ROOT . '/assets/libs');
define('IMG_DIR', THEME_ROOT . '/assets/images');

add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu() {
	register_nav_menu( 'top_menu', 'Меню в шапке' );
	register_nav_menu( 'footer_menu', 'Меню в подвале' );
}

add_action( 'wp_enqueue_scripts', 'archmove_style' );

function archmove_style() {
	wp_enqueue_style( 'normalize-style', CSS_DIR . '/normalize.css' );
	wp_enqueue_style( 'magnific-style', LIBS_DIR . '/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'slick-style', LIBS_DIR . '/slick-1.8.1/slick/slick.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'archmove_scripts' );

function archmove_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script('magnific-script', LIBS_DIR . '/magnific-popup/jquery.magnific-popup.min.js',
	array('jquery'), 'null', true );

	wp_enqueue_script('slick-script', LIBS_DIR . '/slick-1.8.1/slick/slick.min.js',
	array('jquery'), 'null', true );

	wp_enqueue_script('main-script', JS_DIR . '/main.js',
	array('jquery'), 'null', true );

	
}