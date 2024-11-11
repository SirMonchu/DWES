<?php
$id = $_GET['id'] ?? null;

if (!$id) {
    echo "ID de coche no proporcionado.";
    exit;
}

$coches = [
    1 => ["marca" => "Toyota", "modelo" => "Corolla", "precio_por_dia" => 30, "imagen" => "https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2023/12/toyota-corolla-2024-3254131.jpg?tf=3840x"],
    2 => ["marca" => "Honda", "modelo" => "Civic", "precio_por_dia" => 35, "imagen" => "https://www.autonocion.com/wp-content/uploads/2024/05/Honda-Civic-Type-R-MUGEN-0-1130x706.jpg"],
    3 => ["marca" => "Ford", "modelo" => "Focus", "precio_por_dia" => 32, "imagen" => "https://www.gpas-cache.ford.com/guid/3c3e2039-651c-396c-9d4a-9341fa79386b.png"]
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0e0e0;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #e0e0e0;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 8px 8px 16px #bebebe, -8px -8px 16px #ffffff;
            max-width: 400px;
            text-align: center;
        }
        .car-image-large {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 6px 6px 12px #bebebe, -6px -6px 12px #ffffff;
            margin-bottom: 20px;
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            font-size: 1em;
            color: #555;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
            margin-right: 10px;
            color: #555;
        }
        input[type="number"] {
            font-size: 1em;
            padding: 10px;
            border: none;
            border-radius: 10px;
            width: 100%;
            box-shadow: inset 4px 4px 8px #bebebe, inset -4px -4px 8px #ffffff;
            margin-top: 10px;
        }
        .button {
            display: inline-block;
            background-color: #1a73e8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 15px;
            box-shadow: 4px 4px 8px #bebebe, -4px -4px 8px #ffffff;
            text-decoration: none;
        }
        .back-link {
            display: inline-block;
            margin-top: 15px;
            color: #333;
            text-decoration: none;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="<?= $coche['imagen'] ?>" alt="<?= $coche['marca'] . ' ' . $coche['modelo'] ?>" class="car-image-large">
        <h2><?= $coche['marca'] ?> <?= $coche['modelo'] ?></h2>
        <p><b>Precio por día:</b> <?= $coche['precio_por_dia'] ?>€</p>

        <form action="confirmacion.php" method="POST">
            <label for="dias">Días de alquiler:</label>
            <input type="number" id="dias" name="dias" min="1" required>
            <input type="hidden" name="id" value="<?= $id ?>">
            <button type="submit" class="button">Calcular</button>
        </form>
        <a href="index.php" class="back-link">Volver</a>
    </div>
</body>
</html>