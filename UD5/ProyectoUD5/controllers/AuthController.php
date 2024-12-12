<?php
require_once 'models/User.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->authenticate($username, $password);
            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['is_admin'] = $user['is_admin'];
                
                setcookie('last_login', date('Y-m-d H:i:s'), time() + (86400 * 30), "/");
                
                header('Location: index.php?controller=product&action=index');
                exit();
            } else {
                $error = "Credenciales inválidas";
                include 'views/auth/login.php';
            }
        } else {
            include 'views/auth/login.php';
        }
    }

    public function logout() {
        session_destroy();
        setcookie('last_login', '', time() - 3600, '/');
        header('Location: index.php?controller=auth&action=login');
        exit();
    }

    public function checkAuth() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?controller=auth&action=login');
            exit();
        }
    }
}