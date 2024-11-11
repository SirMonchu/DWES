<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alquiler de Coches</title>
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
            padding: 20px;
            border-radius: 15px;
            box-shadow: 8px 8px 16px #bebebe, -8px -8px 16px #ffffff;
            max-width: 600px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .car-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .car-item {
            background-color: #e0e0e0;
            margin: 15px 0;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 8px 8px 16px #bebebe, -8px -8px 16px #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .car-image {
            width: 100px;
            height: 70px;
            border-radius: 10px;
            object-fit: cover;
            margin-right: 20px;
            box-shadow: 4px 4px 8px #bebebe, -4px -4px 8px #ffffff;
        }
        .car-info {
            flex: 1;
            text-align: left;
        }
        .car-info h3 {
            margin: 0;
            font-size: 1.2em;
        }
        .car-info p {
            margin: 5px 0;
            color: #555;
        }
        .car-link {
            margin-left: 15px;
            background-color: #1a73e8;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 4px 4px 8px #bebebe, -4px -4px 8px #ffffff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Alquiler de Coches</h1>
        <ul class="car-list">
            <?php
            $coches = [
                ["id" => 1, "marca" => "Toyota", "modelo" => "Corolla", "precio_por_dia" => 30, "imagen" => "https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2023/12/toyota-corolla-2024-3254131.jpg?tf=3840x"],
                ["id" => 2, "marca" => "Honda", "modelo" => "Civic", "precio_por_dia" => 35, "imagen" => "https://www.autonocion.com/wp-content/uploads/2024/05/Honda-Civic-Type-R-MUGEN-0-1130x706.jpg"],
                ["id" => 3, "marca" => "Ford", "modelo" => "Focus", "precio_por_dia" => 32, "imagen" => "https://www.gpas-cache.ford.com/guid/3c3e2039-651c-396c-9d4a-9341fa79386b.png"]
            ];

            foreach ($coches as $coche) {
                echo "<li class='car-item'>";
                echo "<img src='{$coche['imagen']}' alt='{$coche['marca']} {$coche['modelo']}' class='car-image'>";
                echo "<div class='car-info'>";
                echo "<h3>{$coche['marca']} {$coche['modelo']}</h3>";
                echo "<p><b>Precio por día:</b> {$coche['precio_por_dia']}€</p>";
                echo "</div>";
                echo "<a href='detalles.php?id={$coche['id']}' class='car-link'>Ver detalles</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
