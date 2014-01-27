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


function oor_get_nav_note()
{
    $notes = array(
        '<q>To people from \'Brooklyn-Brooklyn\' North Brooklyn is really just South Queens.</q> - <cite><a href="http://chickenonthehudson.com/">Cat Agonis</a></cite>',
        '<q>It\'s ironic that no matter where I go, I meet people from Brooklyn. I\'m proud of that heritage. It\'s where I\'m from, who I am.</q> - <cite><a href="http://en.wikipedia.org/wiki/Howard_Schultz">Howard Schultz</a></cite>',
        '<q>Brooklyn is not the easiest place to grow up in, although I wouldn\'t change that experience for anything.</q> - <cite><a href="http://www.neildiamond.com">Neil Diamond</a></cite>',
        '<q>I didn\'t appreciate Brooklyn until I left it.</q> - <cite><a href="http://en.wikipedia.org/wiki/Rosie_Perez">Rosie Perez</a></cite>',
    );
    $note = __( $notes[array_rand($notes)] );
    return $note;
}

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