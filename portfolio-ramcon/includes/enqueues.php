<?php
/**
 * ✅ Enqueue scripts and styles for the theme.
 */
add_action('wp_enqueue_scripts', 'global_enqueues');
function global_enqueues () {
    // Bootstrap Enqueues
    bootstrap_enqueues();

    // SlickSlider Enqueues
    // slick_slider_enqueues();

    // Theme styles
    wp_enqueue_style('style-theme', get_template_directory_uri() . '/style.css', array(), filemtime(get_theme_file_path('style.css')), 'all');

    // General Styles Sass
    wp_enqueue_style('style.min', get_template_directory_uri() . '/assets/css/style.min.css', array(), filemtime(get_theme_file_path('/assets/css/style.min.css')), 'all');

    // Main Scripts
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), time(), true);

    if (is_front_page()) { 
        //wp_enqueue_script('index-js', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), time(), true);
    }

    if (is_page_template('template-home.php')) {
        slick_slider_enqueues();
        wp_enqueue_script('template-home-js', get_template_directory_uri() . '/assets/js/home.js', array('jquery'), time(), true);

        wp_localize_script('template-home-js','data',
            array(
                'templateUrl' => get_template_directory_uri()
            )
        );
    }

    if( is_singular('portafolios')) {
        slick_slider_enqueues();
        wp_enqueue_script('template-home-js', get_template_directory_uri() . '/assets/js/single-portfolio.js', array('jquery'), time(), true);
    }
}

/**
 * ✅ Enqueue scripts and styles for the Bootstrap framework.
 */
function bootstrap_enqueues () {
    // Bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);
}

/**
 * ✅ Enqueue scripts and styles for the SlickSlider.
 */
function slick_slider_enqueues () {
    // SlickSlider
    wp_enqueue_style('slick-styles', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
}