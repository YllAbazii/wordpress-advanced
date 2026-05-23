<?php get_header(); ?>

<div class="container">
    <div class="grid">
        <div>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="card">
                    <h1><?php the_title(); ?></h1>
                    <div class="thumb">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url( neopulse_get_related_image_url( get_the_ID() ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="entry-content"><?php the_content(); ?></div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
