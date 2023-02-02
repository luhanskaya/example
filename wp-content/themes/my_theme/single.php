<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>

        <article class="mb-12 mb-lg-21">
            <div class="container">

                <div class="row justify-content-center pt-lg-8">
                    <div class="col-lg-8 col-xl-7">

                        <figure class="equal equal-50 mb-7 overlay-dark overlay-5 card-img-top">
                            <a class="image" href="<?php the_permalink(); ?>"
                            style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'full'); ?>)"></a>
                        </figure>

                        <?php the_title('<h1 class="fw-bolder">', '</h1>'); ?>

                        <p class="mb-4"><?php posted_on() ?></p>

                        <div class="d-flex align-items-center mb-7 mb-lg-10">

                            <?php echo get_avatar($author_id, '60', '', 'alt', array( 'class' => array( 'rounded-circle', 'me-4' ))); ?>

                            <div class="text-capitalize">
                                <?php if( $nickname = get_the_author_meta('nickname') ): ?>
                                    <h6 class="fw-bolder mb-1"><?php echo $nickname; ?></h6>
                                <?php endif; ?>
                                <?php if( $user_position = get_field('user_position') ): ?>
                                    <span class="fw-bolder"><?php echo $user_position; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="fs-5">
                            <?php the_content(); ?>
                        </div>

                    </div>
                </div>

            </div>
        </article>

    <?php }
} ?>

<?php get_template_part('template-parts/subscribe-block'); ?>
<?php get_footer(); ?>