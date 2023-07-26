<?php

session_start();

require_once './class/Products.php';
require_once './includes/database.php';
if(!isset($_GET['id'])){
    header('Location: /index.php');
}

$products = new Products($db);
$product = $products->getProduct($_GET['id']);

if($product === false) {
    header('Location: /index.php');
} else {
    $_SESSION['cart'][] = [
        'id' => $product['id'],
        'name' => $product['name'],
        'price' => $product['price'],
        'description' => $product['description'],
        'image' => $product['image']
    ];
    header('Location: /index.php');
}

