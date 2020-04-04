<?php
/**
* Template Name: With Sidebar Page
*
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="page">
    <section class="layout-content">
    <div class="col-8">
        <article class="title">
            <h1><?php the_title() ?></h1>
        </article>
        
        <section>
            <?php the_content('p','</p') ?>
        </section>
    </div>
    <div class="col-4">
            <?php get_sidebar( 'right-sidebar' ); ?>
    </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

