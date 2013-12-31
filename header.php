<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo( 'name' ); ?><?php wp_title( ' | ' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/favicon.ico" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="branding" class="navbar">
		<a href="<?php echo site_url(); ?>">
			<h1>
				<?php bloginfo( 'name' ); ?>
			</h1>
		</a>
		<p><?php _e( 'You may learn more <a href="/about">about</a> me <span class="amp">&amp;</span> this site, and you may <a href="/contact">contact</a> me; you may not bite me.' ); ?></p>
	</header>
	<div class="container" role="main">
