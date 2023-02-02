<?php
    $index = isset($index) ? $index : '';
    $total = isset($total) ? $total : ' ';
?>

<div class="col-md-6 col-lg-4">
    <div class="card card-post fs-5 mb-8">
        <figure class="equal equal-52 overlay-dark overlay-5 card-img-top">
            <a class="image" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'full'); ?>)"></a>
        </figure>

        <div class="card-body py-1 px-0">
            <p class="mb-4"><?php posted_on() ?></p>
            <?php the_title('<h3 class="card-title"><a href="'.  get_the_permalink() . '">', '</a></h3>'); ?>
            <p class="mb-0"><?php echo excerpt(26); ?></p>
            <hr class="mt-6 d-lg-none <?php echo $index == $total ? 'd-none' : ''; ?>" />
        </div>
    </div>
</div>
