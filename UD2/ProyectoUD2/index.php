<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alquiler de Coches</title>
</head>
<body>
    <h1>Alquiler de Coches</h1>
    <ul>
        <?php
        $coches = [
            ["id" => 1, "marca" => "Toyota", "modelo" => "Corolla", "precio_por_dia" => 30],
            ["id" => 2, "marca" => "Honda", "modelo" => "Civic", "precio_por_dia" => 35],
            ["id" => 3, "marca" => "Ford", "modelo" => "Focus", "precio_por_dia" => 32]
        ];

        foreach ($coches as $coche) {
            echo "<li><b>{$coche['marca']} {$coche['modelo']}</b> - \${$coche['precio_por_dia']} por día ";
            echo "<a href='detalles.php?id={$coche['id']}'>Ver detalles</a></li>";
        }
        ?>
    </ul>
</body>
</html>
