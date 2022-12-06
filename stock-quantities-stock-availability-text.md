
## Customize the WooCommerce Single product Availability Text

Customize 'in stock' text using the Puri.io Stock Multiplier from https://puri.io/plugin/stock-quantity-multiplier-for-woocommerce/

``` php
/**
 * Change the availability text of a product baseed on the Puri Stock Quantities plugin.
 *
 * @param array  $availability
 * @param object $product
 * @return array $availability
 */
function puri_example_display_stock_availability( $availability, $product ) {

	if ( ! function_exists( 'pwsq_get_product_multiplier' ) ) {
		return $availability;
	}

	$multiplier = pwsq_get_product_multiplier( $product->get_id() );
	$all_stock = $product->get_stock_quantity();

	if ( $product->is_in_stock() && ! empty( $all_stock ) && ! empty( $multiplier ) ) {

		$stock_available_stock_with_multiplier = intval( $all_stock / $multiplier );

		if ( empty( $stock_available_stock_with_multiplier ) ) {
			$availability['class'] = 'out-of-stock';
			$availability['availability'] = 'Not enough available'; // CHANGE THE TEXT.
		} else {
			$availability['availability'] = $stock_available_stock_with_multiplier . ' available'; // CHANGE THE NEXT HERE.
		}
	}

	return $availability;
}

add_filter( 'woocommerce_get_availability', 'puri_example_display_stock_availability', 1, 2 );

```
