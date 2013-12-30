<?php
add_action ( 'init', 'oor_enqueue_scripts' );
function oor_enqueue_scripts(){
	if ( is_admin() ) return;
	wp_enqueue_style( 'default', get_stylesheet_uri() );
	wp_enqueue_style( 'fonts', 'http://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,900italic,400,700,900|Ruda:400,900,700' );
	wp_enqueue_script( 'jquery', null, null, null, true );
	wp_enqueue_script( 'html5shiv', get_stylesheet_directory_uri() . '/js/html5shiv.js' );
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/javascript.php', null, null, true );
}

register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));