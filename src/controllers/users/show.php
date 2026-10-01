<?php

require_once __DIR__ . '/../../config/database.php';

$query = '
    SELECT
        id,
        name,
        email,
        created_at
    FROM users
    WHERE id = :id
';

$stmt = $pdo->prepare($query);

$stmt->execute([
    'id' => $_GET['id'],
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

require_once __DIR__ . '/../../views/users/show.php';