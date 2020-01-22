<?php

// Add scripts and stylesheets
function ppp_scripts() {
    wp_enqueue_style( 'site', get_template_directory_uri() . '/css/site.css' );
    wp_enqueue_style( 'slideshow', get_template_directory_uri() . '/css/slideshow.css' );
    wp_enqueue_style( 'common-styles', get_template_directory_uri() . '/css/common-styles.css' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css' );
    wp_enqueue_style( 'home', get_template_directory_uri() . '/css/home.css' );
    wp_enqueue_style( 'framework', get_template_directory_uri() . '/css/framework.css' );
    wp_enqueue_style( 'about-styles', get_template_directory_uri() . '/css/about.css');
    wp_enqueue_style( 'organization', get_template_directory_uri() . '/css/organization.css');
    wp_enqueue_style( 'training-program', get_template_directory_uri() . '/css/training-program.css');
    wp_enqueue_style( 'training-material', get_template_directory_uri() . '/css/training-material.css');
    wp_enqueue_style( 'news', get_template_directory_uri() . '/css/news.css' );
    wp_enqueue_style( 'faq', get_template_directory_uri() . '/css/faq.css' );
    wp_enqueue_style( 'contact', get_template_directory_uri() . '/css/contact.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
    wp_enqueue_style( 'sidebar', get_template_directory_uri() . '/css/sidebar.css' );
    wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/js/slideshow.js', array( 'jquery' ) );

}
add_action( 'wp_enqueue_scripts', 'ppp_scripts' );


// register main navigation menu
function wp_main_menu() {
    register_nav_menus(
        array(
            'custom-menu' => __( 'Custom Menu' ),
            'sub-menu' => __( 'Sub Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'init', 'wp_main_menu' );

// Support Featured Images
add_theme_support('post-thumbnails');



// News Post Type
function create_news_post()
{
    register_post_type('news',
        array(
            'labels' => array(
                'name' => __('News'),
                'singular_name' => __('News'),
            ),
            'public' => true,
            'menu_icon' => 'dashicons-email-alt',
            'has_archive' => true,
            'taxonomies'          => array( 'category' ),
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            )
        ));
}
add_action('init', 'create_news_post');


// Projects Post Type
function create_projects_post()
{
    register_post_type('projects',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project'),
            ),
            'public' => true,
            'menu_icon' => 'dashicons-format-aside',
            'has_archive' => true,
            'taxonomies'          => array( 'category' ),
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            )
        ));
}
add_action('init', 'create_projects_post');

// Announcements Post Type
function create_announcements_post()
{
    register_post_type('announcements',
        array(
            'labels' => array(
                'name' => __('Announcements'),
                'singular_name' => __('Announcement'),
            ),
            'public' => true,
            'menu_icon' => 'dashicons-megaphone',
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            )
        ));
}
add_action('init', 'create_announcements_post');

// Events Post Type
function create_events_post()
{
    register_post_type('events',
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event'),
            ),
            'public' => true,
            'menu_icon' => 'dashicons-calendar-alt',
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            )
        ));
}
add_action('init', 'create_events_post');

// Enabling Links manager
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

/**
 * Support search form
 */

add_theme_support( 'html5', array( 'search-form' ) );



// Custom settings
function custom_settings_add_menu()
{
    add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}

add_action('admin_menu', 'custom_settings_add_menu');


// Create Custom Global Settings
function custom_settings_page()
{ ?>
    <div class="wrap">
        <h1>Theme Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('section');
            do_settings_sections('theme-options');
            settings_fields('section-shortcodes');
            do_settings_sections('shortcode-options');
            submit_button();
            ?>
        </form>
    </div>
<?php }




// Address
function setting_physical_address()
{ ?>
    <input type="text" name="physical_address" id="physical_address" placeholder="Physical Address" value="<?php echo get_option('physical_address'); ?>"/>
<?php }

function setting_post_address()
{ ?>
    <input type="text" name="post_address" id="post_address" placeholder="Post Address" value="<?php echo get_option('post_address'); ?>"/>
<?php }

function setting_email_address()
{ ?>
    <input type="text" name="email_address" id="email_address" placeholder="Email Address" value="<?php echo get_option('email_address'); ?>"/>
<?php }

function setting_phone_number()
{ ?>
    <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" value="<?php echo get_option('phone_number'); ?>"/>
<?php }


