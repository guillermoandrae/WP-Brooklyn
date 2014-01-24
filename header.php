<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo( 'name' ); ?><?php wp_title( ' | ' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="robots" content="index, follow">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/apple-touch-icon.png">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="branding" role="banner">
		<a href="<?php echo site_url(); ?>">
			<h1>
				<i class="fa fa-home fa-lg"></i>
                <?php bloginfo( 'name' ); ?>
			</h1>
		</a>
		<div class="nav-controls">
            <span class="nav-note"><?php _e( 'I know everything here is awesome but you may not bite me.' ); ?></span>
            <a class="nav-toggle"><i class="fa fa-bars fa-lg"></i></a>
        </div>
	</header>
    <nav class="primary-nav" role="navigation">
        <ul>
            <li><a href="<?php echo home_url( '/profile'); ?>">Profile</a></li>
            <li><a href="<?php echo home_url( '/colophon'); ?>">Colophon</a></li>
            <li><a href="<?php echo home_url( '/contact'); ?>">Contact</a></li>
        </ul>
    </nav>
	<div class="container" role="main">
