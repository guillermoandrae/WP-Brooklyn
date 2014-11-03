<?php
get_header();
get_template_part('loop');
?>
	<footer class="relative-nav">
		<span
			class="previous-nav"><?php previous_posts_link('<i class="fa fa-chevron-circle-left fa-4x"></i>'); ?></span>
		&nbsp;
		<span class="next-nav"><?php next_posts_link('<i class="fa fa-chevron-circle-right fa-4x"></i>'); ?></span>
	</footer>
<?php get_footer(); ?>