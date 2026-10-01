<?php

require_once __DIR__ . '/../../config/database.php';

$query = '
    SELECT
        id,
        name,
        email,
        created_at
    FROM users
    ORDER BY created_at DESC
';

$stmt = $pdo->prepare($query);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once __DIR__ . '/../../views/users/index.php';