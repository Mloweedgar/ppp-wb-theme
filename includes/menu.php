<section id="menu-page">
    <section class="search-and-close-section">
       <img onclick="hideMenu()" src="<?php echo get_bloginfo('template_directory'); ?>/images/close.svg">
        <?php get_search_form(); ?>
    </section>

    <section class="main-menu-page">
        <?php
        wp_nav_menu( array( 'theme_location' => 'custom-menu', 'container' => '' ) );
        ?>
    </section>

    <section class="sub-menu-page">
        <?php
        wp_nav_menu( array( 'theme_location' => 'sub-menu', 'container' => '' ) );
        ?>
    </section>
</section>