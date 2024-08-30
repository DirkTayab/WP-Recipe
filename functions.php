<?php

function recipe_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css', microtime());
}

add_action('wp_enqueue_scripts', 'recipe_assets');

function recipe_theme_support(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

    register_nav_menu('header_menu', 'Header Menu');
}

add_action('after_setup_theme', 'recipe_theme_support');

function recipe_custom_post() {
    $week_label = array(
        'name' => __('Week', 'textdomain'), 
        'singularname' => __('Week', 'textdomain'), 
        'add_new' => __('Add Week', 'textdomain'), 
        'edit_item' => __('Edit Week', 'textdomain'), 
        'add_new_item' => __('Add New Week', 'textdomain'), 
        'all_item' => __('Week', 'textdomain'), 
    );
    $week_args = array(
        'labels' => $week_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );
    register_post_type('week', $week_args);
    }

add_action ('init', 'recipe_custom_post');
