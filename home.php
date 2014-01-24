<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
    <header>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>
    </header>
<?php if ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>">
            <span class="post-link"><?php _e( 'Recently Posted' ); ?> <i class="fa fa-chevron-circle-right"></i></span>
            <div class="post-excerpt">
                <h1><?php oor_the_title_excerpt(); ?></h1>
                <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>
                    <?php _e( 'Published' ); ?> <?php the_time( 'F j, Y \a\t g:i A T' ); ?>
                </time>
            </div>
        </a>
    </article>
<?php endif; ?>
<?php get_footer(); ?>