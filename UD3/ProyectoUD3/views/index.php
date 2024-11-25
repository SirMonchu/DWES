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
            <?php foreach ($coches as $id => $coche): ?>
                <li class="car-item">
                    <img src="<?= $coche['imagen'] ?>" alt="<?= $coche['marca'] . ' ' . $coche['modelo'] ?>" class="car-image">
                    <div class="car-info">
                        <h3><?= $coche['marca'] ?> <?= $coche['modelo'] ?></h3>
                        <p><b>Precio por día:</b> <?= $coche['precio_por_dia'] ?>€</p>
                    </div>
                    <a href="index.php?accion=detalles&id=<?= $id ?>" class="car-link">Ver detalles</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
