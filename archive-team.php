<?php get_header(); ?>
    <section class="layout-content organization">
        <div class="col-8">
            <div class="org-structure">
                <h3>MEET THE TEAM</h3>
                <div class="organisation-structure-level-one the-team">
                    <?php
                    $args = array(
                        'post_type' => 'team',
                        'meta_query'	=> array(
                            array(
                                'key'	  	=> 'ppp-organisation-structure-level',
                                'value'	  	=> 1,
                                'compare' 	=> '=',
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
                        'meta_query'	=> array(
                            array(
                                'key'	  	=> 'ppp-organisation-structure-level',
                                'value'	  	=> 2,
                                'compare' 	=> '=',
                            ),
                        ),
                        'posts_per_page' => -1,
                    );
                    $custom_query = new WP_Query($args);
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                        get_template_part('content-team', get_post_format());
                    endwhile; ?>
                </div>

                <div class="org-department">
                    <?php
                    $args = array(
                        'post_type' => 'team',
                        'meta_query'	=> array(
                            array(
                                'key'	  	=> 'ppp-organisation-structure-level',
                                'value'	  	=> 3,
                                'compare' 	=> '=',
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
        </div>
        <div class="col-4">
            <div class="related-link">
                <h3>RELATED LINKS</h3>
            </div>
            <div class="links">
                <?php
                $bookmarks = get_bookmarks( array(
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                    'category_name'  => 'RELATED LINKS'
                ) );

                // Loop through each bookmark and print formatted output
                foreach ( $bookmarks as $bookmark ) {
                    printf('<div><h4><a href="%1$s">%2$s</a></h4><hr></div>',esc_attr( $bookmark->link_url ), $bookmark->link_name);
                }
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>