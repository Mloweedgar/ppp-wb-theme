<?php get_header(); ?>
<section>
    <?php if (have_posts()) : ?>
        <div class="bluish-text-color">
            <h2 id="news"><?php printf(__('Search Results for: %s'), get_search_query()); ?></h2>
        </div>
        <div class="layout-content">
            <?php while (have_posts()) :the_post(); ?>

                <?php get_template_part('content', 'search'); ?>

            <?php endwhile; ?>
        </div>
    <?php else : get_template_part('content', 'none'); endif; ?>
</section>
<?php get_footer(); ?>




