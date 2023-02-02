<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 */
?>

<section class="no-results not-found py-12">
	<div class="container">

		<?php if ( is_search() ) : ?>
        
			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: Search term. */
					esc_html__( 'Results for "%s"', 'blazingbear' ),
					'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</h1>

		<?php else : ?>
			<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'blazingbear' ); ?></h1>
		<?php endif; ?>


		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<?php
			printf(
				'<p>' . wp_kses(
					/* translators: %s: Link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'blazingbear' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);
			?>
		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'blazingbear' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'blazingbear' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section>
