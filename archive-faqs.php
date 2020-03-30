<?php get_header(); ?>
    <section>
        <div class="bluish-text-color greysh-background">
            <h2 id="faq_title">Faqs</h2>
        </div>
        <div class="faqs">
            <?php
            $args = array(
                'post_type' => 'faqs',
                'posts_per_page' => -1,
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-faq', get_post_format());
            endwhile; ?>
        </div>
    </section>
    <script>
        var acc = document.getElementsByClassName("accordion-faq");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel_faq = this.nextElementSibling;
                if (panel_faq.style.maxHeight) {
                    panel_faq.style.maxHeight = null;
                } else {
                    panel_faq.style.maxHeight = panel_faq.scrollHeight + "px";
                }
            });
        }
    </script>
<?php get_footer(); ?>