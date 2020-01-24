<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Zanzibar PPP department</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<div class="site-contents">
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
<!--            --><?php //get_search_form( ); ?>
            <div class="search-section">
                <input type="search"/>
                <button><img src="<?php echo get_bloginfo('template_directory'); ?>/images/icons-search.svg"/></button>
            </div>
        </section>
    </header>