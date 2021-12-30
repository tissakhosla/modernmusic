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

// /*
//     ===================================
//     Register Music Custom Post Type
//     ===================================
// */

function tk2021_music_init()

{
    $labels = array(
        'name' => _x('Music', 'post type general name', 'tk2021-textdomain') ,
        'singular_name' => _x('Music', 'post type singular name', 'tk2021-textdomain') ,
        'menu_name' => _x('Music', 'admin menu', 'tk2021-textdomain') ,
        'name_admin_bar' => _x('Music', 'add new on admin bar', 'tk2021-textdomain') ,
        'add_new' => __('Add New', 'music', 'tk2021-textdomain') ,
        'add_new_item' => __('Add New Music', 'tk2021-textdomain') ,
        'new_item' => __('New Music', 'tk2021-textdomain') ,
        'edit_item' => __('Edit Music', 'tk2021-textdomain') ,
        'view_item' => __('View Music', 'tk2021-textdomain') ,
        'all_items' => __('All Music', 'tk2021-textdomain') ,
        'search_items' => __('Search Music', 'tk2021-textdomain') ,
        'parent_item_colon' => __('Parent Music:', 'tk2021-textdomain') ,
        'not_found' => __('No music found.', 'tk2021-textdomain') ,
        'not_found_in_trash' => __('No music found in Trash.', 'tk2021-textdomain')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'music-list',
            'with_front' => false
        ) ,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-album',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes'
        )
    );

    /******** Icon reference for $args['menu_position'] --> https://developer.wordpress.org/resource/dashicons/ *********/

    register_post_type('music', $args);
}
add_action('init', 'tk2021_music_init');

// /*
//     ===================================
//     Register Code Custom Post Type
//     ===================================
// */

function tk2021_code_init()

{
    $labels = array(
        'name' => _x('Code', 'post type general name', 'tk2021-textdomain') ,
        'singular_name' => _x('Code', 'post type singular name', 'tk2021-textdomain') ,
        'menu_name' => _x('Code', 'admin menu', 'tk2021-textdomain') ,
        'name_admin_bar' => _x('Code', 'add new on admin bar', 'tk2021-textdomain') ,
        'add_new' => __('Add New', 'resource', 'tk2021-textdomain') ,
        'add_new_item' => __('Add New Code Project', 'tk2021-textdomain') ,
        'new_item' => __('New Code', 'tk2021-textdomain') ,
        'edit_item' => __('Edit Code', 'tk2021-textdomain') ,
        'view_item' => __('View Code', 'tk2021-textdomain') ,
        'all_items' => __('All Code', 'tk2021-textdomain') ,
        'search_items' => __('Search Code', 'tk2021-textdomain') ,
        'parent_item_colon' => __('Parent Code:', 'tk2021-textdomain') ,
        'not_found' => __('No code found.', 'tk2021-textdomain') ,
        'not_found_in_trash' => __('No code found in Trash.', 'tk2021-textdomain')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'code-list',
            'with_front' => false
        ) ,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-editor-code',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes'
        )
    );

    /******** Icon reference for $args['menu_position'] --> https://developer.wordpress.org/resource/dashicons/ *********/

    register_post_type('code', $args);
}
add_action('init', 'tk2021_code_init');

// /*
//     ===================================
//     Register Personnel Custom Post Type
//     ===================================
// */

function tk2021_personnel_init()

{
    $labels = array(
        'name' => _x('Personnel', 'post type general name', 'tk2021-textdomain') ,
        'singular_name' => _x('Person', 'post type singular name', 'tk2021-textdomain') ,
        'menu_name' => _x('Personnel', 'admin menu', 'tk2021-textdomain') ,
        'name_admin_bar' => _x('Person', 'add new on admin bar', 'tk2021-textdomain') ,
        'add_new' => __('Add New', 'resource', 'tk2021-textdomain') ,
        'add_new_item' => __('Add New Person', 'tk2021-textdomain') ,
        'new_item' => __('New Person', 'tk2021-textdomain') ,
        'edit_item' => __('Edit Person', 'tk2021-textdomain') ,
        'view_item' => __('View Person', 'tk2021-textdomain') ,
        'all_items' => __('All People', 'tk2021-textdomain') ,
        'search_items' => __('Search People', 'tk2021-textdomain') ,
        'parent_item_colon' => __('Parent People:', 'tk2021-textdomain') ,
        'not_found' => __('No personnel found.', 'tk2021-textdomain') ,
        'not_found_in_trash' => __('No personnel found in Trash.', 'tk2021-textdomain')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'personnel-list',
            'with_front' => false
        ) ,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-groups',
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );

    /******** Icon reference for $args['menu_position'] --> https://developer.wordpress.org/resource/dashicons/ *********/

    register_post_type('personnel', $args);
}
add_action('init', 'tk2021_personnel_init');