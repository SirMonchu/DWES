<?php include 'views/layouts/header.php'; ?>

<h2>Crear Nuevo Producto</h2>

<form method="POST" action="index.php?controller=product&action=create">
    <div>
        <label>Nombre:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Descripción:</label>
        <textarea name="description" required></textarea>
    </div>
    <div>
        <label>Precio:</label>
        <input type="number" step="0.01" name="price" required>
    </div>
    <div>
        <label>Categoría:</label>
        <select name="category" required>
            <option value="Refrigeradores">Refrigeradores</option>
            <option value="Lavadoras">Lavadoras</option>
            <option value="Microondas">Microondas</option>
            <option value="Aspiradoras">Aspiradoras</option>
        </select>
    </div>
    <button type="submit">Guardar</button>
</form>

<a href="index.php?controller=product&action=index">Volver al listado</a>

<?php include 'views/layouts/footer.php'; ?>