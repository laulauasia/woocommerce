/* remove category */
.single-product .product .product_meta span.posted_in {
    display: none;
}

/* remove "Description" h2 from description tab */
.woocommerce-tabs #tab-description h2 {
    display: none;
}





/* Hide the original Read More label. */
.outofstock .button.product_type_simple {

    visibility: hidden;

}

/* Replace original label with Out of Stock label. */
.outofstock .button.product_type_simple::before {

    content: "Out of Stock"; /* New custom text. */
    visibility: visible !important; /* Make this new label visible. */
    background-color: rgba(255,255,255,0.5); /* Semi transparent white background. */
    padding: 5%; /* Create space around the new text label. */
    position: absolute; /* For center alignment. */
    left: 0; /* For center alignment. */
    right: 0; /* For center alignment. */

}
