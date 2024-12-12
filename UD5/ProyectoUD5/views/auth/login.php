<?php include 'views/layouts/header.php'; ?>

<h2>Iniciar sesión</h2>

<?php if (isset($error)): ?>
    <div style="color: red;"><?php echo $error; ?></div>
<?php endif; ?>

<form method="POST" action="index.php?controller=auth&action=login">
    <div>
        <label>Usuario:</label>
        <input type="text" name="username" required>
    </div>
    <div>
        <label>Contraseña:</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit">Iniciar sesión</button>
</form>

<?php include 'views/layouts/footer.php'; ?>