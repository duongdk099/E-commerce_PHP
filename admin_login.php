<?php
// session_start();
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/view/AdminView.php';
require_once '/Applications/MAMP/htdocs/semaine2/ecommerce/model/AdminModel.php';
// Handle form submission
// var_dump($_SESSION['admin_credentials'])
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    var_dump($username,$password,isset($_SESSION['admin_credentials'][$username]) && $_SESSION['admin_credentials'][$username] === $password);
    
    if (isset($_SESSION['admin_credentials'][$username]) && $_SESSION['admin_credentials'][$username] === $password) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php');
        exit();
    } else {
        $error_message = 'Nom d\'utilisateur ou mot de passe incorrect!';
    }
}

$view = new AdminView();
$view->displayLogin();
?>

