<!DOCTYPE html>
<html>
<head>
    <title>Electrodomésticos</title>
</head>
<body>
    <?php if(isset($_SESSION['username'])): ?>
        <div>
            Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>
            <a href="index.php?controller=auth&action=logout">Cerrar sesión</a>
        </div>
    <?php endif; ?>