<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 **/

	$email = get_field('email', 'option');
	$phones = get_field('phones', 'option');

?>
			
			</main>

			<footer class="footer bg-dark text-white fs-5 py-9 py-lg-12 py-xl-18">

				<div class="container">
					<div class="row">
						
						<div class="col ps-xl-11">


							<div class="row">

								<?php if($email || $phones): ?>
									<div class="col-lg-4 col-xl-3">
										<h5 class="footer-title">Get in touch</h5>

										<ul class="menu">
											<?php if($email): ?>
												<li><a class="mb-3" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
											<?php endif; ?>

											<?php if( have_rows('phones', 'option') ): ?>
												<?php while( have_rows('phones', 'option') ): the_row(); ?>
													
													<?php 
													$phone = get_sub_field('phone');
													$clean_number = preg_replace('/[\s()-]+/', '', $phone);
													if($phone): ?>
														<li>
															<a href="tel:<?php echo $clean_number; ?>"><?php echo esc_html( $phone ); ?></a>
														</li>
													<?php endif; ?>
													
												<?php endwhile; ?>
											<?php endif; ?>
										</ul>
									</div>
								<?php endif; ?>					

								<?php if ( is_active_sidebar( 'footer' ) ) : ?>
									<?php dynamic_sidebar( 'footer' ); ?>
								<?php endif; ?>
							</div>


						</div>
						<div class="col-auto">


							<?php if (get_theme_mod('footer_logo')) : ?>
								<img src="<?php echo get_theme_mod('footer_logo'); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
							<?php else : ?>
								<h3 class="site-title"><?php bloginfo('name'); ?></h3>
							<?php endif; ?>


						</div>

					</div>


				</div>
			</footer>
		

		</div>

		<?php wp_footer(); ?>

	
	</body>
</html>