<?php if( have_rows('subscribe_block', 'option') ): ?>
    <?php while( have_rows('subscribe_block', 'option') ): the_row(); ?>

    <section class="section-subscribe-block bg-primary pt-12 pt-lg-18 pb-9 pb-lg-14">
            <div class="container">

                <?php if($title = get_sub_field('title')): ?>
                    <div class="row justify-content-center text-center">
                        <div class="col-sm-9 col-md-8 col-lg-6 col-xl-5">
                            <h2 class="h1"><?php echo $title; ?></h2>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if( have_rows('buttons') ): ?>
                    <div class="row justify-content-center text-center">
                        <div class="col-sm-10 d-grid d-sm-block">
                            <?php while( have_rows('buttons') ): the_row(); ?>

                                <?php 
                                $button = get_sub_field('button');
                                if( $button ): 
                                    $button_url = $button['url'];
                                    $button_title = $button['title'];
                                    $button_target = $button['target'] ? $button['target'] : '_self';
                                    ?>
                                    <a class="btn<?php echo get_row_index() % 2 == 0 ? ' btn-outline-dark': ' btn-dark'; ?><?php echo get_row_index() == 1 ? '': ' ms-sm-5'; ?> mb-4" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
                                <?php endif; ?>

                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>