<?php
include __DIR__ . '/../config.php';
include BASE_PATH . '/models/db.php';
include BASE_PATH . '/views/layouts/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los detalles del proveedor
    $sql = "SELECT * FROM proveedores WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $proveedor = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$proveedor) {
        echo "Proveedor no encontrado.";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    // Actualizar el proveedor
    $sql = "UPDATE proveedores SET nombre = :nombre, direccion = :direccion, telefono = :telefono, email = :email WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':direccion', $direccion);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Proveedor actualizado correctamente.";
    } else {
        echo "Error al actualizar el proveedor.";
    }
}
?>

<h2>Editar Proveedor</h2>
<form action="update.php?id=<?php echo $id; ?>" method="POST">
    <label for="nombre">Nombre del proveedor:</label><br>
    <input type="text" id="nombre" name="nombre" value="<?php echo $proveedor['nombre']; ?>" required><br><br>

    <label for="direccion">Dirección:</label><br>
    <input type="text" id="direccion" name="direccion" value="<?php echo $proveedor['direccion']; ?>"><br><br>

    <label for="telefono">Teléfono:</label><br>
    <input type="text" id="telefono" name="telefono" value="<?php echo $proveedor['telefono']; ?>"><br><br>

    <label for="email">Correo electrónico:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $proveedor['email']; ?>"><br><br>

    <input type="submit" value="Actualizar Proveedor">
</form>

<?php include BASE_PATH . '/views/layouts/footer.php'; ?>
