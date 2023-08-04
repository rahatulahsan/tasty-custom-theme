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
    wp_enqueue_style( 'fontawesome-css', '//use.fontawesome.com/releases/v5.0.8/css/all.css');

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
    
    if(is_page_template( 'page-templates/landing-page.php' )){
        wp_enqueue_script( 'tasty-reservation-js', get_template_directory_uri() . '/assets/js/reservation.js', array('jquery'), 1.0,true);
        $ajaxurl = admin_url('admin-ajax.php');

        wp_localize_script( 'tasty-reservation-js', 'url', array('ajaxurl' => $ajaxurl) );
    }
    

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

function tasty_process_reservation(){


    // Matching with Nonce token and gettng data for JS
    if(check_ajax_referer( 'reservation', 'rn')){
        $name = sanitize_text_field($_POST['name']);
        $phone = sanitize_text_field($_POST['phone']);
        $email = sanitize_text_field($_POST['email']);
        $person = sanitize_text_field($_POST['person']);
        $table = sanitize_text_field($_POST['table']);
        $date = sanitize_text_field($_POST['date']);
        $time = sanitize_text_field($_POST['time']);

        // Adding gathered data in a array
        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'person' => $person,
            'table' => $table,
            'date' => $date,
            'time' => $time
        );

        //print_r($data);

        // Making data for making Reservation post
        $reservation_arguments = array(
            'post_type' => 'reservation',
            'post_author' => 1,
            'post_date' => date('Y-m-d H:i:s'),
            'post_status' => 'publish',
            'post_title' => sprintf('%s - Reservation for %s persons on %s - %s', $name,$person,$date." : ".$time, $email),
            'meta_input' => $data
        );

        // Duplicate Checking with Meta Query
        $reservations = new WP_Query(array(
            'post_type' => 'reservation',
            'post_status' => 'publish',
            'meta_query' => array(
                'relation' => 'AND',
                'email_check' => array(
                    'key' => 'email',
                    'value' => $email
                ),
                'date_check' => array(
                    'key' => 'date',
                    'value' => $date
                ),
                'time_check' => array(
                    'key' => 'time',
                    'value' => $time
                )
            )
        ));

        // Checking the data with conditions
        if($reservations->found_posts > 0){
            echo 'Duplicate';
        }else{

            $wp_error = '';
            $reservation_id = wp_insert_post($reservation_arguments, $wp_error); // wp_insert_post return ID automatically if successfull. 
            
            if(!$wp_error){
                // Creating order data for woo-commerce
                $_name = explode(' ', $name);
                $order_data = array(
                    'first_name' => $name[0],
                    'last_name' => isset($_name[1])? $_name[1] : '',
                    'email' => $email,
                    'phone' => $phone
                );

                // Creating a order
                $order = wc_create_order();
                $order->set_address($order_data, 'billing');
                $order->add_product(wc_get_product(110), 1); // 110 is the product ID, 1 is the no of product

                // Linking order with reservation
                $order->set_customer_note($reservation_id);
                
                $order->calculate_totals();

            
                // Setting inverse relation with Reservation
                add_post_meta($reservation_id, 'order_id', $order->get_id());
                
                // Sending customer for checkout and payment
                echo $order->get_checkout_payment_url();
            }
        }


    }else{
        echo "Not allowed";
    }
    die();
}
add_action('wp_ajax_reservation', 'tasty_process_reservation');
add_action('wp_ajax_nopriv_reservation', 'tasty_process_reservation');

// Removing Extra Billing and shipping fields
function tasty_checkout_fields($fields){

    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);

    unset($fields['shipping']['shipping_first_name']);
    unset($fields['shipping']['shipping_last_name']);
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_city']);
    unset($fields['shipping']['shipping_postcode']);
    unset($fields['shipping']['shipping_country']);
    unset($fields['shipping']['shipping_state']);

    unset($fields['order']['order_comments']);

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'tasty_checkout_fields');


// Changing the Reservation Post title based on Order Status
function tasty_reservation_order_status_processing($order_id){
    
    // getting the order with order_id
    $order = wc_get_order($order_id);

    // From that order getting the reservation id
    $reservation_id = $order->get_customer_note();
    
    if($reservation_id){
        //getting the reservation post with that ID
        $reservation = get_post($reservation_id);

        // Updating the post
        wp_update_post(array(
            'ID' => $reservation_id,
            'post_title' => '[PAID] - '. $reservation->post_title
        ));

        // Adding a meta value in the reservation
        add_post_meta($reservation_id, 'paid', 1);
    }
}

add_filter('woocommerce_order_status_processing', 'tasty_reservation_order_status_processing');