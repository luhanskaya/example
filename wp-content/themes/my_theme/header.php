<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">

	<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo get_field('google_map_api', 'option') ?>"></script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	
	<div class="layout hidden js-layout">
		<?php get_template_part('template-parts/site-nav'); ?>
		<main>
		