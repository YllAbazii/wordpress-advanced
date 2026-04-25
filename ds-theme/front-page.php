<?php get_header();?>

<main class="container">
<h1>
    lastest movies
</h1>
<?php
$args = array(
   'post_type' =>'movies',
   'post_per_page' => 10

)
$the_wuery = new WP_Query($args);
?>

<?php if($the_query -> have_post()):?>
` <?php while ($the_query->have_post()): $the_query->the_post();?>
 <article id="post-<?php the_ID();?>"<?php post_class();?>> 
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title():?>
        </a>
    </h2>

    <p>
        Posted on <?php the_time('F j, Y');?>
    </p>
    <?php the excerpt();?>
</article>
`<?php endwhile;?>
<? else:?>
    <p>no post found</p>
    <?php endif;?>


</main>

<? get_footer();?>