<?php
require_once __DIR__ . '/../../config/bootstrap.php';

if (isset($_SESSION['user'])) {
  header('Location: /src/views/index.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >

  <link
    rel="stylesheet"
    href="<?= '/assets/css/bootstrap.min.css' ?>"
  >

  <script
    src="<?= '/assets/js/bootstrap.min.js' ?>"
  ></script>

  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #17172a, #4f46e5);
    }

    .auth-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .auth-card {
      width: 100%;
      max-width: 430px;
      border: none;
      border-radius: 22px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
    }

    .auth-card-body {
      padding: 35px;
    }

    .auth-logo {
      width: 75px;
      height: 75px;
      object-fit: contain;
      padding: 10px;
      background-color: white;
      border-radius: 18px;
      margin-bottom: 15px;
    }

    .auth-title {
      font-weight: 700;
      color: #212529;
    }

    .auth-subtitle {
      color: #6c757d;
    }

    .auth-form .form-control {
      border-radius: 12px;
      padding: 12px;
    }

    .auth-form .form-control:focus {
      border-color: #4f46e5;
      box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.15);
    }

    .auth-button {
      border: none;
      border-radius: 12px;
      padding: 12px;
      font-weight: 600;
      background-color: #4f46e5;
    }

    .auth-button:hover {
      background-color: #3730a3;
    }

    .auth-link {
      color: #4f46e5;
      font-weight: 600;
      text-decoration: none;
    }

    .auth-link:hover {
      text-decoration: underline;
    }
  </style>

  <title>PDISC - Autenticación</title>

</head>


<body>

  <div class="auth-container">

    <div class="card auth-card">

      <div class="auth-card-body">