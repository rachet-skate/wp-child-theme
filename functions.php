<?php

include_once get_template_directory() . '/theme-includes.php';

add_action( 'wp_enqueue_scripts', 'sk8tech_theme_enqueue_styles' );

function sk8tech_theme_enqueue_styles() {

    $parent_style = 'parentThemeDirectoryName';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'childThemeName',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}

function wpb_custom_logo() {
    echo '<style type="text/css">
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
    background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/login-logo.png) !important;
    background-position: 0 0;
    background-size: cover;
    color:rgba(0, 0, 0, 0);
    }
    #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
    background-position: 0 0;
    }
    </style>
    ';
}

add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

?>
