<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>

<header class="header-wrapper">
	<div class="container" style="display:flex;align-items:center;justify-content:space-between">
		<div class="site-title">
			<span class="logo-emoji">🍕</span>
			<?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : the_custom_logo(); else: ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:inherit;text-decoration:none;"><strong><?php bloginfo( 'name' ); ?></strong></a>
			<?php endif; ?>
			<small style="margin-left:8px;color:#ffd9a8;font-weight:600">— Pizza powered</small>
		</div>

		<nav class="site-nav" role="navigation" aria-label="Primary Menu">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => '',
				'depth' => 1,
			) );
			?>
		</nav>

		<div style="display:flex;align-items:center;gap:10px">
			<a class="cta-btn order-btn" href="#order" data-toast="Order placed! A pizza is on the way 🍕">Order Pizza</a>
			<button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">Menu</button>
		</div>
	</div>
</header>

<section class="hero">
	<div class="container">
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p><?php bloginfo( 'description' ); ?></p>
	</div>
</section>

<main id="content">
