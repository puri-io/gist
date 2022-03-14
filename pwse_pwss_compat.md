```` php
/**
 * Add stock status product metafields to the stock editor.
 *
 * @param array $configuation
 * @return $configuation
 */
/**
 * Add stock status product metafields to the stock editor.
 *
 * @param array $configuation
 * @return $configuation
 */
function puri_custom_stock_editor_columns( $configuation ) {

	$product_meta = [
		[
			'metaKey' => 'meta_data.pwss_instock_text',
			'name' => __( 'In Stock Text', 'puri-wc-stock-editor' ),
			'fieldType' => 'text',
			'fieldOptions' => [
				'placeholder' => get_option( 'pwss_global_instock_text', 'Default' ),
				'style' => [ 'minWidth' => '350px' ],
			],
		],
		[
			'metaKey' => 'meta_data.pwss_lowstock_text',
			'name' => __( 'Low Stock Text', 'puri-wc-stock-editor' ),
			'fieldType' => 'text',
			'fieldOptions' => [
				'placeholder' => get_option( 'pwss_global_lowstock_text', 'Default' ),
				'style' => [ 'minWidth' => '350px' ],
			],
		],
		[
			'metaKey' => 'meta_data.pwss_outofstock_text',
			'name' => __( 'Out of stock Text', 'puri-wc-stock-editor' ),
			'fieldType' => 'text',
			'fieldOptions' => [
				'placeholder' => get_option( 'pwss_global_outofstock_text', 'Default' ),
				'style' => [ 'minWidth' => '350px' ],
			],
		],
		[
			'metaKey' => 'meta_data.pwss_onbackorder_text',
			'name' => __( 'On backorder Text', 'puri-wc-stock-editor' ),
			'fieldType' => 'text',
			'fieldOptions' => [
				'placeholder' => get_option( 'pwss_global_onbackorder_text', 'Default' ),
				'style' => [ 'minWidth' => '350px' ],
			],
		],
	];

	$configuation['productColumns'] = $product_meta;
	$configuation['variationColumns'] = $product_meta;

	return $configuation;
}

add_filter( 'pwse_editor_configuation', 'puri_custom_stock_editor_columns', 10, 1 );
````
