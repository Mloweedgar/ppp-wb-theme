<div class="links">
<h3>RELATED LINKS</h3>

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