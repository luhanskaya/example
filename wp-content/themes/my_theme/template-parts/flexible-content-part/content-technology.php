<?php if (have_rows('technology')) : ?>
    <?php while (have_rows('technology')) :
        the_row(); ?>

        <section class="section-technology bg-secondary-dark pt-20 pb-9 py-lg-15 pt-xl-21 pb-xl-15 position-relative">


            <!-- Shape -->
            <div class="shape shape-top shape-fluid-x text-white">
                <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h2880v125h-720L720 250H0V0z" fill="currentColor"></path>
                </svg>
            </div>


            <div class="container">

                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 d-none d-lg-block">
                        <?php echo get_template_part('template-parts/image-technology'); ?>
                    </div>


                    <div class="col-12 col-lg-6 mb-8 mb-lg-0">
                        <?php if ($subtitle = get_sub_field('subtitle')) : ?>
                            <h4 class="text-secondary mb-5 mb-lg-6"><?php echo $subtitle; ?></h4>
                        <?php endif; ?>

                        <?php if ($title = get_sub_field('title')) : ?>
                            <h2 class="h1 text-primary"><?php echo $title; ?></h2>
                        <?php endif; ?>

                        <?php if ($description = get_sub_field('description')) : ?>
                            <div class="fs-4 text-white">
                                <?php echo $description; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </section>

    <?php
    endwhile; ?>
<?php endif; ?>