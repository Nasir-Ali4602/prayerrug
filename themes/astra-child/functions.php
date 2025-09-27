<?php
require_once get_stylesheet_directory() . '/includes/theme-functions/functions.php';
require_once get_stylesheet_directory() . '/includes/minify/vendor/autoload.php';
if (is_user_logged_in()) {
    require_once get_stylesheet_directory() . '/includes/minify/vendor/autoload.php';
    require_once get_stylesheet_directory() . '/includes/minify/minify.php';
}


add_action('wp_enqueue_scripts', 'mytheme_enqueue_shop_now_script');
function mytheme_enqueue_shop_now_script(){
    wp_enqueue_script('mytheme-shop-now', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    wp_localize_script('mytheme-shop-now', 'mythemeShopNow', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('mytheme-shop-now-nonce')
    ));
}

add_action('wp_ajax_nopriv_mytheme_direct_add_to_cart', 'mytheme_direct_add_to_cart');
add_action('wp_ajax_mytheme_direct_add_to_cart', 'mytheme_direct_add_to_cart');

function mytheme_direct_add_to_cart(){
 
    check_ajax_referer('mytheme-shop-now-nonce', 'nonce');

    $product_id = isset($_POST['product_id']) ? absint($_POST['product_id']) : 0;
    $quantity   = isset($_POST['quantity']) ? absint($_POST['quantity']) : 1;

    if ($product_id <= 0) {
        wp_send_json_error(array('message' => 'Invalid product id'));
    }

    $added = WC()->cart->add_to_cart($product_id, $quantity);

    if ($added) {
        wp_send_json_success(array('checkout_url' => wc_get_checkout_url()));
    }

    wp_send_json_error(array('message' => 'Could not add to cart'));
}



add_action( 'woocommerce_before_checkout_form', 'mytheme_continue_shopping_button' );

function mytheme_continue_shopping_button() {
    if ( is_checkout() && ! is_order_received_page() ) {
        echo '<a class="button continue-shopping-btn" href="' . esc_url( home_url( '/' ) ) . '">← Continue Shopping</a>';
    }
}


