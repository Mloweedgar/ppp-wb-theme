<header class="navigation-bar-mobile">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/zanzibar-coat-of-arms.jpg"
         alt="Zanzibar Coat of Arms" width="60" height="40">
    <section class="lef-nav-section">
        <div class="language-selector-contents-mobile">
            <select class="language-selector">
                <option selected="selected">EN</option>
                <option>SW</option>
            </select>
        </div>
        <div class="menu-icon" onclick="showMenu()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </section>
    <section id="menu-page" onclick="hideMenu()">
        <?php get_template_part('includes/menu'); ?>
    </section>
</header>
<script>
</script>
