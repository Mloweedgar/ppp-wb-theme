<?php
/**
* Template Name: Full Width Page
*
*/

?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="page">
    <section>
        <article class="title">
            <h1><?php the_title() ?></h1>
        </article>
    </section>
    <section>
        <?php the_content('p','</p') ?>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>



