<div class="col-4">
<img src="<?php echo get_bloginfo('template_directory'); ?>/images/team.png" alt="">

    <!-- <img src="<?php if ( has_post_thumbnail() ) {
        the_post_thumbnail_url();
    } ?>" alt="team member"> -->
    <h5><?php the_title() ?></h5>
    <p><?php the_content() ?></p>
</div>