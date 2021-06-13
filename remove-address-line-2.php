<?php
// Do NOT include the opening php tag.
// Place in your theme's functions.php file

// Set address 2 to not required
add_filter('woocommerce_checkout_fields', 'unrequire_address_2_checkout_fields' );

function unrequire_address_2_checkout_fields( $fields ) {
	$fields['billing']['billing_address_2']['required'] = false;
	$fields['shipping']['shipping_address_2']['required'] = false;

	return $fields;
}

// Remove billing address 2 from Checkout for WooCommerce
add_filter('cfw_get_billing_checkout_fields', 'remove_billing_address_2_checkout_fields', 100, 3);

function remove_billing_address_2_checkout_fields( $fields ) {
	unset($fields['billing_address_2']);

	return $fields;
}

// Remove shipping address 2 from Checkout for WooCommerce
add_filter('cfw_get_shipping_checkout_fields', 'remove_shipping_address_2_checkout_fields', 100, 3);

function remove_shipping_address_2_checkout_fields( $fields ) {	
	unset($fields['shipping_address_2']);

	return $fields;
}
