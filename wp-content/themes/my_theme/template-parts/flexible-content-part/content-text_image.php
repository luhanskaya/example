<?php if (have_rows('text_image')) : ?>
    <?php while (have_rows('text_image')) :
        the_row(); ?>

        <section class="section-text-image py-5 pt-lg-24">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-12 col-lg mb-8 mb-lg-0">
                        <?php if ($title = get_sub_field('title')) : ?>
                            <h1 class="display-3 mb-5"><?php echo $title; ?></h1>
                        <?php endif; ?>

                        <?php if ($description = get_sub_field('description')) : ?>
                            <div class="row fs-4 mb-5 mb-xl-7">
                                <div class="col-sm-11">
                                    <?php echo $description; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($email = get_field('email', 'option')): ?>
                            <div class="d-grid d-sm-block">
                                <a class="btn btn-primary" href="mailto:<?php echo $email; ?>">Send us a message</a>
                            </div>
                        <?php endif; ?>
                    </div>


                    <?php
                    $image = get_sub_field('image');
                    if (!empty($image)) : ?>
                        <div class="col-12 col-lg-6">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-12 me-md-n10">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    <?php endif;
                    ?>

                </div>

            </div>
        </section>

    <?php
    endwhile; ?>
<?php endif; ?>