<?php get_template_part('includes/slideshow', get_post_format()); ?>
<section class="layout-content home-latest">
    <div class="col-8 ">
        <div>
        <div class="latest-projects bg-blue">
            <h3>Latest Projects</h3>
        </div>
        <div class="layout-content project-content">
            <?php
            $args = array(
                'post_type' => 'projects',
                'posts_per_page' => 2,
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-projects', get_post_format());
            endwhile; ?>
        </div>
        <span class="view-project"><a  href="<?php echo get_home_url(); ?>/projects">
        View All Project <i class='fas fa-angle-right'></i></a><span>
    </div>
<<<<<<< HEAD
    <div class="ppp-latests">
    <div class="latest-news bg-blue">
=======
    <div class="col-4 ">
        <div class="latest-announcement bg-blue">
            <h3>Announcements</h3>
        </div>
        <div class="announcement">
            <?php
            $args = array(
                'post_type' => 'announcements',
                'posts_per_page' => 3,
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-announcements', get_post_format());
            endwhile; ?>
        </div>
    </div>
</section>
<section class="layout-content home-latest">
    <div class="col-8">
        <div class="latest-news bg-blue">
>>>>>>> 7b0702560755f3671bd79b843f061c91eb9452c1
            <h3>Latest News</h3>
        </div>
        <div class="layout-content news">
            <?php
            $args = array(
                'post_type' => 'news',
                'orderby' => 'menu_order',
                'posts_per_page' => 3,
                'order' => 'DESC'
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-news', get_post_format());
            endwhile; ?>
        <span class="view-news"><a  href="<?php echo get_home_url(); ?>/news">
        Read More news <i class='fas fa-angle-right'></i></a><span>
        </div>
        </div>
    </div>
    <div class="col-4 ">
        <div class="latest-announcement bg-blue">
            <h3>Announcements</h3>
        </div>
        <div class="announcement">
            <?php
            $args = array(
                'post_type' => 'announcements',
                'orderby' => 'menu_order',
                'posts_per_page' => 7,
                'order' => 'ASC'
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-announcements', get_post_format());
            endwhile; ?>
        <span class="view-announcement"><a  href="<?php echo get_home_url(); ?>/announcements">
        View All Announcements <i class='fas fa-angle-right'></i></a><span>
        </div>
    </div>
</section>
<section class="layout-content home-docs">
    <div class="col-4">
        <div class="latest-docs bg-blue">
            <h3>STANDARD BIDDING DOCS</h3>
        </div>
        <div class="docs">
            <?php
            $bookmarks = get_bookmarks( array(
                'orderby'        => 'name',
                'order'          => 'DESC',
                'category_name'  => 'STANDARD BIDDING DOCS'
            ) );

            // Loop through each bookmark and print formatted output
            foreach ( $bookmarks as $bookmark ) {
              printf('<div><h4><a href="%1$s">%2$s</a></h4><hr></div>',esc_attr( $bookmark->link_url ), $bookmark->link_name);
            }
            ?>
        </div>
    </div>
    <div class="col-4 ">
        <div class="latest-docs bg-blue">
            <h3>GUIDELINES</h3>
        </div>
        <div class="docs">
            <?php
            $bookmarks = get_bookmarks( array(
                'orderby'        => 'name',
                'order'          => 'DESC',
                'category_name'  => 'GUIDELINES'
            ) );

            // Loop through each bookmark and print formatted output
            foreach ( $bookmarks as $bookmark ) {
                printf('<div><h4><a href="%1$s">%2$s</a></h4><hr></div>',esc_attr( $bookmark->link_url ), $bookmark->link_name);
            }
            ?>
        </div>
    </div>
    <div class="col-4 ">
        <div class="latest-docs bg-blue">
            <h3>RELATED LINKS</h3>
        </div>
        <div class="docs">
            <?php
            $bookmarks = get_bookmarks( array(
                'orderby'        => 'name',
                'order'          => 'DESC',
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