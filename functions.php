<?php

define('OOR_VENDOR_PATH', get_stylesheet_directory_uri() . '/vendor');
define('OOR_JS_PATH', get_stylesheet_directory_uri() . '/assets/js');

function oor_the_title_excerpt()
{
    $title = get_the_title();
    $limit = 30;
    if ( strlen( $title ) > $limit ) {
        echo substr_replace( $title, '...', $limit );
    } else {
        echo $title;
    }
}

function oor_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'oor_excerpt_length', 999 );

register_sidebar(array(
    'name' => __( 'Right Hand Sidebar' ),
    'id' => 'right-sidebar',
    'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
    'before_title' => '<h1>',
    'after_title' => '</h1>'
));

function oor_enqueue_scripts()
{
    // queue up styles
    wp_enqueue_style( 'default', get_stylesheet_uri() );
    wp_enqueue_style( 'font-awesome', OOR_VENDOR_PATH . '/font-awesome/css/font-awesome.min.css' );

    // queue up jQuery
    wp_enqueue_script( 'oor-jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', null, null, true );

    // queue up Modernizr
    wp_enqueue_script( 'oor-modernizr', OOR_VENDOR_PATH . '/modernizr/modernizr.js' );

    // queue up local scripts
    $scripts = [ 'plugins' => '/plugins.js', 'main' => '/main.js' ];
    foreach ($scripts as $alias => $path) {
        wp_enqueue_script( $alias, OOR_JS_PATH . $path, null, null, true );
    }
}
if ( ! is_admin() ) {
  add_action( 'init', 'oor_enqueue_scripts' );
}

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );