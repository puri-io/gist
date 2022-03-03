# Dynamic Tag snippet


```
/**
 * Create a dynamic date tag to use with Stock Status for WooCommerce by Puri.io
 *
 * @param [type] $tags
 * @param [type] $product
 * @return void
 */
function puri_custom_next_monday_pickup( $tags, $product ) {

		// Set the WordPress timezone and find monday.
		$datetime = date_create( '@' . time() );
		$datetime->setTimezone( wp_timezone() );
		$datetime->modify( 'next monday' );
		$datetime->format( 'd/m/Y' );

		$tags['{monday_pickup}'] = $datetime->format( 'd/m/Y' );

		return $tags;
}

add_filter( 'pwss_dynamic_text_tags', 'puri_custom_next_monday_pickup', 10, 2 );
```

