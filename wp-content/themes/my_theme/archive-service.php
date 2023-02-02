<?php

/**
 * The template for displaying archive pages
 */

get_header();

$object = get_queried_object();
$post_id = $object->name;
$hero_section = get_field('hero_section', $post_id);

if (have_posts()) :
?>

    <section class="section-hero bg-primary pb-24 pb-md-25 pb-xl-30 position-relative z-index-1">
        <div class="image z-index--1" style="background-image: url(<?php echo PATH_IMG; ?>service-hero-bg.png);"></div>
        <div class="container">

            <div class="row justify-content-center text-center fs-4">
                <div class="col-sm-10 col-md-9 col-lg-7 col-xl-6">

                    <h1 class="display-1 my-4"><?php echo $hero_section['title'] ? $hero_section['title'] : $object->label; ?></h1>

                    <?php if ($hero_section['description']) : ?>
                        <?php echo $hero_section['description']; ?>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </section>


    <?php $testimonials = get_posts([
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'testimonials',
    ]); ?>

    <?php if ($testimonials) : 
        $total_testimonials = count($testimonials); ?>

        <div class="position-relative z-index-1">
            <!-- Shape -->
            <div class="shape shape-bottom shape-fluid-x shape-flip-y text-dark">
                <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h2880v125h-720L720 250H0V0z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <section class="section-testimonials bg-dark text-white position-relative pt-8 pb-15 pb-lg-8">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-9">

                        <div class="testimonials-carousel<?php echo $total_testimonials > 1 ? ' js-testimonials owl-carousel owl-theme' : ''; ?>">
                            <?php foreach ($testimonials as $post) {
                                setup_postdata($post); ?>

                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                        <?php the_content(); ?>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <?php the_title(); ?>
                                    </figcaption>
                                </figure>

                            <?php }
                            wp_reset_postdata();
                            ?>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    <?php endif; ?>


    <section class="mb-lg-15"></section>


    <?php $i = 0;
    while (have_posts()) : the_post();
        $i++; ?>
        <section class="pb-16 py-lg-13" id="<?php echo $object->name; ?>-<?php echo $i; ?>">
            <div class="container">
                <div class="row gx-0<?php echo $i % 2 == 0 ? ' flex-row-reverse' : ''; ?>">

                    <div class="col-lg-6 col-xl-5<?php echo $i % 2 == 0 ? ' offset-lg-1 offset-xl-2' : ''; ?> py-lg-5">

                        <?php if( has_post_thumbnail() ): ?>
                            <figure class="equal equal-70 d-lg-none mt-n9 mb-5">
                                <div class="image img-service" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'full'); ?>)"></div>
                            </figure>
                        <?php endif; ?>

                        <?php
                        $logo = get_field('logo');
                        if (!empty($logo)) : ?>
                            <div class="mb-6">
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" width="58" />
                            </div>
                        <?php endif; ?>

                        <?php if ($short_title = get_field('short_title')) : ?>
                            <h3 class="mb-5 text-primary"><?php echo $short_title; ?></h3>
                        <?php endif; ?>

                        <?php the_title('<h3 class="display-3 mb-6">', '</h3>'); ?>
                        <p class="fs-4 lh-sm mb-7"><?php echo excerpt(26); ?></p>

                        <?php if ($email = get_field('email', 'option')) : ?>
                            <a class="btn btn-primary" href="mailto:<?php echo $email; ?>?subject=<?php the_title(); ?>">Send us a message</a>
                        <?php endif; ?>

                    </div>
                    <div class="col-lg-5<?php echo $i % 2 == 0 ? '' : ' offset-lg-1 offset-xl-2'; ?>">

                        <div class="position-relative h-100 vw-50<?php echo $i % 2 == 0 ? ' float-end' : ''; ?>">
                            <div class="w-100 h-100 bg-cover <?php echo $i % 2 == 0 ? 'img-service-bottom' : 'img-service-top'; ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'full'); ?>);"></div>
                        </div>

                    </div>
                </div>


            </div>
        </section>

    <?php endwhile; ?>

    <section class="mb-lg-14"></section>


    <?php get_template_part('template-parts/subscribe-block'); ?>

<?php else : ?>
    <?php get_template_part('template-parts/content/content-none'); ?>
<?php endif; ?>

<?php get_footer(); ?>