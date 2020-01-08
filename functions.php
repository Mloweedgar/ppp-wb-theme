<?php

// Add scripts and stylesheets
function ppp_scripts() {
    wp_enqueue_style( 'site', get_template_directory_uri() . '/css/site.css' );
    wp_enqueue_style( 'common-styles', get_template_directory_uri() . '/css/common-styles.css' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css' );
    wp_enqueue_style( 'home', get_template_directory_uri() . '/css/home.css' );
    wp_enqueue_style( 'framework', get_template_directory_uri() . '/css/framework.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );
    wp_enqueue_style( 'sidebar', get_template_directory_uri() . '/css/sidebar.css' );

}

add_action( 'wp_enqueue_scripts', 'ppp_scripts' );