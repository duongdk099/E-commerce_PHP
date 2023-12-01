<?php

class OrderSummaryModel
{
    public function getCartItems()
    {
        return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    }

    public function getUserInfo()
    {
        return isset($_SESSION['user_info']) ? $_SESSION['user_info'] : [];
    }

    public function redirectToIndexIfEmpty()
    {
        if (empty($_SESSION['cart']) || !isset($_SESSION['user_info'])) {
            header('Location: index.php');
            exit();
        }
    }

    public function proceedToPayment()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            header('Location: thank_you.php');
            exit();
        }
    }
}
