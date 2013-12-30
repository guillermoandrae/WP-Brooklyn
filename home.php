<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
		<header id="site-header">
			<hgroup>
				<h1 class="page-title"><?php bloginfo( 'name' ); ?></h1>
				<h2><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
		</header>
		<?php get_template_part( 'loop' ); ?>
<?php get_footer(); ?>