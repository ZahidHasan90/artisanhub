<?php
require_once '../app.php';
session_start();

// Check if a product ID is passed via GET
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Check if the cart exists and if the product is in the cart
    if (isset($_SESSION['cart']) && array_key_exists($productId, $_SESSION['cart'])) {
        // Remove the product from the cart
        unset($_SESSION['cart'][$productId]);
    }
}

// Redirect back to the cart page
header('Location: /local_shop/cart/');
exit;
?>


