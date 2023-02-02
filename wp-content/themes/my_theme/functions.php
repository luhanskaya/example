<?php
# Enqueue Custom Scripts
define('DIR', get_template_directory_uri() . '/');
define('PATH_IMG', DIR.'images/');

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style( 'main.css', DIR . 'dist/main.css', false, null);
    wp_enqueue_script('main.js', DIR . 'dist/main.js', ['jquery'], null, true );
}, 100);


register_nav_menus(
	array(
		'primary' => __( 'Primary menu', 'blazingbear' ),
	)
);


// Global settings.
require get_template_directory() . '/inc/settings.php';

// Global settings.
require get_template_directory() . '/inc/images.php';

// ACF function.
require get_template_directory() . '/inc/options.php';

// CPT
require get_template_directory() . '/inc/cpt.php';

// Additional tags
require get_template_directory() . '/inc/tags.php';

// Add widgets
require get_template_directory() . '/inc/widgets.php';

// Additional customizer
require get_template_directory() . '/inc/customizer.php';


/** Add class to menu */
function add_menu_link_class( $atts, $item, $args ) {
	if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_list_item_class($classes, $item, $args) {
	if (property_exists($args, 'list_item_class')) {
		$classes[] = $args->list_item_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);
