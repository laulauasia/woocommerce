<?php>
        
/**
 * @snippet       Hide Shipping Fields for Local Pickup
 * @how-to        Get CustomizeWoo.com FREE
 * @sourcecode    https://businessbloomer.com/?p=72660
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 3.5.7
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
   
add_action( 'woocommerce_after_checkout_form', 'bbloomer_disable_shipping_local_pickup' );
  
function bbloomer_disable_shipping_local_pickup( $available_gateways ) {
    
   // Part 1: Hide shipping based on the static choice @ Cart
   // Note: "#customer_details .col-2" strictly depends on your theme
 
   $chosen_methods = WC()->session->get( 'chosen_shipping_methods' );
   $chosen_shipping = $chosen_methods[0];
   if ( 0 === strpos( $chosen_shipping, 'local_pickup' ) ) {
   ?>
      <script type="text/javascript">
         jQuery('#customer_details .col-2').fadeOut();
      </script>
   <?php  
   } 
 
   // Part 2: Hide shipping based on the dynamic choice @ Checkout
   // Note: "#customer_details .col-2" strictly depends on your theme
 
   ?>
      <script type="text/javascript">
         jQuery('form.checkout').on('change','input[name^="shipping_method"]',function() {
            var val = jQuery( this ).val();
            if (val.match("^local_pickup")) {
                     jQuery('#customer_details .col-2').fadeOut();
               } else {
               jQuery('#customer_details .col-2').fadeIn();
            }
         });
      </script>
   <?php
  
}
