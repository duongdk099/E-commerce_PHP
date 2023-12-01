<?php
session_start();
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/view/AdminView.php';
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (!isset($_SESSION['admin_credentials'])) {
        $_SESSION['admin_credentials'] = [];
    }

    $_SESSION['admin_credentials'][$username] = $password;
    var_dump($_SESSION['admin_credentials'][$username]);
    header('Location: admin_login.php');
    exit();
}

$view = new AdminView();
$view->displayRegister();
?>

