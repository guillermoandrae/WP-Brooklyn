<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <div class="post-tags">
        <?php the_tags( '<i class="fa fa-tag"></i> ', ', <i class="fa fa-tag"></i> ' ); ?>
    </div>
    <div class="post-wrapper">
        <div class="post-content">
            <?php if ( is_archive() ) : the_excerpt(); else : the_content(); endif; ?>
        </div>
        <aside>
            <ul>
                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i> <?php the_time( 'm/j/Y' ); ?></a></li>
                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i> No. <?php the_ID(); ?></a></li>
                <li><a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( '0 Responses', '1 Response', '% Responses' ); ?></a></li>
            </ul>
        </aside>
    </div>
    <?php if ( !is_page() && !is_archive() ) : ?>
        <footer>
            <span class="previous-nav"><?php next_post_link( '%link', '<i class="fa fa-chevron-circle-left fa-4x"></i>', true ); ?></span>
            &nbsp;
            <span class="next-nav"><?php previous_post_link( '%link', '<i class="fa fa-chevron-circle-right fa-4x"></i>', true ); ?></span>
        </footer>
        <?php comments_template(); ?>
    <?php endif; ?>
</article>
<?php endwhile; ?>
<?php endif; ?>