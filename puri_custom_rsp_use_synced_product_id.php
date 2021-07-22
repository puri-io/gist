<?php // Do not copy this line.

/**
 * Change the product id RSP will handle for products that already have stock synced.
 *
 * Treat one product as the parent.
 */
function puri_custom_rsp_use_synced_product_id( $product_id ) {

	// If product id 100 is being handled, switch to product id 200 instead.
	if ( $product_id === 100 ) {
		$product_id = 200;
	}

	return $product_id;
}
add_filter( 'reserved_stock_pro_handle_product_id', 'puri_custom_rsp_use_synced_product_id', 10 );
