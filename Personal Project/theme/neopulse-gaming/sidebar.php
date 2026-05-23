<aside class="sidebar card">
    <div class="widget">
        <h3 class="widget-title">Quick Links</h3>
        <p style="display:flex;gap:8px;flex-wrap:wrap">
            <a class="cta-btn" href="<?php echo esc_url( home_url('/news/') ); ?>">News</a>
            <a class="cta-btn" href="<?php echo esc_url( home_url('/gallery/') ); ?>">Gallery</a>
        </p>
    </div>

    <div class="widget">
        <h3 class="widget-title">Add Photos</h3>
        <p>To add photos here, edit the page in the WordPress editor and upload images to the page or use the Gallery block.</p>
    </div>

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : dynamic_sidebar( 'sidebar-1' ); endif; ?>
</aside>
