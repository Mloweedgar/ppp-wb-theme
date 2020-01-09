<?php

// Add scripts and stylesheets
function ppp_scripts() {
    wp_enqueue_style( 'site', get_template_directory_uri() . '/css/site.css' );
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

}

add_action( 'wp_enqueue_scripts', 'ppp_scripts' );


// register main navigation menu
function wp_main_menu() {
    register_nav_menus(
        array(
            'custom-menu' => __( 'Custom Menu' ),
            'sub-menu' => __( 'Sub Menu' )
        )
    );
}
add_action( 'init', 'wp_main_menu' );