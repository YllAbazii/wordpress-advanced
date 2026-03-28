<?php 

function ds_theme_assets(){
    wp_enqueue_style(
        'ds-style',
        get_stylesheet_uri(),
        array(),
        '1.0',
        'all'
    );

wp_enqueue_script()
        'ds-script',
        get_template_directory_uri(, 'js/custom.js'
        array(),
        '1.0',
        'all'
    );
}

add_action('wp_enqueue_scripts','ds_theme_assets');

function ds_setup(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary Menu')
}

add_action('init','ds_setup');

function ds_add_bootstrap_cdn(){
wp_enqueue_style(     
'bootstrap-css',
    '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css'
     array(),
     '4.6.2',
     'all'
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js'
    array(),
    '4.6.2',
    true
    
    );
    }
add_action('wp_enqueue_scripts','ds_add_bootstrap_cdn')
?>