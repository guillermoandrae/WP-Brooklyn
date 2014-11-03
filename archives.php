<?php /* Template Name: Archives */ ?>
<?php get_header(); ?>
	<article <?php post_class('archives'); ?>>
		<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>

		<div class="post-tags"></div>
		<div class="post-wrapper">
			<ul>
				<?php wp_get_archives('type=yearly'); ?>
			</ul>
		</div>
	</article>
<?php get_footer(); ?>