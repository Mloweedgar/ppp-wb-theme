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
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );
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


