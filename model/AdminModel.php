<?php

class AdminModel
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['admin_credentials'])) {
            $_SESSION['admin_credentials'] = [];
        }
    }

    public function registerAdmin($username, $password)
    {
        $_SESSION['admin_credentials'][$username] = $password;
    }

    public function adminExists($username)
    {
        return isset($_SESSION['admin_credentials'][$username]);
    }

    public function verifyAdminCredentials($username, $password)
    {
        if (isset($_SESSION['admin_credentials'][$username]) && $_SESSION['admin_credentials'][$username] === $password) {
            return true;
        }
        return false;
    }
}
