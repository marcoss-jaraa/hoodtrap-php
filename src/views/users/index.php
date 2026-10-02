<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
</head>
<body>

<h1>Usuarios</h1>

<?php foreach ($users as $user): ?>

    <div>
        <h2><?= htmlspecialchars($user['name']) ?></h2>

        <p>
            Email:
            <?= htmlspecialchars($user['email']) ?>
        </p>

        <p>
            Fecha de registro:
            <?= htmlspecialchars($user['created_at']) ?>
        </p>

        <a href="/src/controllers/users/show.php?id=<?= $user['id'] ?>">
            Ver usuario
        </a>
    </div>

    <hr>

<?php endforeach; ?>

</body>
</html>