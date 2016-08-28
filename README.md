# Fixing product categories on the wc vendor page #
If you are using WC Vendors Plugin and you have set to show categories on the main shop page in woocommerce settings, you may notice the common issue that on individual vendor page we have categories displayed instead of the vendor products. That is because WC Vendors is using the archive-product.php file which is also used for shop page views. This issue can be easily resolved by changing the woocommerce settings to show all products on the main shop page, nevertheless, if you still would like to show vendor products on the wc vendor page while having product categories on main shop page, you would need to update your archive-product.php file.

## Installation ##
Just copy the archive-product.php to your current theme folder/woocommerce/ structure.

## Manual installation if you have different version of archive-product.php or custom code there ##
Instead of the line 67 that was `<?php woocommerce_product_subcategories(); ?>` put :
```<?php $vendor_shop = urldecode( get_query_var( 'vendor_shop' ) );
$vendor_id   = WCV_Vendors::get_vendor_id( $vendor_shop );
if ( !$vendor_id ) {
    woocommerce_product_subcategories();
} ?>`
```
