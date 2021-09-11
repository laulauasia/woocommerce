// Remove the product description Title
add_filter( 'woocommerce_product_description_heading', '__return_null' );


// Change the product description title
add_filter('woocommerce_product_description_heading', 'change_product_description_heading');
function change_product_description_heading() {
 return __('NEW TITLE HERE', 'woocommerce');
}

// Remove the additional information title
add_filter( 'woocommerce_product_additional_information_heading', '__return_null' );

// Change the additional information title
function change_additional_information_heading() {
    return __('NEW TITLE HERE', 'woocommerce');
}
add_filter( 'woocommerce_product_additional_information_heading', 'change_additional_information_heading' );


.woocommerce-Reviews .woocommerce-Reviews-title{
  display: none;
}

