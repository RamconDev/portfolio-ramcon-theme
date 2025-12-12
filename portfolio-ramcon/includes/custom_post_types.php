<?php

/**
 * ✅ Custom Post Type
 * This code registers a custom post type in WordPress.
 */
function register_cpt_portafolios() {
    $cpt_name = 'Portafolios';
    $singular_name = 'portafolio';
    $slug_name = 'portafolios';
    $menu_icon = 'dashicons-portfolio';

    $labels = [
        'name' => __( $cpt_name ),
        'singular_name' => __( $singular_name ),
        'menu_name' => __( $cpt_name, 'admin_menu' ),
        'view_item' => __( 'Ver ' . $singular_name ),
        'search_items' => __( 'Buscar ' . $singular_name ),
    ];

    $args = [
        'label' => __( $cpt_name ),
        'labels' => $labels,
        'public' => true,
        'menu_icon' => $menu_icon,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => $slug_name],
        'show_in_rest' => true,
    ];

    register_post_type($cpt_name, $args);
}
add_action('init', 'register_cpt_portafolios');

function register_taxonomy_tecnologias() {
    $taxonomy_name = 'Tecnologias';
    $taxonomy_slug = 'tecnologias';
    $singular_name = 'tecnologia';
    $cpt_name = 'portafolios';

    $args = array(
        'labels' => array(
            'name' => $taxonomy_name,
            'singular_name' => $singular_name,
        ),
        'public' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => $taxonomy_slug),
    );

    register_taxonomy($taxonomy_name, $cpt_name, $args);
}
add_action('init', 'register_taxonomy_tecnologias');


/**
 * ✅
 */
function register_cpt_experience() {
    $cpt_name = 'Experiencias';
    $singular_name = 'experiencia';
    $slug_name = 'experiencias';
    $menu_icon = 'dashicons-yes-alt';

    $labels = [
        'name' => __( $cpt_name ),
        'singular_name' => __( $singular_name ),
        'menu_name' => __( $cpt_name, 'admin_menu' ),
        'view_item' => __( 'Ver ' . $singular_name ),
        'search_items' => __( 'Buscar ' . $singular_name ),
    ];

    $args = [
        'label' => __( $cpt_name ),
        'labels' => $labels,
        'public' => true,
        'menu_icon' => $menu_icon,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => $slug_name],
        'show_in_rest' => true,
    ];

    register_post_type($cpt_name, $args);
}
add_action('init', 'register_cpt_experience');

/**
 * ✅
 */
function register_cpt_certifications() {
    $cpt_name = 'Certificaciones';
    $singular_name = 'certificacion';
    $slug_name = 'certificaciones';
    $menu_icon = 'dashicons-welcome-learn-more';

    $labels = [
        'name' => __( $cpt_name ),
        'singular_name' => __( $singular_name ),
        'menu_name' => __( $cpt_name, 'admin_menu' ),
        'view_item' => __( 'Ver ' . $singular_name ),
        'search_items' => __( 'Buscar ' . $singular_name ),
    ];

    $args = [
        'label' => __( $cpt_name ),
        'labels' => $labels,
        'public' => true,
        'menu_icon' => $menu_icon,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => $slug_name],
        'show_in_rest' => true,
    ];

    register_post_type($cpt_name, $args);
}
add_action('init', 'register_cpt_certifications');