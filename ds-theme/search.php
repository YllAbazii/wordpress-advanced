<?php get_header();?>
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" clas ="suite-main">

        <h1>Search results</h1>
 
        <?php 
        global $wp_query;
        $total_results=$wp_query->found_posts;
        ?>

        <p><?php echo $total_results; ?></p>

<?php if(have_posts()) :?>
  <?php while (have_posts() ):the_post();?>
  <article>
    <h2>
        <a href="<?phpthe_permalink();?>">
            <?php the_title();?>
        </a>
    </h2>
    <p><?php the_excerpt();?></p>
</article>

<?php endwhile; ?>
<?php else: ?>
    <p>no results found.</p>
    <?php endif; ?>
</main>

</div>

</div>

<?php get_footer();?>