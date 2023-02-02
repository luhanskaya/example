<?php if (have_rows('blog')) : ?>
    <?php while (have_rows('blog')) :
        the_row(); ?>

        <section class="section-blog pt-10 pb-4 pt-md-17 pb-md-10">
            <div class="container">

                <?php if ($subtitle = get_sub_field('subtitle')) : ?>
                    <h4 class="fw-bolder text-primary-dark mb-4"><?php echo $subtitle; ?></h4>
                <?php endif; ?>

                <?php if ($title = get_sub_field('title')) : ?>
                    <h2 class="display-5 mb-8"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php $posts = get_posts([
                    'numberposts' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                ]); ?>

                <?php if ($posts) : ?>
                    <div class="row gx-lg-9">

                        <?php
                        $i = 0;
                        $teak = 0;

                        $post_count = 0;
                        $total = count($posts);

                        foreach ($posts as $post) {
                            setup_postdata($post);
                            $i++; ?>

                            
                            <?php set_query_var( 'total', $total ); ?>
                            <?php set_query_var( 'index', $i ); ?>
                            <?php get_template_part('template-parts/card-post'); ?>

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