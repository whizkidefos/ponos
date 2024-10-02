<?php

function ponos_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
    // wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'ponos_login_stylesheet' );

function ponos_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/ponos.png);
		height: 150px;
		width: 150px;
		background-size: contain;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'ponos_login_logo' );

function ponos_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'ponos_login_logo_url' );

function ponos_login_logo_url_title() {
    return 'Ponos Support Services Ltd';
}
add_filter( 'login_headertext', 'ponos_login_logo_url_title' );