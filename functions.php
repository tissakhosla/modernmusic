<?php

// /*
//     ======================================================================
//     Add featured image/post thumbnail support
//     ======================================================================
// */

add_theme_support( 'post-thumbnails' );

// /*
//     ======================================================================
//     Hide Admin bar on front end when  signed in to WP
//     ======================================================================
// */

show_admin_bar( false );

// /*
//     ======================================================================
//     Register Menu Locations
//     ======================================================================
// */

function tk2021_menus()
{
    $locations = array(
        'Main Navigation' => __('Main Navigation', 'text_domain') ,
    );

    register_nav_menus($locations);
}

add_action('init', 'tk2021_menus');
