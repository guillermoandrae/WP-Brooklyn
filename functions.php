<?php

require 'lib/templating.php';
require 'lib/widgets.php';

if ( ! is_admin() ) {
  add_action( 'init', 'oor_enqueue_scripts' );
}

remove_action( 'wp_head', 'wp_generator' ); 
remove_action( 'wp_head', 'wlwmanifest_link' ); 
remove_action( 'wp_head', 'rsd_link' );
