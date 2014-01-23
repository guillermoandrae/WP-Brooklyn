<?php /* Template Name: Home */
get_header();
get_template_part( 'loop', 'singular' );
?>
    <span class="previous-nav"><?php previous_posts_link( '<i class="fa fa-chevron-circle-left fa-4x"></i>' ); ?></span>
    &nbsp;
    <span class="next-nav"><?php next_posts_link( '<i class="fa fa-chevron-circle-right fa-4x"></i>' ); ?></span>
<?php get_footer(); ?>