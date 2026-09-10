<?php
require_once __DIR__ . '/../../config/bootstrap.php';

// Si no estoy logueado, me saca
if (!isset($_SESSION['user'])) {
  header('Location: /src/views/auth/login.php');
  exit;
}

function logout() {
  session_destroy();

  header('Location: /src/views/auth/login.php');
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
      background-color: #f5f7fb;
    }

    .main-navbar {
      background: linear-gradient(135deg, #17172a, #4f46e5);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .main-navbar .navbar-brand {
      color: white;
      font-weight: 700;
    }

    .main-navbar .navbar-brand:hover {
      color: white;
    }

    .navbar-logo {
      width: 42px;
      height: 42px;
      object-fit: contain;
      padding: 5px;
      background-color: white;
      border-radius: 10px;
    }

    .logout-button {
      border-radius: 10px;
      font-weight: 600;
      padding: 8px 15px;
    }

    .main-content {
      min-height: calc(100vh - 70px);
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .welcome-card {
      border: none;
      border-radius: 22px;
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.08);
    }

    .info-card {
      border: 1px solid #e9ecef;
      border-radius: 18px;
      height: 100%;
    }

  </style>

  <title>PDISC</title>

</head>


<body>

  <nav class="navbar main-navbar">

    <div class="container">

      <a
        class="navbar-brand d-flex align-items-center gap-2"
        href="/src/views/index.php"
      >

        <img
          src="/assets/img/php-logo.png"
          alt="Logo PDISC"
          class="navbar-logo"
        >

        <span>
          PDISC
        </span>

      </a>


      <a
        href="/src/controllers/auth/logout.php"
        class="btn btn-light logout-button"
      >
        Cerrar sesión
      </a>

    </div>

  </nav>


  <main class="container main-content">