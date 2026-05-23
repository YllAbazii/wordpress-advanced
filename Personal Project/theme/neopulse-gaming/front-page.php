<?php
/*
 * Front Page Template
 */
get_header(); ?>

<div class="container">
    <section class="hero card">
        <h1>Welcome to NeoPulse <span style="margin-left:8px">🍕</span></h1>
        <p>Your hub for gaming news, reviews, galleries and tournaments — with a slice of fun.</p>
        <div style="margin-top:18px;display:flex;gap:12px;justify-content:center;flex-wrap:wrap">
            <a class="cta-btn" data-toast="Opening news... 🍕" href="<?php echo esc_url( home_url('/news/') ); ?>">🍕 News</a>
            <a class="cta-btn" data-toast="Loading reviews... 🍕" href="<?php echo esc_url( home_url('/reviews/') ); ?>">🍕 Reviews</a>
            <a class="cta-btn" data-toast="Entering gallery... 🍕" href="<?php echo esc_url( home_url('/gallery/') ); ?>">🍕 Gallery</a>
            <a class="cta-btn" data-toast="Viewing tournaments... 🍕" href="<?php echo esc_url( home_url('/tournaments/') ); ?>">🍕 Tournaments</a>
        </div>
    </section>

    <section class="container" style="margin-top:18px">
        <h2 style="margin-bottom:12px">Latest Posts</h2>
        <div class="grid">
            <div>
                <?php
                $recent = new WP_Query( array( 'posts_per_page' => 6 ) );
                if ( $recent->have_posts() ) :
                    while ( $recent->have_posts() ) : $recent->the_post(); ?>
                        <article class="card">
                            <div class="thumb">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else: ?>
                                    <img src="<?php echo esc_url( neopulse_get_related_image_url( get_the_ID() ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                                <?php endif; ?>
                            </div>
                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="post-meta"><?php echo get_the_date(); ?></div>
                            <div class="excerpt"><?php the_excerpt(); ?></div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                else: ?>
                    <p>No posts yet.</p>
                <?php endif; ?>
            </div>

            <div class="sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
