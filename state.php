<?php

//State - add to functions.php
// Only one state e.g. PA in US

add_filter( 'woocommerce_states', 'custom_woocommerce_states' );
function custom_woocommerce_states( $states ) {
$states['MY'] = array(
'SGR' => __( 'Selangor', 'woocommerce' ),
'KUL' => __( 'W.P. Kuala Lumpur', 'woocommerce' ),
'PJY' => __( 'W.P. Putrajaya', 'woocommerce' )
);
return $states;
}
