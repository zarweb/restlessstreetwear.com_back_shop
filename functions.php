<?php
function theme_name_scripts() {
    wp_enqueue_script( 'jqury-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );
    wp_enqueue_script( 'html5shiv-js', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js' );
    wp_enqueue_script( 'respond-js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js' );
    wp_enqueue_script( 'bootstrap-min-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' );
    wp_enqueue_script( 'wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js' );
    wp_enqueue_script( 'owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js' );
    wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js' );
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/common.js');


    wp_enqueue_style( 'style-css', get_stylesheet_uri()  );
    wp_enqueue_style( 'bootsrup-css', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style( 'animate-css', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );
    wp_enqueue_style( 'carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css' );
//    wp_enqueue_style( 'font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'font-google-css', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
    wp_enqueue_style( 'fontawesomecss', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );
//    wp_enqueue_style( 'theme-owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css' );


}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );



function reg_menu() {
    register_nav_menus(array(

        'header' => 'Header Menu',
        'footer' => 'Footer Menu',
        'menu-right' => 'Right Menu',
        'menu-left' => 'Left Menu',

    ));
}
add_action('after_setup_theme', 'reg_menu');



add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );    // < 2.1

function woo_custom_cart_button_text() {

    return __( 'Add To Bag', 'woocommerce' );

}


add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts() {
    echo '<style>
.product_text_fild_title{
    margin-left: 10px;
}
} 
</style>';
}


add_theme_support( 'woocommerce' );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

function wc_empty_cart_redirect_url() {
    return  site_url('collections');
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );

add_filter( 'woocommerce_product_tabs', 'bbloomer_remove_product_tabs', 98 );

function bbloomer_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );
    return $tabs;
}

//$address_fields = apply_filters('woocommerce_billing_fields', $address_fields);
// $this->checkout_fields['billing'] =  array(
//
//    'billing_first_name' => array(
//    'type' => 'text',
//
//    'placeholder' => _x('test', 'placeholder', 'woocommerce'),
//    'class' => array('form-control'),
//
//)
//    );


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
    $fields['billing']['billing_first_name']['placeholder'] = 'First Name';
    $fields['billing']['billing_last_name']['placeholder'] = 'Last Name';
    $fields['billing']['billing_company']['placeholder'] = 'Company';
    $fields['billing']['billing_address_1']['placeholder'] = 'Address 1';
    $fields['billing']['billing_address_2']['placeholder'] = 'Address 2';
    $fields['billing']['billing_city']['placeholder'] = 'City';
    $fields['billing']['billing_postcode']['placeholder'] = 'Postcode';
    $fields['billing']['billing_country']['placeholder'] = 'Country';
    $fields['billing']['billing_state']['placeholder'] = 'State';
    $fields['billing']['billing_email']['placeholder'] = 'Email';
    $fields['billing']['billing_phone']['placeholder'] = 'Phone';

    unset($fields['billing']['billing_first_name']['label']);
    unset($fields['billing']['billing_last_name']['label']);
    unset($fields['billing']['billing_company']['label']);
    unset($fields['billing']['billing_address_1']['label']);
    unset($fields['billing']['billing_address_2']['label']);
    unset($fields['billing']['billing_city']['label']);
    unset($fields['billing']['billing_postcode']['label']);
    unset($fields['billing']['billing_country']['label']);
    unset($fields['billing']['billing_state']['label']);
    unset($fields['billing']['billing_email']['label']);
    unset($fields['billing']['billing_phone']['label']);


    return $fields;
}

add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );


add_filter( 'woocommerce_get_availability', 'wcs_custom_get_availability', 1, 2);
function wcs_custom_get_availability( $availability, $_product ) {

    // Change In Stock Text
    if ( $_product->is_in_stock() ) {
        $availability['availability'] = __('Available!', 'woocommerce');
    }
    // Change Out of Stock Text
    if ( ! $_product->is_in_stock() ) {
        $availability['availability'] = __('Sold Out', 'woocommerce');
    }
    return $availability;
}

add_filter("woocommerce_variable_sale_price_html", "my_remove_prices", 10, 2);
add_filter("woocommerce_variable_price_html", "my_remove_prices", 10, 2);
add_filter("woocommerce_get_price_html", "my_remove_prices", 10, 2);


function my_remove_prices($price, $product)
{
    if (!$product->is_in_stock())
    {
        $price = "SOLD OUT";

    }
    return $price;
}

add_filter( 'add_to_cart_text', 'woo_custom_single_add_to_cart_text' );
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );

function woo_custom_single_add_to_cart_text() {

    return __( 'ADD TO BAG', 'woocommerce' );

}




add_filter( 'wcspt_reveal_last_img', '__return_true' );




function create_post_type() {
    register_post_type( 'acme_video',
        array(
            'labels' => array(
                'name' => __( 'Home Video' ),
                'singular_name' => __( 'Home Video' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail','custom-fields','excerpt','post-formats','page-attributes','comments','trackbacks'),
        )
    );
}
add_action( 'init', 'create_post_type' );




add_shortcode( 'out_of_stock_products', 'bbloomer_out_of_stock_products_shortcode' );

function bbloomer_out_of_stock_products_shortcode() {
    global $product, $woocommerce, $woocommerce_loop;
    $columns = 4;

    $args = array(
        'post_type'             => 'product',
        'post_status'           => 'publish',
        'meta_query'            => array(
            array(
                'key'           => '_stock',
                'value'         => 1,
                'compare'       => '<'
            )
        )
    );
    $loop = new WP_Query($args);

    ob_start();

    woocommerce_product_loop_start();

    while ( $loop->have_posts() ) : $loop->the_post();
        wc_get_template_part( 'content', 'product' );
    endwhile;

    woocommerce_product_loop_end();

    woocommerce_reset_loop();
    wp_reset_postdata();

    return '<div class="woocommerce columns-' . $columns . '">' . ob_get_clean() . '</div>';
}


function sww_wc_remove_variation_stock_display( $data ) {
    unset( $data['availability_html'] );
    return $data;
}
add_filter( 'woocommerce_available_variation', 'sww_wc_remove_variation_stock_display', 99 );