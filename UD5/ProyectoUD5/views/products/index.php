<?php include 'views/layouts/header.php'; ?>

<h2>Listado de Electrodomésticos</h2>

<a href="index.php?controller=product&action=create">Nuevo Producto</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo htmlspecialchars($product['id']); ?></td>
                <td><?php echo htmlspecialchars($product['name']); ?></td>
                <td><?php echo htmlspecialchars($product['description']); ?></td>
                <td><?php echo htmlspecialchars($product['price']); ?></td>
                <td><?php echo htmlspecialchars($product['category']); ?></td>
                <td>
                    <a href="index.php?controller=product&action=edit&id=<?php echo $product['id']; ?>">Editar</a>
                    <a href="index.php?controller=product&action=delete&id=<?php echo $product['id']; ?>" onclick="return confirm('¿Está seguro?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div>
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="index.php?controller=product&action=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php endfor; ?>
</div>

<?php include 'views/layouts/footer.php'; ?>