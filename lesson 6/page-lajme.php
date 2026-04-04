<?php 


get_header();

?>

<div class="container my-5">
    <h1 class="mb-4">Lajme</h1>
    <?php 
    $args = array(
        'post-type'  =>'post',
        'post_per_page' =>10,
        'category_name' =>'lajme'
    );
    $query = new WP_query($args);

    if($query->have_posts()):
    while($query->have_post) :$query->have_post():
        ?>
        <div class="mb-4 p-3 border rounded">
            <h2>
                <a href="<?php the_permalink();?>">
                    <?php the_title(); ?>
                </a>
            </h2>
        </div>
        <?php
    endwhile;
else:
    echo '<p> nuk ka postime ne kategorin lajm </p>'
endif;
wp_reset_postdata();
?>

</div>

<?php get footer();?>