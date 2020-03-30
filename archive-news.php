<?php get_header(); ?>
<section>
    <div class="bluish-text-color">
        <h2 id="news">news</h2>
    </div>
    <div class="layout-content">
        <?php
        $ids = array(); // ids of first 4 latest posts
        $args = array(
            'post_type' => 'news',
            'posts_per_page' => 4,
        );
        $custom_query = new WP_Query($args);
        while ($custom_query->have_posts()) : $custom_query->the_post();
            $ids[] = get_the_ID();
            get_template_part('content-news-card', get_post_format());
        endwhile; ?>
    </div>
</section>
<section class="layout-content older_news_section">
    <h2 id="news_header">Older</h2>
    <div class="layout-content oldnews">
        <div class="older-section">
            <?php
            $args = array(
                'post_type' => 'news',
                'post__not_in' => $ids
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-news-card-small', get_post_format());
            endwhile; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
