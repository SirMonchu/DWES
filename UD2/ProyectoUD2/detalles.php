<?php

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "ID de coche no proporcionado.";
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

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles de Alquiler</title>
</head>
<body>
    <h2>Detalles del Coche</h2>
    <p><b>Marca:</b> <?= $coche['marca'] ?></p>
    <p><b>Modelo:</b> <?= $coche['modelo'] ?></p>
    <p><b>Precio por día:</b> $<?= $coche['precio_por_dia'] ?></p>

    <h3>Calcular el Precio de Alquiler</h3>
    <form action="confirmacion.php" method="POST">
        <label for="dias">Días de alquiler:</label>
        <input type="number" id="dias" name="dias" min="1" required>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
