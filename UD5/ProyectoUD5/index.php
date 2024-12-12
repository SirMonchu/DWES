<?php
require_once 'config/config.php';
require_once 'config/database.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/ProductController.php';

// Determinar el controlador y la acción
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'auth';
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

// Crear la instancia del controlador correspondiente
switch ($controller) {
    case 'auth':
        $controller = new AuthController();
        break;
    case 'product':
        $controller = new ProductController();
        break;
    default:
        die('Controlador no válido');
}

// Verificar si el método existe y ejecutarlo
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    die('Acción no válida');
}