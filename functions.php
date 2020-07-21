     
<?php

//Load stylesheets
function load_stylesheets()
{
    wp_register_style('apple-touch-icon', get_template_directory_uri() . '/apple-touch-icon.png', array(), 1, 'all');
    wp_enqueue_style('apple-touch-icon');

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

//Load scripts
function load_js()
{
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.0.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('headline', get_template_directory_uri() . '/assets/js/headline.js', array(), 1, 1, 1);
    wp_enqueue_script('headline');

    wp_register_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), 1, 1, 1);
    wp_enqueue_script('magnific');

    wp_register_script('scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array(), 1, 1, 1);
    wp_enqueue_script('scrollUp');

    wp_register_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), 1, 1, 1);
    wp_enqueue_script('counterup');

    wp_register_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), 1, 1, 1);
    wp_enqueue_script('waypoints');

    wp_register_script('parallax', get_template_directory_uri() . '/assets/js/jquery.parallax-1.1.3.js', array(), 1, 1, 1);
    wp_enqueue_script('parallax');

    wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1, 1, 1);
    wp_enqueue_script('carousel');

    wp_register_script('meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array(), 1, 1, 1);
    wp_enqueue_script('meanmenu');

    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 1, 1, 1);
    wp_enqueue_script('wow');

    wp_register_script('ajax', get_template_directory_uri() . '/assets/js/ajax-mail.js', array(), 1, 1, 1);
    wp_enqueue_script('ajax');

    wp_register_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), 1, 1, 1);
    wp_enqueue_script('plugins');

    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 1, 1, 1);
    wp_enqueue_script('main');

    wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array(), 1, 1, 1);
    wp_enqueue_script('modernizr');
}
add_action('wp_enqueue_scripts','load_js');

// Add menu support
add_theme_support('menus');

// Register menus
register_nav_menus(
    array(
        'main-menu' => __('Main Menu', 'theme')
    )
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Include custom navwalker
require_once('bs4navwalker.php');

//Logo support
add_theme_support('custom-logo');

function themename_custom_logo_setup()
{
    $defaults = array(
        'height'      => 41,
        'width'       => 242,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

function helpwp_custom_logo_output($html)
{
    $html = str_replace('custom-logo-link', 'navbar-brand', $html);
    return $html;
}
add_filter('get_custom_logo', 'helpwp_custom_logo_output', 10);

//Custom image size
add_image_size('image_large', 700, 700, false);
add_image_size('image_small', 400, 400, false);
add_image_size('image_home', 1520, 750, true);
add_image_size('image_academic_programs', 358, 239, true);
add_image_size('logo', 242, 41, true);
?>
