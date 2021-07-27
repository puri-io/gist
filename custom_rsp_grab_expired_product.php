<?php // Do not copy this line.


/**
 * Product reservation has expired and will be removed by from the cart session.
 */
function custom_rsp_grab_expired_product( $customer_id, $cart_item ) {

	// Make sure the customer is a registered user.
	$user = get_userdata( $customer_id );

	if ( empty( $user ) ) {
		return;
	}

	// Get the user email.
	$email = $user_info->user_email;

	// The product ID that will be removed from the cart.
	$product_id = ! empty( $item_data['variation_id'] ) ? $item_data['variation_id'] : $item_data['product_id'];

	// Do something...
}
add_action( 'reserved_stock_pro_cart_item_expired_from_session', 'custom_rsp_grab_expired_product', 10, 2 );
