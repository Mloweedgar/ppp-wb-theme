<div class="mySlides fade">
    <img src="<?php if ( has_post_thumbnail() ) {
        the_post_thumbnail_url();
    } ?>" alt="statement  image">
    <article class="text">
        <p class="caption-text">
            <?php echo the_content(); ?>
        </p>
        <p>- <?php echo the_title(); ?> -</p>

    </article>
</div>