<?php

$dias = $_POST['dias'] ?? 0;
$id = $_POST['id'] ?? null;

if (!$id || !$dias) {
    echo "Datos incompletos.";
    exit;
}

$coches = [
    1 => ["marca" => "Toyota", "modelo" => "Corolla", "precio_por_dia" => 30],
    2 => ["marca" => "Honda", "modelo" => "Civic", "precio_por_dia" => 35],
    3 => ["marca" => "Ford", "modelo" => "Focus", "precio_por_dia" => 32]
];

$coche = $coches[$id] ?? null;

if (!$coche) {
    echo "Coche no encontrado.";
    exit;
}

// Calcular el precio total
$precio_total = $coche['precio_por_dia'] * $dias;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de Alquiler</title>
</head>
<body>
    <h2>Confirmación de Alquiler</h2>
    <p>Has alquilado el coche <b><?= $coche['marca'] ?> <?= $coche['modelo'] ?></b> por <b><?= $dias ?></b> días.</p>
    <p><b>Precio total:</b> $<?= $precio_total ?></p>
    <p>¡Gracias por tu alquiler!</p>
</body>
</html>
