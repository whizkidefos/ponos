<?php
// Define constant for version number
define('UIKIT_VERSION', '3.21.11');
define('SWIPER_VERSION', '11.1.12');
define('FONTAWESOME_VERSION', '6.6.0');

// Register Menus
function ponosMenus() {
    register_nav_menus(
        array (
            'main-menu'  => 'Main Menu',
            'mobile-menu'  => 'Mobile Menu',
        )
     );
}
add_action( 'init', 'ponosMenus' );

// Load stylesheets and javascript files
function ponosScripts() {
    // UIKit CSS
    wp_enqueue_style( 'uikit-css', get_template_directory_uri(). '/css/uikit.min.css', array(), UIKIT_VERSION );

    // Google Fonts
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,900&display=swap' );

    // Swiper CSS
    wp_enqueue_style( 'swiper-css', get_template_directory_uri(). '/css/swiper.min.css', array(), SWIPER_VERSION );

    // Font Awesome CSS
    wp_enqueue_style( 'Font_Awesome', get_template_directory_uri(). '/css/fontawesome.min.css', array(), FONTAWESOME_VERSION );

    // Main CSS
    wp_enqueue_style( 'main-css', get_template_directory_uri(). '/css/ponos.css', array('uikit-css', 'googlefonts'), '1.0.0' );

    // JavaScripts
    // if ( !is_admin() ) wp_deregister_script('jquery');

    //wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery.min.js', array(), '3.6.1', 'true' );

    wp_enqueue_script( 'swiper-js', get_template_directory_uri(). '/js/swiper.min.js', array(), SWIPER_VERSION, 'true' );

    wp_enqueue_script( 'uikit-js', get_template_directory_uri(). '/js/uikit.min.js', array(), UIKIT_VERSION, 'true' );
    wp_enqueue_script( 'uikit-js-icons', get_template_directory_uri(). '/js/uikit-icons.min.js', array(), UIKIT_VERSION, 'true' );

    wp_enqueue_script( 'fontawesome-js', get_template_directory_uri(). '/js/fontawesome.min.js', array(), FONTAWESOME_VERSION, 'true' );

    wp_enqueue_script( 'main-js', get_template_directory_uri(). '/js/ponos.js', array('jquery'), '1.0.0', 'true' );

}

add_action( 'wp_enqueue_scripts', 'ponosScripts' );

// Theme support
include get_theme_file_path( '/inc/theme-support.php' );
include get_theme_file_path( '/inc/custom-login.php' );