<?php
/* This piece of code will hide fields for the chosen method.
.hide_pickup {
    display: none !important;
}
*/
 
// Hide Local Pickup shipping method
add_filter( 'woocommerce_checkout_fields', 'hide_local_pickup_method' );
function hide_local_pickup_method( $fields_pickup ) {
    // change below for the method
    $shipping_method_pickup ='local_pickup:4';
    // change below for the list of fields. Add (or delete) the field name you want (or don’t want) to use
    $hide_fields_pickup = array( 'billing_company', 'billing_country', 'billing_postcode', 'billing_address_1', 'billing_address_2' , 'billing_city', 'billing_state');
 
    $chosen_methods_pickup = WC()->session->get( 'chosen_shipping_methods' );
    $chosen_shipping_pickup = $chosen_methods_pickup[0];
 
    foreach($hide_fields_pickup as $field_pickup ) {
        if ($chosen_shipping_pickup == $shipping_method_pickup) {
            $fields_pickup['billing'][$field_pickup]['required'] = false;
            $fields_pickup['billing'][$field_pickup]['class'][] = 'hide_pickup';
        }
        $fields_pickup['billing'][$field_pickup]['class'][] = 'billing-dynamic_pickup';
    }
    return $fields_pickup;
}
// Local Pickup - hide fields
add_action( 'wp_head', 'local_pickup_fields', 999 );
function local_pickup_fields() {
    if (is_checkout()) :
    ?>
    <style>
        .hide_pickup {display: none!important;}
    </style>
    <script>
        jQuery( function( $ ) {
            if ( typeof woocommerce_params === 'undefined' ) {
                return false;
            }
            $(document).on( 'change', '#shipping_method input[type="radio"]', function() {
                // change local_pickup:4 accordingly
            $('.billing-dynamic_pickup').toggleClass('hide_pickup', this.value == 'local_pickup:4');
            });
        });
    </script>
    <?php
    endif;
}
