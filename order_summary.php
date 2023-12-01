<?php
session_start();
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/view/OrderSummaryView.php';
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/model/OrderSummaryModel.php';
// Redirect to index page if cart is empty or user info is not set
if (empty($_SESSION['cart']) || !isset($_SESSION['user_info'])) {
    header('Location: index.php');
    exit();
}

// Handle the proceed to payment action
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: thank_you.php');
    exit();
}

$model = new OrderSummaryModel();
$model->redirectToIndexIfEmpty();
$model->proceedToPayment();

$view = new OrderSummaryView($model);
$view->displayOrderSummary();

?>
