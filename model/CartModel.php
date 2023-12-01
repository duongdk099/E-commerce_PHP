<?php

class CartModel
{
    public function getCartItems()
    {
        return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    }

    public function isCartEmpty()
    {
        return empty($_SESSION['cart']);
    }
}
