<?php get_header(); ?>
<section>
    <div>
        <?php
        $ids = array(); // ids of first 4 latest posts
        if ( have_posts() ) : while ( have_posts() ) : the_post();

            get_template_part('content-project-card', get_post_format());

        endwhile; endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>