// Shortcodes
function setting_email_subscription()
{ ?>
    <input type="text" name="email_subscription" id="email_subscription" placeholder="Email Subscription shortcode" value="<?php echo get_option('email_subscription'); ?>"/>
<?php }

function setting_site_visitors_today()
{ ?>
    <input type="text" name="site_visitors_today" id="site_visitors_today" placeholder="Site Visitors Today shortcode" value="<?php echo get_option('site_visitors_today'); ?>"/>
<?php }

function setting_site_visitors_yesterday()
{ ?>
    <input type="text" name="site_visitors_yesterday" id="site_visitors_yesterday" placeholder="Site Visitors Yesterday shortcode" value="<?php echo get_option('site_visitors_yesterday'); ?>"/>
<?php }

function setting_site_visitors_this_week()
{ ?>
    <input type="text" name="site_visitors_this_week" id="site_visitors_this_week" placeholder="Site Visitors This Week shortcode" value="<?php echo get_option('site_visitors_this_week'); ?>"/>
<?php }

function setting_site_visitors_this_month()
{ ?>
    <input type="text" name="site_visitors_this_month" id="site_visitors_this_month" placeholder="Site Visitors This Month shortcode" value="<?php echo get_option('site_visitors_this_month'); ?>"/>
<?php }

function setting_site_visitors_total()
{ ?>
    <input type="text" name="site_visitors_total" id="site_visitors_total" placeholder="Site Visitors Total shortcode" value="<?php echo get_option('site_visitors_total'); ?>"/>
<?php }

function setting_sitemap()
{ ?>
    <input type="text" name="sitemap" id="sitemap" placeholder="Sitemap shortcode" value="<?php echo get_option('sitemap'); ?>"/>
<?php }


/**
 * Global settings for the theme
 */
function custom_settings_page_setup()
{
    add_settings_section('section', 'Contact Address', null, 'theme-options');

    add_settings_field('physical_address', 'Physical Address', 'setting_physical_address', 'theme-options', 'section');
    add_settings_field('post_address', 'Post Address', 'setting_post_address', 'theme-options', 'section');
    add_settings_field('phone_number', 'Phone Number', 'setting_phone_number', 'theme-options', 'section');
    add_settings_field('email_address', 'Email Address', 'setting_email_address', 'theme-options', 'section');
    register_setting('section', 'physical_address');
    register_setting('section', 'post_address');
    register_setting('section', 'phone_number');
    register_setting('section', 'email_address');


    add_settings_section('section-shortcodes', 'SHORTCODES FOR THE THEME', null, 'shortcode-options');

    add_settings_field('email_subscription', 'Email Subscription shortcode', 'setting_email_subscription', 'shortcode-options', 'section-shortcodes');
    register_setting('section-shortcodes', 'email_subscription');

    add_settings_field('site_visitors_today', 'Site Visitors today shortcode', 'setting_site_visitors_today', 'shortcode-options', 'section-shortcodes');
    register_setting('section-shortcodes', 'site_visitors_today');

    add_settings_field('site_visitors_yesterday', 'Site Visitors yesterday shortcode', 'setting_site_visitors_yesterday', 'shortcode-options', 'section-shortcodes');
    register_setting('section-shortcodes', 'site_visitors_yesterday');

    add_settings_field('site_visitors_this_week', 'Site Visitors This Week shortcode', 'setting_site_visitors_this_week', 'shortcode-options', 'section-shortcodes');
    register_setting('section-shortcodes', 'site_visitors_this_week');

    add_settings_field('site_visitors_this_month', 'Site Visitors This Month shortcode', 'setting_site_visitors_this_month', 'shortcode-options', 'section-shortcodes');
    register_setting('section-shortcodes', 'site_visitors_this_month');

    add_settings_field('site_visitors_total', 'Site Visitors  Total shortcode', 'setting_site_visitors_total', 'shortcode-options', 'section-shortcodes');
    register_setting('section-shortcodes', 'site_visitors_total');

    add_settings_field('sitemap', 'Sitemap shortcode', 'setting_sitemap', 'shortcode-options', 'section-shortcodes');
    register_setting('section-shortcodes', 'sitemap');
}

add_action('admin_init', 'custom_settings_page_setup');




