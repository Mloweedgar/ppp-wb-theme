<header class="navigation-bar">
    <section class="top-navigation greysh-background bluish-text-color small-text">
        <aside><?php echo date("F, d, Y") ?></aside>
        <aside>
            <nav>
                <?php
                wp_nav_menu(array('theme_location' => 'top-menu', 'container' => ''));
                ?>

            </nav>
        </aside>
    </section>
    <section class="logos-section">
        <a href="<?php echo get_home_url(); ?>"><img
                    src="<?php echo get_bloginfo('template_directory'); ?>/images/zanzibar-coat-of-arms.jpg"
                    alt="Zanzibar Coat of Arms" width="150" height="100"></a>
        <h3 class="bluish-text-color">Zanzibar Public - Private Partnership <br/>(PPP) Department</h3>
        <a href="<?php echo get_home_url(); ?>"><img
                    src="<?php echo get_bloginfo('template_directory'); ?>/images/znz-ppp-logo@2x.png"
                    alt="Flat of Zanzibar" width="138" height="90"></a>

    </section>
    <section class="main-navigation">
        <nav class="bluish-text-color">
            <?php
            wp_nav_menu(array('theme_location' => 'primary-menu', 'container' => ''));
            ?>
        </nav>
            <?php get_search_form(); ?>
    </section>
</header>
