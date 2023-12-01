<?php
// session_start();
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/model/ListProductsModel.php';
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/view/AdminView.php';
// Redirect to admin login page if not logged in
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: admin_login.php');
    exit();
}

$model = new ListProductsModel();
$products = $model->getProducts();
$view = new AdminView();

// Load products from session or initialize empty array
// $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
?>

