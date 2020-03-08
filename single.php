<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="page">
    <section class="page-intro-section">
        <article class=" white-text-color">
            <h1><?php the_title() ?></h1>
        </article>
    </section>
    <section style="padding: 1%">
        <?php the_content() ?>
    </section>
    <?php endwhile; endif; ?>

    <?php get_footer(); ?>
