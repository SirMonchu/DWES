<?php
require_once 'models/Concesionario.php';

class ControladorCoches {
    private $modelo;

    public function __construct() {
        $this->modelo = new Concesionario();
    }

    public function mostrarCoches() {
        $coches = $this->modelo->obtenerTodos();
        include 'views/index.php';
    }

    public function mostrarDetalles($id) {
        $coche = $this->modelo->obtenerPorId($id);
        if (!$coche) {
            echo "Coche no encontrado.";
            exit;
        }
        include 'views/detalles.php';
    }

    public function confirmarAlquiler($id, $dias) {
        $coche = $this->modelo->obtenerPorId($id);
        $precio_total = $this->modelo->calcularPrecio($id, $dias);

        if (!$coche || !$precio_total) {
            echo "Datos inválidos.";
            exit;
        }

        include 'views/confirmacion.php';
    }
}
