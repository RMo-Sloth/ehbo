<?php
add_action( 'wp_enqueue_scripts', function(){
	// load the stylesheet
	wp_enqueue_style( 'style.css', get_stylesheet_uri() );
  wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', array(), null, 'all' );
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), null, 'all'); // integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"

  // load scripts
  wp_enqueue_script( 'global.js', get_template_directory_uri().'/js/global.js', array(), null, true );
});

add_action( 'after_setup_theme', function(){
  add_theme_support( 'post-thumbnails' );
});

add_action( 'init', function() {
	register_nav_menu('main-menu',__( 'hoofdmenu' ));
});
