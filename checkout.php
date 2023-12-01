<?php
session_start();
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/view/CheckoutView.php';

// Redirect to cart page if cart is empty
if (empty($_SESSION['cart'])) {
    header('Location: cart.php');
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['user_info'] = [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'address' => $_POST['address'],
    ];
    
    header('Location: order_summary.php');
    exit();
}

$view = new CheckoutView();
$view->displayCheckoutForm();
?>


