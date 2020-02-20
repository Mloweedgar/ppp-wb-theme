<?php get_header(); ?>
    <section>
        <div class="bluish-text-color">
            <h2 id="news">Documents</h2>
        </div>
        <div class="documents">
            <table>
                <tr class="table-header">
                    <th>Name</th>
                    <th>Description</th>
                    <th></th>
                </tr>

                <?php

                $uri = $_SERVER['REQUEST_URI'];
                $uri_parts = explode("/", $uri);
                $category_name = array_reverse($uri_parts)[1];

                $query_documents_args = array(
                    'post_type' => 'any',
                    'post_status' => 'inherit, publish',
                    'category_name' => $category_name,
                    'posts_per_page' => -1,
                );

                $query_documents = new WP_Query($query_documents_args);

                $documents = array();
                foreach ($query_documents->posts as $document) {
                    $url = $document->post_type == 'attachment' ?
                        wp_get_attachment_url($document->ID) :
                        get_permalink($document->ID);
                    $text = $document->post_type == 'attachment' ?
                        'Download' :
                        'View';
                    $content = $document->post_type == 'attachment' ?
                        $document->post_content :
                        wp_trim_words($document->post_content, 10, '...');
                    ?>
                    <tr>
                        <td><?php echo $document->post_title ?></td>
                        <td><?php echo $content ?></td>
                        <td><a href="<?php echo $url; ?>"><?php echo $text ?></a></td>
                    </tr>
                    <?php
                }

                ?>
            </table>
        </div>
    </section>
<?php get_footer(); ?>