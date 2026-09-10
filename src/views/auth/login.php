<?php
require_once __DIR__ . '/../../config/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: /src/views/auth/login.php');
  exit;
}

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
  header('Location: /src/views/auth/login.php');
  exit;
}

try {
  $stmt = $pdo->prepare('SELECT id, name, email, password FROM users WHERE email = :email LIMIT 1');
  $stmt->execute([
    'email' => $email
  ]);

  $user = $stmt->fetch();

  if (!$user || !password_verify($password, $user['password'])) {
    header('Location: /src/views/auth/login.php');
    exit;
  }

  $_SESSION['user'] = [
    'id' => $user['id'],
    'name' => $user['name'],
    'email' => $user['email']
  ];

  header('Location: /src/views/index.php');
  exit;
} catch (PDOException $e) {
  header('Location: /src/views/auth/login.php');
  exit;
}