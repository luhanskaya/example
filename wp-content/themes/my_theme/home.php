<?php get_header(); ?>

    <section class="section-hero overlay overlay-primary overlay-20 position-relative z-index-1 pb-7">
        <div class="image z-index--1" style="background-image: url(<?php echo PATH_IMG; ?>bg-full-blog.png);"></div>

        <div class="container">
            <h1 class="hero-title text-center display-1">Blog</h1>
        </div>
    </section>

    <section class="section-blog py-14 py-lg-18 py-xl-23">
        <div class="container">

            <?php if (have_posts()) { ?>


                    <?php $index = 0;
                        while (have_posts()) {
                        the_post();
                        $index++;
                        if ($index == 1) { ?>

                            <?php $do_not_duplicate[] = $post->ID; // Store post ID in array ?>


                            <div class="card card-post fs-5 mb-7 mb-lg-14 mb-xl-20">
                                <div class="row">
                                    <div class="col-lg offset-lg-1 order-lg-2 mb-3 mb-lg-0">

                                        <figure class="equal equal-52 overlay-dark overlay-5 card-img-top h-100 mb-0">
                                            <a class="image" href="<?php the_permalink(); ?>"
                                            style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'full'); ?>)"></a>
                                        </figure>

                                    </div>
                                    <div class="col-lg-4">

                                        <div class="card-body px-0 py-2">
                                            <h3 class="h1 text-primary mb-4 d-none d-lg-block">Featured read</h3>

                                            <p class="mb-4"><?php posted_on() ?></p>
                                            <?php the_title('<h3 class="card-title"><a href="'.  get_the_permalink() . '">', '</a></h3>'); ?>
                                            <p class="mb-6"><?php echo excerpt(26); ?></p>

                                            <hr class="mt-6 d-lg-none <?php echo $index == $total ? 'd-none' : ''; ?>" />
                                        
                                            <a href="<?php the_permalink(); ?>" class="read-more d-none d-lg-block">Read more ></a>
                                        </div>

                                    </div>
                                    
                                </div>

                            </div>

                        <?php } ?>

                    <?php } ?>
                    <?php $post__not_in = ($do_not_duplicate) ? implode(',', $do_not_duplicate) : '';  ?>
                    <?php echo do_shortcode('[ajax_load_more loading_style="infinite fading-circles" post_type="post" posts_per_page="6" post__not_in="'. $post__not_in .'" transition_container_classes="row gx-lg-9"] ') ?>

           
            <?php }?>

        </div>
    </section>


<?php
    get_template_part('template-parts/subscribe-block');
?>

<?php
    get_footer();
?>