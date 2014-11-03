<?php

define( 'OOR_VENDOR_PATH', get_stylesheet_directory_uri() . '/vendor' );
define( 'OOR_JS_PATH', get_stylesheet_directory_uri() . '/assets/js' );

/**
 * Prints an excerpt of the title based on the provided character title.
 */
function wpbk_the_title_excerpt()
{
				$limit = 30;
				if ( strlen( $title ) > $limit ) {
								_e( esc_html( substr_replace(  $title, '...', $limit ) ) );
				} else {
									_e( esc_html( $title ) );
					}
}

/**
 * Displays a random quote about Brooklyn.
 *
 * @return array The quote/note to show.
 */
function wpbk_get_nav_note()
{
				$notes = array(
								'<q>To people from \'Brooklyn-Brooklyn\' North Brooklyn is really just South Queens.</q> - <cite><a href="http://chickenonthehudson.com/">Cat Agonis</a></cite>',
								'<q>It\'s ironic that no matter where I go, I meet people from Brooklyn. I\'m proud of that heritage. It\'s where I\'m from, who I am.</q> - <cite><a href="http://en.wikipedia.org/wiki/Howard_Schultz">Howard Schultz</a></cite>',
								'<q>Brooklyn is not the easiest place to grow up in, although I wouldn\'t change that experience for anything.</q> - <cite><a href="http://www.neildiamond.com">Neil Diamond</a></cite>',
								'<q>I didn\'t appreciate Brooklyn until I left it.</q> - <cite><a href="http://en.wikipedia.org/wiki/Rosie_Perez">Rosie Perez</a></cite>',
				);
					$note = __( esc_attr( $notes[ array_rand( $notes ) ] ) );
					return $note;
}

/**
 * Queues up the needed JS and CSS files.
 */
function wpbk_enqueue_scripts()
{
				// get theme version
				$theme = wp_get_theme();
				$version = $theme->version;

				// queue up styles
				wp_enqueue_style( 'default', get_stylesheet_uri(), [], $version );
				wp_enqueue_style( 'font-awesome', OOR_VENDOR_PATH . '/font-awesome/css/font-awesome.min.css' );

				// queue up jQuery
				wp_enqueue_script( 'oor-jquery', OOR_VENDOR_PATH . '/jquery/dist/jquery.min.js', null, null, true );

				// queue up Modernizr
				wp_enqueue_script( 'oor-modernizr', OOR_VENDOR_PATH . '/modernizr/modernizr.js' );

				// queue up local scripts
				$scripts = ['plugins' => '/plugins.js', 'main' => '/main.js'];
				foreach ( $scripts as $alias => $path ) {
								wp_enqueue_script( $alias, OOR_JS_PATH . $path, null, null, true );
					}
}

if ( ! is_admin() ) {
				add_action( 'init', 'oor_enqueue_scripts' );
}

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
