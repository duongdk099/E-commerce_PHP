<?php
session_start();
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/model/CartModel.php';
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/view/CartView.php';

$model = new CartModel();
$view = new CartView($model);
$view->displayCart();
// Initialize cart if it does not exist yet in the session
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle 'add to cart' action
if (isset($_GET['action']) && $_GET['action'] === 'add' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['products'][$id])) {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity']++;
        } else {
            $_SESSION['cart'][$id] = [
                'title' => $_SESSION['products'][$id]['title'],
                'quantity' => 1
            ];
        }
    }
}
