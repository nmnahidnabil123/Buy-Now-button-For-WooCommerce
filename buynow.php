add_action( 'woocommerce_after_add_to_cart_button', 'add_buy_now_button', 10 );
function add_buy_now_button() {
    global $product;
    echo '<a href="'. esc_url( wc_get_checkout_url() ) . '?add-to-checkout=' . esc_attr( $product->get_id() ) .'" class="single_add_to_cart_button button alt">'. __("Buy Now", "woocommerce") .'</a>';
}
