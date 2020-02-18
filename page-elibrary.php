<?php get_header(); ?>
    <section>
        <div class="bluish-text-color">
            <h2 id="news"> E- library</h2>
        </div>
        <div class="e_library">
            <table>
                <tr class="table-header">
                    <th>Category</th>
                    <th>Description</th>
                    <th>Number of Documents</th>
                </tr>
                <?php
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                ));

                foreach ($categories as $category) {
                    ?>
                    <tr>
                        <td><?php echo $category->name ?></td>
                        <td><?php echo $category->description ?></td>
                        <td>
                            <a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->count ?></a>
                        </td>
                    </tr>

                <?php } ?>
            </table>
        </div>
    </section>
<?php get_footer(); ?>