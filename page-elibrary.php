<?php get_header(); ?>
    <section>
        <div class="bluish-text-color">
            <h2 id="news"> E- library</h2>
        </div>
        <div class="e_library">
            <table>
                <tr class="table-header">
                    <th>Name</th>
                    <th>Description</th>
                </tr>
                <?php
                $bookmarks = get_bookmarks(array());

                foreach ($bookmarks as $bookmark) {
                    ?>
                    <tr>
                        <td><a href="<?php echo $bookmark->link_url ?>"><?php echo $bookmark->link_name ?></a></td>
                        <td><?php echo $bookmark->link_description ?></td>
                    </tr>

                <?php } ?>
            </table>
        </div>
    </section>
<?php get_footer(); ?>