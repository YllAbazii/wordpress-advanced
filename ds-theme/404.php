<?php
/*Template Name: 404 Page 
*/
?>
<?php get_header();?>
<div class="">
    <h1>404 - Page Not Found</h1>
    <p>Sorry, the page you are looking for does not exist. Please check the URL or return to the <a href="<?php echo home_url(); ?>">homepage</a>.</p>
    <p>you can also try searching for what you are looking for:</p>
    <?php get_search_form(); ?>

</div>
<?php get_footer();?>