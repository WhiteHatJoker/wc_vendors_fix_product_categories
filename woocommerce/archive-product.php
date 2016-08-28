<?php $vendor_shop = urldecode( get_query_var( 'vendor_shop' ) );
$vendor_id   = WCV_Vendors::get_vendor_id( $vendor_shop );
if ( !$vendor_id ) {
    woocommerce_product_subcategories();
} ?>
