<?php include 'views/layouts/header.php'; ?>

<h2>Editar Producto</h2>

<form method="POST" action="index.php?controller=product&action=edit&id=<?php echo $product['id']; ?>">
    <div>
        <label>Nombre:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
    </div>
    <div>
        <label>Descripción:</label>
        <textarea name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea>
    </div>
    <div>
        <label>Precio:</label>
        <input type="number" step="0.01" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required>
    </div>
    <div>
        <label>Categoría:</label>
        <select name="category" required>
            <option value="Refrigeradores" <?php echo $product['category'] == 'Refrigeradores' ? 'selected' : ''; ?>>Refrigeradores</option>
            <option value="Lavadoras" <?php echo $product['category'] == 'Lavadoras' ? 'selected' : ''; ?>>Lavadoras</option>
            <option value="Microondas" <?php echo $product['category'] == 'Microondas' ? 'selected' : ''; ?>>Microondas</option>
            <option value="Aspiradoras" <?php echo $product['category'] == 'Aspiradoras' ? 'selected' : ''; ?>>Aspiradoras</option>
        </select>
    </div>
    <button type="submit">Actualizar</button>
</form>

<a href="index.php?controller=product&action=index">Volver al listado</a>

<?php include 'views/layouts/footer.php'; ?>