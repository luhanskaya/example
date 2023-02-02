<?php if (have_rows('steps')) : ?>
    <?php while (have_rows('steps')) : the_row(); ?>

        <div class="position-relative">
            <!-- Shape -->
            <div class="shape shape-bottom shape-fluid-x shape-flip-y text-secondary-dark d-none d-lg-block">
                <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h2880v125h-720L720 250H0V0z" fill="currentColor"></path>
                </svg>
            </div>
        </div>


        <section class="section-steps bg-secondary-dark text-white pt-9 pb-16 py-lg-16 pb-lg-22">
            <div class="container">

                <?php if ($title = get_sub_field('title')) : ?>
                    <h2 class="display-3 mb-8 mb-lg-15"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php 
                $items = count(get_sub_field('items'));
                if (have_rows('items')) : ?>
                    <div class="row gx-xl-20">

                        <?php while (have_rows('items')) : the_row(); ?>
                            <div class="col-lg-4 py-lg-19<?php echo get_row_index() % 2 == 0 ? '' : ' mt-lg-n19'; ?><?php echo get_row_index() % 2 == 0 ? ' mb-lg-n19' : ''; ?> item">
                            
                                <?php 
                                $image = get_sub_field('image');
                                if( !empty( $image ) ): ?>
                                    <div class="card bg-secondary mb-7">
                                        <div class="card-body text-center py-xxl-7">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="194" />
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($title = get_sub_field('title')) : ?>
                                    <h3 class="display-6 mb-5 mb-lg-7 text-primary"><?php echo $title; ?></h3>
                                <?php endif; ?>

                                <?php if ($description = get_sub_field('description')) : ?>
                                    <div class="fs-4"><?php echo $description; ?></div>
                                <?php endif; ?>
                            
                            </div>

                            <?php if(get_row_index() != $items ) { ?>
                                <img src="<?php echo PATH_IMG; ?>line-mobile.svg" alt="line" height="119" class="mobile-line my-4 d-lg-none">
                            <?php } ?>

                            <?php echo get_row_index() % 2 == 0 ? '' : '<div class="col-lg-4 mb-lg-n12 mb-xl-n19 line item"></div>'; ?>
                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>

            </div>
        </section>
        

    <?php endwhile; ?>
<?php endif; ?>