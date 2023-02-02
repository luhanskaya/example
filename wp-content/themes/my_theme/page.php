<?php
get_header();

	while ( have_posts() ) : the_post();
		get_template_part('template-parts/flexible-content');
		get_template_part('template-parts/subscribe-block');
	endwhile;

get_footer();
