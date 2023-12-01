<?php
session_start();
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/view/ThankYouView.php';
// Redirect to index page if user info is not set
if (!isset($_SESSION['user_info'])) {
    header('Location: index.php');
    exit();
}

// Optionally, clear the cart and user_info after order is completed
unset($_SESSION['cart']);
unset($_SESSION['user_info']);

$view = new ThankYouView();
$view->displayThankYouPage();
?>
