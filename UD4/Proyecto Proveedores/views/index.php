<?php
include __DIR__ . '/../config.php'; // Incluye config.php desde el directorio raíz
include BASE_PATH . '/models/db.php'; // Incluye el archivo db.php
include BASE_PATH . '/views/layouts/header.php'; // Incluye el header

// Consulta para obtener todos los proveedores
$sql = "SELECT * FROM proveedores";
$stmt = $conn->prepare($sql);
$stmt->execute();
$proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Lista de Proveedores</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($proveedores as $proveedor): ?>
        <tr>
            <td><?php echo $proveedor['id']; ?></td>
            <td><?php echo $proveedor['nombre']; ?></td>
            <td><?php echo $proveedor['direccion']; ?></td>
            <td><?php echo $proveedor['telefono']; ?></td>
            <td><?php echo $proveedor['email']; ?></td>
            <td>
                <a href="<?php echo BASE_PATH; ?>/controllers/update.php?id=<?php echo $proveedor['id']; ?>">Editar</a>
                <a href="<?php echo BASE_PATH; ?>/controllers/delete.php?id=<?php echo $proveedor['id']; ?>" onclick="return confirm('¿Estás seguro de eliminar este proveedor?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include BASE_PATH . '/views/layouts/footer.php'; ?>
