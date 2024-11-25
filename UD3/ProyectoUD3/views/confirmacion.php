<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de Alquiler</title>
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
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.1em;
            color: #555;
            margin: 10px 0;
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
            margin-top: 20px;
            box-shadow: 4px 4px 8px #bebebe, -4px -4px 8px #ffffff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Confirmación de Alquiler</h2>
        <p>Has alquilado el coche <b><?= $coche['marca'] ?> <?= $coche['modelo'] ?></b> por <b><?= $dias ?></b> días.</p>
        <p><b>Precio total:</b> <?= $precio_total ?>€</p>
        <p>¡Gracias por tu alquiler!</p>
        <a href="index.php" class="button">Volver al inicio</a>
    </div>
</body>
</html>
