<!-- Slideshow container -->
<div class="slideshow-container">
    <?php
    $args = array(
        'post_type' => 'statements',
        'posts_per_page' => -1,
    );
    $custom_query = new WP_Query($args);
    while ($custom_query->have_posts()) : $custom_query->the_post();
        get_template_part('content-statement', get_post_format());
    endwhile; ?>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>



