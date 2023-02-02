<?php
/**
 * Displays the site header.
 *
 */
?>

<header class="header w-100 position-absolute z-index-10">
	<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">

				<?php if ( is_archive('archive-service.php') ) { ?>

					<?php if (get_theme_mod('contrast_logo')) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_theme_mod('contrast_logo'); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="custom-logo">
						</a>
					<?php else : ?>
						<?php the_custom_logo(); ?>
					<?php endif; ?>
					
				<?php } else { ?>
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php endif; ?>
				<?php } ?>

				<button class="navbar-toggler js-navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
				</button>
			
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'depth'			  => 2,
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'main-menu',
						'menu_class'      => 'navbar-nav ms-auto mb-4',
						'list_item_class' => 'nav-item',
						'link_class'      => 'nav-link',
					)); ?>
			</div>
		</nav>
	<?php endif; ?>
</header>
