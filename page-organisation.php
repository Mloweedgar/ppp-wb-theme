<?php get_header(); ?>
    <section class="layout-content organization">
        <div class="col-8">
           <img src="<?php echo get_bloginfo('template_directory'); ?>/images/organisation-structure.gif">
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