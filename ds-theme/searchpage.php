<?php
/*
Template Name: Search Page
*/
?>
<?php get_header();?>
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1>Search Posts</h1>
            <p>My site features articles about 
                <a href="/category/wordpress">wordpress</a>
                <a href="/category/web-design">web design</a>

                <p>to search my website,please use the form below</p>
                <?php get_search_form();?>
            </p>
        </main>    
    </div>
</div>