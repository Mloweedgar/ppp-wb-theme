<section id="menu-page">
    <section class="search-and-close-section">
       <img onclick="hideMenu()" src="<?php echo get_bloginfo('template_directory'); ?>/images/close.svg">
        <div class="search-section">
            <input type="search"/>
            <button><img src="<?php echo get_bloginfo('template_directory'); ?>/images/icons-search.svg"/></button>
        </div>
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