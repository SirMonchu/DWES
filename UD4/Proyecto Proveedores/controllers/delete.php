<?php
include __DIR__ . '/../config.php';
include BASE_PATH . '/models/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el proveedor
    $sql = "DELETE FROM proveedores WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: /Proyecto Proveedores/views/index.php");
        exit();
    } else {
        echo "Error al eliminar el proveedor.";
    }
} else {
    echo "ID de proveedor no especificado.";
}
?>
