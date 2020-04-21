<?php get_header(); ?>
<div class="site-container">
    <section>
        <div class="bluish-text-color">
            <h2 id="news"> E- library</h2>
        </div>
        <div class="site-container">
        <div class="e_library">
            <table>
                <tr class="table-header">
                    <th class="th-name">Name</th>
                    <th class="th-desc">Description</th>
                </tr>
                <?php
                $bookmarks = get_bookmarks(array( 'order' => 'DESC', 'category_name'  => 'RESOURCES'));

                foreach ($bookmarks as $bookmark) {
                    ?>
                    <tr>
                        <td><a href="<?php echo $bookmark->link_url ?>"><?php echo $bookmark->link_name ?></a></td>
                        <td><?php echo $bookmark->link_description ?></td>
                    </tr>

                <?php } ?>
            </table>
        </div>
    </div>
    </section>
</div>
<?php get_footer(); ?>