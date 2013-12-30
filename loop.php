<?php /* Template Name: Loop Bit of a */ ?>
<?php if ( ! is_singular() && ! is_home() ) : ?>
<h1 class="page-title">
	<?php if ( is_search() ) : ?>
	Search results for: <em><?php echo get_query_var('s'); ?></em>
	<?php elseif ( is_category() || is_tag() ) : ?>
	Filed in: <em><?php wp_title( '' ); ?></em>
	<?php else : ?>
	<?php wp_title( '' ); ?>
	<?php endif; ?>
</h1>
<?php endif; ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
	<?php if ( is_archive() || is_home() || is_search() ) : ?>
	<a href="<?php the_permalink(); ?>">
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'm/d/Y' ); ?></time>
		<h1>
			<?php
				$title = get_the_title();
				$limit = 55;
				if ( strlen( $title ) > $limit ) { 
					echo substr_replace( $title, '...', $limit );
				} else {
					echo $title;
				}
			?>
		</h1>
	</a>
	<?php else : ?>
	<h1><?php the_title(); ?></h1>
	<span role="author" class="divider">
		<span class="line"><em>by</em></span> Guillermo A. Fisher
	</span>
	<?php the_content(); ?>
	<footer>
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Published here on <?php the_time( 'F d, Y \a\t g:i A' ); ?>.</time>
		<p><?php the_tags( 'Tagged as the following: ', ', ', '.' ); ?></p>
	</footer>
	<span role="author" class="divider">
		<span class="line"><em>Your Feedback</em></span> Civil <span class="amp">&amp;</span> constructive, please.
	</span>
	<?php comments_template(); ?>
	<?php endif; ?>
</article>
<?php endwhile; ?>
<div id="relative-nav">
<?php if ( is_single() ) : ?>
<span class="previous-nav"><?php next_post_link( '%link', '&larr;' ); ?></span>
<span class="next-nav"><?php previous_post_link( '%link', '&rarr;' ); ?></span>
<?php else : ?>
<span class="previous-nav"><?php previous_posts_link( '&larr;' ); ?></span>
<span class="next-nav"><?php next_posts_link( '&rarr;' ); ?></span>
<?php endif; ?>
</div>
<?php else : ?>
<article>
	<p>No posts were found.</p>
</article>
<?php endif; ?>