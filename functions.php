<?php 

require_once get_theme_file_path( '/inc/tgm.php' );
require_once get_theme_file_path('/lib/codestar-framework/codestar-framework.php') ;
require_once get_theme_file_path('/inc/theme-options.php');

function tasty_theme_setup(){
    load_theme_textdomain('tasty', get_theme_file_uri('/languages'));
    add_theme_support( 'title-tag' );
    add_theme_support('custom-logo');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('html5', array('comment-form', 'search-form'));
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video', 'quote', 'audio', 'link' ) );
    add_image_size( 'meal-chef-special', 400,250,true );
    add_image_size( 'meal-about-photo', 460,300,true );

    register_nav_menu( 'primary', __('Primary Menu', 'meal') );
}
    

add_action('after_setup_theme', 'tasty_theme_setup');

function tasty_assets(){
    wp_enqueue_style( 'style-css', get_stylesheet_uri());

    wp_enqueue_style( 'kristi-font', '//fonts.googleapis.com/css?family=Kristi');
    wp_enqueue_style( 'lato-font', '//fonts.googleapis.com/css?family=Lato:300,400,700');
    wp_enqueue_style( 'lora-font', '//fonts.googleapis.com/css?family=Lora:400,700');

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', '1.0', 'all');
    wp_enqueue_style( 'base-css', get_template_directory_uri() . '/assets/css/base.css', '1.0', 'all');
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', '1.0', 'all');
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/assets/css/flexslider.css', '1.0', 'all');
    wp_enqueue_style( 'fonts-css', get_template_directory_uri() . '/assets/css/fonts.css', '1.0', 'all');

    wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'scroll-js', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'validate-js', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'placeholder-js', get_template_directory_uri() . '/assets/js/placeholders.min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'jquery-flexslider-js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'google-map', '//maps.googleapis.com/maps/api/js?key=AIzaSyBbGQXiGt-6UAmOFFdSzYI-byeE7ewBuVM&callback=initializeMap');
}

add_action('wp_enqueue_scripts', 'tasty_assets');

// Filter to add a class in the menu anchor link
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );