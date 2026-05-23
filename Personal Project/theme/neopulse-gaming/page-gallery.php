<?php
/*
 * Gallery Page Template
 */
get_header(); ?>

<div class="container">
    <h1>Gallery</h1>
    <p>Upload images to this page using the editor or use the gallery block.</p>

    <div class="gallery-grid">
        <?php
        // Example: show attachments from this page
        $images = get_attached_media( 'image', get_the_ID() );
        if ( $images ):
            foreach ( $images as $img ):
                $src = wp_get_attachment_image_url( $img->ID, 'large' );
                $thumb = wp_get_attachment_image_url( $img->ID, 'medium' ); ?>
                <a class="gallery-item" href="<?php echo esc_url( $src ); ?>">
                    <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( get_post_meta( $img->ID, '_wp_attachment_image_alt', true ) ); ?>">
                </a>
            <?php endforeach;
        else:
            // No attachments — show AI-generated placeholder images from assets/img/placeholders/
            $base = get_template_directory_uri() . '/assets/img/placeholders/';
            $placeholders = array( 'news.svg', 'reviews.svg', 'gallery.svg', 'tournaments.svg', 'default.svg' );
            foreach ( $placeholders as $ph ) :
                $url = $base . $ph; ?>
                <a class="gallery-item" href="<?php echo esc_url( $url ); ?>">
                    <img src="<?php echo esc_url( $url ); ?>" alt="Placeholder image">
                </a>
            <?php endforeach;
        endif; ?>
    </div>
</div>

<?php get_footer(); ?>
