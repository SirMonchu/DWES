<?php
include __DIR__ . '/../config.php';
include BASE_PATH . '/models/db.php';
include BASE_PATH . '/views/layouts/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    // Insertar el nuevo proveedor en la base de datos
    $sql = "INSERT INTO proveedores (nombre, direccion, telefono, email) VALUES (:nombre, :direccion, :telefono, :email)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':direccion', $direccion);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "Proveedor añadido correctamente.";
    } else {
        echo "Error al añadir el proveedor.";
    }
}
?>

<h2>Añadir Nuevo Proveedor</h2>
<form action="create.php" method="POST">
    <label for="nombre">Nombre del proveedor:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="direccion">Dirección:</label><br>
    <input type="text" id="direccion" name="direccion"><br><br>

    <label for="telefono">Teléfono:</label><br>
    <input type="text" id="telefono" name="telefono"><br><br>

    <label for="email">Correo electrónico:</label><br>
    <input type="email" id="email" name="email"><br><br>

    <input type="submit" value="Añadir Proveedor">
</form>

<?php include BASE_PATH . '/views/layouts/footer.php'; ?>
