<?php
require('util/main.php');

require('model/database.php');
require('model/product_db.php');

/*********************************************
 * Select some products
 **********************************************/

// Sample data
$cat_id =2;

// Get the products
$products = get_products_by_category($cat_id);

/***************************************
 * Delete a product
 ****************************************/

// Sample data
$product_name = 'Fender Precision';

// Delete the product and display an appropriate messge
$product = get_product_by_name($product_name);
if ($product) {
    $product_id = $product['productID'];
    $row_count = delete_product($product_id);
    if ($row_count > 0) {
        $delete_message = "$row_count row was deleted.";
    } else {
        $delete_message = "No rows were deleted.";
    }
} else {
    $delete_message = "There is no product with that name.";
}


/***************************************
 * Insert a product
 ****************************************/

// Sample data
$category_id = 2;
$code = 'precision';
$name = 'Fender Precision';
$description = 'The Fender Precision bass guitar delivers the soun...';
$price = '799.99';

// Insert the data
$product_id = add_product($category_id, $code, $name, $description, $price, 0);
// Display an appropriate message
if ($product_id > 0) {
    $insert_message = "1 row was inserted with this ID: $product_id";
} else {
    $insert_message = "No rows were inserted.";
}

// Display the data
include 'home.php';

?>