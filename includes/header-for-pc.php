<header class="navigation-bar">
    <section class="top-navigation greysh-background bluish-text-color small-text">
        <aside><?php echo date("F, d, Y") ?></aside>
        <aside>
            <nav>
                <?php
                wp_nav_menu( array( 'theme_location' => 'sub-menu', 'container' => '' ) );
                ?>

            </nav>
            <select class="language-selector">
                <option selected="selected">Swahili</option>
                <option>English</option>
            </select>
        </aside>
    </section>
    <section class="logos-section">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/zanzibar-coat-of-arms.jpg"
             alt="Zanzibar Coat of Arms" width="150" height="100">
        <h3 class="bluish-text-color">Zanzibar Private Public Partnership <br/>(PPP) Department</h3>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/flag-of-zanzibar.svg"
             alt="Flat of Zanzibar" width="130" height="130">

    </section>
    <section class="main-navigation">
        <nav class="bluish-text-color">
            <?php
            wp_nav_menu( array( 'theme_location' => 'custom-menu', 'container' => '' ) );
            ?>
        </nav>
        <div class="search-section">
            <?php get_search_form(); ?>
        </div>
    </section>
</header>