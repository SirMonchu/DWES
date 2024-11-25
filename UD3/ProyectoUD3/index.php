<?php
require_once 'controllers/ControladorCoches.php';

$controlador = new ControladorCoches();
$accion = $_GET['accion'] ?? 'inicio';

switch ($accion) {
    case 'inicio':
        $controlador->mostrarCoches();
        break;
    case 'detalles':
        $id = $_GET['id'] ?? null;
        $controlador->mostrarDetalles($id);
        break;
    case 'confirmar':
        $id = $_POST['id'] ?? null;
        $dias = $_POST['dias'] ?? 0;
        $controlador->confirmarAlquiler($id, $dias);
        break;
    default:
        echo "Acción no reconocida.";
        break;
}
