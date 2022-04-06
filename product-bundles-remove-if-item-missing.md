# WooCommerce Product Bundles - Remove bundle if item missing

``` php

/**
 * Remove the entire product bundle from the cart if any of the bundled products are missing from the cart.
 *
 * Hook fires while WooCommerce creates the cart session.
 *
 * @param array $cart_content
 * @return array $cart_content
 */
function custom_puri_remove_pb_bundle_if_item_is_missing( $cart_content ) {

	// WooCommerce Product Bundles check.
	if ( ! function_exists( 'wc_pb_is_bundle_container_cart_item' ) ) {
		return $cart_content;
	}

	foreach ( $cart_content  as $bundle_container_key => $cart_item ) {

		$bundle_container = wc_pb_is_bundle_container_cart_item( $cart_item );
		$bundled_items = ! empty( $cart_item['bundled_items'] ) ? $cart_item['bundled_items'] : false;

		if ( $bundle_container && $bundled_items ) {
			foreach ( $bundled_items as $bundled_item_key ) {
				// Check if the bundled item is still in the cart. Otherwise we need to remove the entire bundle.
				if ( empty( $cart_content[ $bundled_item_key ] ) ) {
					unset( $cart_content[ $bundle_container_key ] );
					break;
				}
			}
		}
	}

	return $cart_content;
}

 add_filter( 'woocommerce_cart_contents_changed', 'custom_puri_remove_pb_bundle_if_item_is_missing', 1, 50 );
