<?php
class Concesionario {
    private $coches;

    public function __construct() {
        $this->coches = [
            1 => ["marca" => "Toyota", "modelo" => "Corolla", "precio_por_dia" => 30, "imagen" => "https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2023/12/toyota-corolla-2024-3254131.jpg?tf=3840x"],
            2 => ["marca" => "Honda", "modelo" => "Civic", "precio_por_dia" => 35, "imagen" => "https://www.autonocion.com/wp-content/uploads/2024/05/Honda-Civic-Type-R-MUGEN-0-1130x706.jpg"],
            3 => ["marca" => "Ford", "modelo" => "Focus", "precio_por_dia" => 32, "imagen" => "https://www.gpas-cache.ford.com/guid/3c3e2039-651c-396c-9d4a-9341fa79386b.png"]
        ];
    }

    // Obtiene todos los coches
    public function obtenerTodos() {
        return $this->coches;
    }

    // Obtiene un coche por su ID
    public function obtenerPorId($id) {
        return $this->coches[$id] ?? null;
    }

    // Calcula el precio total del alquiler
    public function calcularPrecio($id, $dias) {
        $coche = $this->obtenerPorId($id);
        if (!$coche || $dias <= 0) {
            return null;
        }
        return $coche['precio_por_dia'] * $dias;
    }
}
