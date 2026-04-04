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

function thename_widgets_init(){
    register_sidebar(
        array(
            'name'   =>__('Primary Sidebar','theme_name'),
            'id'     =>'sidebar1',
            'before_widget'    =>'a<aside id="%1$s" class="widget %2$s">',
            'after_widget'     =>'a</aside>',
            'before_title'     =>'<h3 class="widget-title>',
            'after_title'      =>'</h3>'
        )
    )
}
add_action('widget_init','themename_widgets_init')


class Foo_widget extends WP_widget{
 public function __construct()
 {
    parent::__construct(
        'foo_widget',
        'A foo Widget   '
    )
 }
 public function widget($args,$instance){
    echo $args['before_widget'];
    echo '<p> hello world</p>';
    echo $args['after_widget'];
     }

     public function form($instance){
        echo'<p> no options yet</p>';
     }
    public function update($new_instance,$old_instance){
        return $new_instance
    }
}

 function register_foo_widget(){
    register_widget('Foo_widget');
 } 

add_action('widgets_init','register_foo_widget');




?>