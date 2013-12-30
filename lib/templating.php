<?php

define('OOR_JS_PATH', get_stylesheet_directory_uri() . '/js');

function oor_enqueue_scripts()
{
  // queue up styles
  wp_enqueue_style( 'default', get_stylesheet_uri() );
  wp_enqueue_style( 'fonts', 'http://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,900italic,400,700,900|Ruda:400,900,700' );
        
  // queue up CDN scripts
  wp_enqueue_script( 'oor-jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js', null, null, true );
  wp_enqueue_script( 'oor-modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js' );
        
  // queue up local scripts
  $scripts = [ 'plugins' => '/plugins.js', 'main' => '/main.js' ];
  foreach ($scripts as $alias => $path) {
    wp_enqueue_script( $alias, OOR_JS_PATH . $path, null, null, true );
  }
}

