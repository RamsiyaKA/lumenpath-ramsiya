<?php
/* Child Theme Functions */

// Enqueue Parent and Child Theme Styles
function my_child_theme_enqueue_styles() {
   // Enqueue parent theme style
   wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Load plugin & vendor styles
    $styles = array(
        'preloader-style'       => '/assets/css/plugins/preloader.css',
        'bootstrap-style'       => '/assets/css/vendor/bootstrap.min.css',
        'meanmenu-style'        => '/assets/css/plugins/meanmenu.css',
        'animate-style'         => '/assets/css/vendor/animate.min.css',
        'swiper-style'          => '/assets/css/plugins/swiper-bundle.min.css',
        'backtotop-style'       => '/assets/css/plugins/backToTop.css',
        'jquery-ui-style'       => '/assets/css/plugins/jquery-ui.min.css',
        'magnific-popup-style'  => '/assets/css/vendor/magnific-popup.css',
        'nice-select-style'     => '/assets/css/plugins/nice-select.css',
        'fontawesome-style'     => '/assets/css/vendor/fontAwesome6Pro.css',
        'icomoon-style'         => '/assets/css/vendor/icomoon.css',
        'slick-style'           => '/assets/css/plugins/slick.css',
        'odometer-style'        => '/assets/css/plugins/odometer.css'
    );

    foreach ($styles as $name => $path) {
        wp_enqueue_style($name, get_stylesheet_directory_uri() . $path, array(), '1.0', 'all');
    }

   // Enqueue child theme style
   wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), '1.0', 'all');

    // Load JavaScript files
    $scripts = array(
        'waypoints-js'         => '/assets/js/vendor/waypoints.min.js',
        'bootstrap-js'         => '/assets/js/vendor/bootstrap.bundle.min.js',
        'meanmenu-js'          => '/assets/js/plugins/meanmenu.js',
        'swiper-js'            => '/assets/js/plugins/swiper-bundle.min.js',
        'magnific-popup-js'    => '/assets/js/vendor/magnific-popup.min.js',
        'backtotop-js'         => '/assets/js/plugins/backToTop.js',
        'nice-select-js'       => '/assets/js/plugins/nice-select.min.js',
        'ajax-form-js'         => '/assets/js/vendor/ajax-form.js',
        'wow-js'               => '/assets/js/plugins/wow.min.js',
        'isotope-js'           => '/assets/js/vendor/isotope.pkgd.min.js',
        'imagesloaded-js'      => '/assets/js/vendor/imagesloaded.pkgd.min.js',
        'appear-js'            => '/assets/js/vendor/jquery.appear.js',
        'odometer-js'          => '/assets/js/vendor/jquery.odometer.min.js',
        'ui-slider-js'         => '/assets/js/vendor/jquery-ui-slider-range.js',
        'slick-js'             => '/assets/js/plugins/slick.min.js',
        'circle-progress-js'   => '/assets/js/vendor/js_circle-progress.min.js',
        'main-js'              => '/assets/js/main.js'
    );

    foreach ($scripts as $name => $path) {
        wp_enqueue_script($name, get_stylesheet_directory_uri() . $path, array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');

// Register Menus
function my_child_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-child-theme'),
        // You can add more menus here if needed
    ));
}
add_action('after_setup_theme', 'my_child_theme_setup');

// Add Theme Support
function my_child_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    // Add more theme supports as needed
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
}
add_action('after_setup_theme', 'my_child_theme_support');

function my_child_theme_force_index() {
    if (is_front_page()) {
        include get_stylesheet_directory() . '/index.php';
        exit;
    }
}
add_action('template_redirect', 'my_child_theme_force_index');
