<?php
/**
 * ✅ Available menus
 */
add_theme_support( 'menus' );

function register_my_menus() {
    register_nav_menus([
        'navbar-menu' => __('Navbar Menu'),
        'footer-menu' => __('Footer Menu'),
    ]);
}
add_action('after_setup_theme', 'register_my_menus');


/**
 * ✅ Available posts thumbnails
 */
function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

/*
 * ✅ Add support for title tag in head section.
 * This allows WordPress to manage the document title.
 */
add_theme_support('title-tag');

/**
 * ✅ Disable the block editor for posts.
 * This will revert to the classic editor for posts.
 */
add_filter('use_block_editor_for_post_type', '__return_false', 100);