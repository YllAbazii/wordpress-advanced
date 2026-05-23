<?php get_header(); ?>

<div class="container">
	<div class="grid">
		<div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="card">
					<div class="thumb">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail('large'); ?>
						<?php else: ?>
							<img src="<?php echo esc_url( neopulse_get_related_image_url( get_the_ID() ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
						<?php endif; ?>
					</div>
					<h2 class="post-title"><a href="<?php the_permalink(); ?>" style="color:inherit;text-decoration:none"><?php the_title(); ?></a></h2>
					<div class="post-meta"><?php echo get_the_date(); ?> &middot; <?php the_author(); ?></div>
					<div class="excerpt"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; else: ?>
				<p>No posts found.</p>
			<?php endif; ?>
		</div>

		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
