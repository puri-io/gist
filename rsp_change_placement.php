<?php // Do not copy this line.

/**
 * Change the placement of the reservation messages on product pages.
 */
function custom_change_reservation_message_placement( $placement_hook ) {

	$placement_hook = 'woocommerce_before_add_to_cart_form';

	return $placement_hook;
}

add_filter( 'reserved_stock_pro_stock_message_placement', 'custom_change_reservation_message_placement', 10 );
