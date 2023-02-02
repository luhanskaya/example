<?php if (have_rows('services')) : ?>
    <?php while (have_rows('services')) :
        the_row(); ?>

        <section class="section-services py-10 pt-lg-15 pt-xl-20 pb-xl-12">
            <div class="container">

                <?php if ($title = get_sub_field('title')) : ?>
                    <h2 class="h1 mb-7 mb-lg-10 text-center"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php $services = get_posts([
                    'numberposts' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'service',
                ]); ?>

                <?php if ($services) : ?>

                    <div class="row gx-5">

                        <?php
                        $i = 0;
                        foreach ($services as $post) {
                            setup_postdata($post); ?>
                            <div class="col-md-6 col-xl-3">

                                <div class="card overlay overlay-primary overlay-10 mb-6 lift">
                                    <div class="card-body py-6">

                                        <?php
                                        $logo = get_field('logo');
                                        if (!empty($logo)) : ?>
                                            <div class="mb-6">
                                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" width="58" />
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($short_title = get_field('short_title')) : ?>
                                            <h3><?php echo $short_title; ?></h3>
                                        <?php endif; ?>
                                        <p><?php echo excerpt(26); ?></p>
                                        <a href="<?php the_permalink(); ?>">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>

                <?php endif; ?>

            </div>
        </section>

    <?php
    endwhile; ?>
<?php endif; ?>