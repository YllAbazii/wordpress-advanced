<?php
// Theme setup: supports, menus, and image sizes
if ( ! function_exists( 'neopulse_setup' ) ) {
    function neopulse_setup() {
        // Let WordPress manage the document title
        add_theme_support( 'title-tag' );

        // Support for post thumbnails
        add_theme_support( 'post-thumbnails' );

        // Custom logo support
        add_theme_support( 'custom-logo', array(
            'height'      => 80,
            'width'       => 200,
            'flex-height' => true,
            'flex-width'  => true,
        ) );

        // HTML5 markup support
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

        // Register a primary navigation menu
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'neopulse' ),
        ) );
    }
    add_action( 'after_setup_theme', 'neopulse_setup' );
}

// Enqueue styles and scripts
function neopulse_assets() {
    wp_enqueue_style( 'neopulse-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Small script for mobile menu toggle
    wp_enqueue_script( 'neopulse-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'neopulse_assets' );

/**
 * Return a related/fallback image URL (data URI SVG) based on post categories or content.
 * - Tries to find first image in post content
 * - Falls back to a category-aware SVG placeholder
 */
function neopulse_get_related_image_url( $post_id = 0 ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }

    // 1) If post has featured image, return its medium URL (caller should still use the_post_thumbnail if preferred)
    if ( has_post_thumbnail( $post_id ) ) {
        $url = wp_get_attachment_image_url( get_post_thumbnail_id( $post_id ), 'medium' );
        if ( $url ) return esc_url_raw( $url );
    }

    // 2) Try to find first <img> in post content
    $content = get_post_field( 'post_content', $post_id );
    if ( $content ) {
        if ( preg_match( '/<img[^>]+src=[\'\"]([^\'\"]+)[\'\"][^>]*>/i', $content, $m ) ) {
            return esc_url_raw( $m[1] );
        }
    }

    // 3) Prefer local placeholder files based on category slug
    $cats = get_the_category( $post_id );
    $slug = '';
    if ( ! empty( $cats ) && isset( $cats[0]->slug ) ) {
        $slug = $cats[0]->slug;
    }

    $placeholders = array(
        'news' => 'news.svg',
        'reviews' => 'reviews.svg',
        'gallery' => 'gallery.svg',
        'tournaments' => 'tournaments.svg',
    );

    $base = get_template_directory_uri() . '/assets/img/placeholders/';
    if ( $slug && isset( $placeholders[ $slug ] ) ) {
        return esc_url_raw( $base . $placeholders[ $slug ] );
    }

    // default placeholder file
    return esc_url_raw( $base . 'default.svg' );
}

// Register widget area
function neopulse_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'neopulse' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'neopulse' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'neopulse_widgets_init' );

// Customize excerpt more
function neopulse_excerpt_more( $more ) {
    return ' &hellip; <a class="read-more" href="' . get_permalink() . '">' . __( 'Read more', 'neopulse' ) . '</a>';
}
add_filter( 'excerpt_more', 'neopulse_excerpt_more' );

?>
