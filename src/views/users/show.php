<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del usuario</title>
</head>
<body>

<h1>Detalle del usuario</h1>

<?php if ($user): ?>

    <h2><?= htmlspecialchars($user['name']) ?></h2>

    <p>
        Email:
        <?= htmlspecialchars($user['email']) ?>
    </p>

    <p>
        Fecha de registro:
        <?= htmlspecialchars($user['created_at']) ?>
    </p>

    <a href="/src/controllers/users/index.php">
        Volver a usuarios
    </a>

<?php else: ?>

    <p>Usuario no encontrado.</p>

    <a href="/src/controllers/users/index.php">
        Volver a usuarios
    </a>

<?php endif; ?>

</body>
</html>