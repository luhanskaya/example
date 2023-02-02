<?php if (have_rows('text_offset_image')) : ?>
    <?php while (have_rows('text_offset_image')) : the_row(); ?>

        <section class="section-text-offset-image py-14">
            <div class="container">

                <div class="row text-center text-lg-start">
                    <div class="col-12 col-lg mb-3 mb-lg-0">
                        <?php if ($title = get_sub_field('title')) : ?>
                            <h1 class="display-3 mb-5 mb-lg-6"><?php echo $title; ?></h1>
                        <?php endif; ?>

                        <?php if ($description = get_sub_field('description')) : ?>
                            <div class="row justify-content-center justify-content-lg-start fs-4 mb-3 mb-lg-5">
                                <div class="col-xl-9">
                                    <?php echo $description; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>


                    <?php
                    $image = get_sub_field('image');
                    if (!empty($image)) : ?>
                        <div class="col-12 col-lg-5">
                            <div class="row justify-content-center">
                                <div class="col-11 col-sm-10 col-lg-12">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid me-n5 me-lg-0 mw-lg-120 mb-n21 mb-lg-0 mb-xl-n21" />
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>


    <?php endwhile; ?>
<?php endif; ?>