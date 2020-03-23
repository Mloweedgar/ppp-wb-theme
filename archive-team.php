<?php get_header(); ?>
    <section class="layout-content organization">
        <div class="org-structure">
            <h2>MEET THE TEAM</h2>
            <div class="the-team">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'meta_query' => array(
                        array(
                            'key' => 'ppp-organisation-structure-level',
                            'value' => 1,
                            'compare' => '=',
                        ),
                    ),
                    'posts_per_page' => -1,
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    get_template_part('content-team', get_post_format());
                endwhile; ?>
            </div>
            <div class="the-team">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'meta_query' => array(
                        array(
                            'key' => 'ppp-organisation-structure-level',
                            'value' => 2,
                            'compare' => '=',
                        ),
                    ),
                    'posts_per_page' => -1,
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    get_template_part('content-team', get_post_format());
                endwhile; ?>
            </div>
            <div class="the-team">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'meta_query' => array(
                        array(
                            'key' => 'ppp-organisation-structure-level',
                            'value' => 3,
                            'compare' => '=',
                        ),
                    ),
                    'posts_per_page' => -1,
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    get_template_part('content-team', get_post_format());
                endwhile; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>