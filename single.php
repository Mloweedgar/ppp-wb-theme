<?php get_header(); ?>
<div class="site-container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
   <div id="paragraph"><p> <?php the_content('<p >','</p>'); ?></p></div>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
