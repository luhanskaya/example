<?php if (have_rows('list')) : ?>


        <section class="overlay overlay-secondary overlay-20 pt-17 pb-lg-18 z-index--1">
            <div class="container">
                <div class="row gx-xl-20">
                    <?php while (have_rows('list')) : the_row(); ?>

                        <div class="col-lg-4 mb-11">

                            <?php if ($subtitle = get_sub_field('subtitle')) : ?>
                                <h4 class="fw-bolder text-secondary mb-4 mb-lg-5"><?php echo $subtitle; ?></h4>
                            <?php endif; ?>

                            <?php if ($title = get_sub_field('title')) : ?>
                                <h3 class="display-6 mb-5 mb-lg-6"><?php echo $title; ?></h3>
                            <?php endif; ?>

                            <?php if ($description = get_sub_field('description')) : ?>
                                <div class="fs-4"><?php echo $description; ?></div>
                            <?php endif; ?>

                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        </section>

    
<?php endif; ?>
