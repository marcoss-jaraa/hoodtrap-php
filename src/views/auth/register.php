
<?php
require_once __DIR__ . '/../../config/bootstrap.php';

// Paso clave #1: Validar tipo de solicitud ----------------------
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  // Si la solicitud no es POST, volvemos al register
  header('Location: /src/views/auth/register.php');
  exit;
}

// Paso clave #2: Tomar datos -----------------------------------
$data = [
  'email'          => trim($_POST['email'] ?? ''),
  'name'           => trim($_POST['name'] ?? ''),
  'password'       => $_POST['password'] ?? '',
  'repeatPassword' => $_POST['repeatPassword'] ?? ''
];

// Validaciones básicas
if ($data['name'] === '') {
  exit('El nombre es obligatorio.');
}

if (strlen($data['name']) > 50) {
  exit('El nombre no puede superar los 50 caracteres.');
}

if ($data['email'] === '') {
  exit('El email es obligatorio.');
}

if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
  exit('El email no es válido.');
}

if (strlen($data['email']) > 150) {
  exit('El email no puede superar los 150 caracteres.');
}

if ($data['password'] === '') {
  exit('La contraseña es obligatoria.');
}

if ($data['repeatPassword'] === '') {
  exit('Debes repetir la contraseña.');
}

if ($data['password'] !== $data['repeatPassword']) {
  exit('Las contraseñas no coinciden.');
}

// Paso clave #3: Hacer cosas ----------------------------------
try {
  // Validamos que el usuario no exista
  $stmt = $pdo->prepare(
    'SELECT id FROM users WHERE email = :email LIMIT 1'
  );

  $stmt->execute([
    'email' => $data['email']
  ]);

  if ($stmt->fetch()) {
    exit('Ya existe un usuario registrado con ese email.');
  }

  // Hasheamos la contraseña, nunca se guarda en texto plano
  $hashedPassword = password_hash(
    $data['password'],
    PASSWORD_DEFAULT
  );

  // Insertamos en DB
  $stmt = $pdo->prepare(
    'INSERT INTO users (name, email, password)
     VALUES (:name, :email, :password)'
  );

  $stmt->execute([
    'name'     => $data['name'],
    'email'    => $data['email'],
    'password' => $hashedPassword,
  ]);

  // Cargamos $_SESSION['user'], para poder pasar al index
  $_SESSION['user'] = [
    'id'    => $pdo->lastInsertId(),
    'name'  => $data['name'],
    'email' => $data['email'],
  ];

  // Pateado para el index
  header('Location: /src/views/index.php');
  exit;

} catch (PDOException $e) {
  exit;
}
```
