<?php
/*
Template Name: Template Contacts
*/
?>

<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <section class="pb-15 pb-lg-12">
            <div class="container">
                <div class="row justify-content-center text-center fs-4">
                    <div class="col-sm-10 col-md-9 col-lg-7 col-xl-6">
                        <h1 class="display-3 mt-7 mb-6"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>


        <?php if ($form = get_field('form')) : ?>
            <section class="overlay overlay-primary overlay-20 py-8 d-lg-none mb-14">
                <div class="container mt-n13 mb-n19">
                    <?php echo do_shortcode($form); ?>
                </div>
            </section>
        <?php endif; ?>



        <section class="overlay overlay-lg-primary overlay-20 pt-8 pb-10 mb-lg-30">

            <!-- Shape -->
            <div class="shape shape-top shape-fluid-x text-white d-none d-lg-block">
                <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h2880v125h-720L720 250H0V0z" fill="currentColor"></path>
                </svg>
            </div>

            <div class="container mt-lg-n8 mt-xl-n3 mb-lg-n21">

                <div class="row justify-content-end">
                    <div class="col-xxl-11">

                        <div class="row">
                            <div class="col-lg-6 col-xl-5">

                                <?php if ($form = get_field('form')) : ?>
                                    <div class="d-none d-lg-block">
                                        <?php echo do_shortcode($form); ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <div class="col-lg-6 offset-xl-1 pt-lg-15 pt-xl-21">

                                <?php if ($subtitle = get_field('subtitle')) : ?>
                                    <h2 class="h1 mb-5 mb-lg-7"><?php echo $subtitle; ?></h3>
                                <?php endif; ?>

                                <?php if ($description = get_field('description')) : ?>
                                    <div class="fs-4 mb-8 mb-lg-12"><?php echo $description; ?></div>
                                <?php endif; ?>

                                <?php 
                                $latitude   = get_field('latitude', 'option');
                                $longitude  = get_field('longitude', 'option');
                                $zoom       = get_field('zoom', 'option');
                                if ($latitude && $longitude) : ?>
                                    <div class="mapbox js-map" data-lat="<?php echo $latitude; ?>" data-lng="<?php echo $longitude; ?>" data-zoom="<?php echo $zoom; ?>"></div>
                                <?php endif; ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

<?php 
    endwhile; 
endif; ?>

<?php get_footer(); ?>