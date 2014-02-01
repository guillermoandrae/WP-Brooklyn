<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo( 'name' ); ?><?php wp_title( ' | ' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/apple-touch-icon.png">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="branding" role="banner">
		<a href="<?php echo site_url(); ?>">
            <span class="nav-home"><i class="fa fa-home fa-lg"></i></span>
			<h1>
                <span class="site-title"><?php bloginfo( 'name' ); ?></span>
			</h1>
		</a>
		<div class="nav-controls">
		    <span class="nav-note"><?php echo oor_get_nav_note(); ?></span>
            <a class="nav-toggle"><i class="fa fa-bars fa-lg"></i></a>
        </div>
	</header>
	<div id="overlay"></div>
    <?php wp_nav_menu(array('menu' => 'primary', 'container' => 'nav', 'container_class' => 'primary-nav')); ?>
	<div id="container" role="main">