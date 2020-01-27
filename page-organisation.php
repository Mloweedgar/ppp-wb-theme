<?php get_header(); ?>
    <section class="page-intro-section">
        <article class="white-text-color">
            <h1>Our ORGANIZATION STRUCTURE</h1>
            <p>We take pride in good and effective leadership that provides
                us with a great way to achieve our goals as an organization
                and bring development to our community.</p>
        </article>
    </section>
    <section class="layout-content organization">
        <div class="col-8">
            <div class="org-content">
                <h3>ZANZIBAR PPP DEPARTMENT</h3>
                <p>
                    The Revolutionary Government of Zanzibar recognizes the role of
                    private sector in bringing about socio-economic development
                    through investments. Public-Private Partnership (PPP) frameworks
                    provides important instrument for attracting investment and
                    professional and managerial expertise to Zanzibar. PPPs can
                    enable the government to fulfill its responsibilities in
                    efficient delivery of socio-economic goods and services by
                    ensuring efficiency, effectiveness, accountability,
                    quality and outreach of services.
                </p>
            </div>
            <div class="org-structure">
                <h3>ZANZIBAR PPP DEPARTMENT SECRETARIAT</h3>
                <div class="org-department">
                    <?php
                    $args = array(
                        'post_type' => 'team',
                        'orderby' => 'menu_order',
                        'posts_per_page' => 2,
                        'order' => 'ASC'
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
                        'orderby' => 'menu_order',
                        'posts_per_page' => 2,
                        'order' => 'ASC'
                    );
                    $query_1 = new WP_Query( $args );

                    $exclude_posts = array();

                    while ( $query_1->have_posts() ) {
                        $query_1->the_post();
                        $exclude_posts[] = get_the_ID();
                    }

                    $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'team',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'post__not_in' => $exclude_posts
                    );
                    $custom_query = new WP_Query( $args );
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                        get_template_part('content-team', get_post_format());
                    endwhile; ?>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="related-link">
                <h4>RELATED LINKS</h4>
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