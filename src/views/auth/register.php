<?php
include('../_layouts/auth.layout.php');
?>

<div class="text-center mb-4">

  <img
    src="/assets/img/php-logo.png"
    alt="Logo PDISC"
    class="auth-logo"
  >

  <h1 class="h4 auth-title mb-1">
    Crear una cuenta
  </h1>

  <p class="auth-subtitle mb-0">
    Completá tus datos para registrarte
  </p>

</div>


<form
  action="/src/controllers/auth/register.php"
  method="POST"
  class="auth-form"
>

  <div class="mb-3">

    <label
      for="email"
      class="form-label fw-semibold"
    >
      E-mail
    </label>

    <input
      type="email"
      class="form-control"
      id="email"
      name="email"
      placeholder="ejemplo@email.com"
      required
      autofocus
    >

  </div>


  <div class="mb-3">

    <label
      for="name"
      class="form-label fw-semibold"
    >
      Usuario
    </label>

    <input
      type="text"
      class="form-control"
      id="name"
      name="name"
      placeholder="Ingresá tu usuario"
      required
    >

  </div>


  <div class="mb-3">

    <label
      for="password"
      class="form-label fw-semibold"
    >
      Contraseña
    </label>

    <input
      type="password"
      class="form-control"
      id="password"
      name="password"
      placeholder="Ingresá una contraseña"
      required
    >

  </div>


  <div class="mb-4">

    <label
      for="repeatPassword"
      class="form-label fw-semibold"
    >
      Repetí tu contraseña
    </label>

    <input
      type="password"
      class="form-control"
      id="repeatPassword"
      name="repeatPassword"
      placeholder="Repetí tu contraseña"
      required
    >

  </div>


  <button
    type="submit"
    class="btn btn-primary auth-button w-100"
  >
    Crear cuenta
  </button>

</form>


<div class="text-center mt-4">

  <p class="text-muted small mb-0">

    ¿Ya tenés una cuenta?

    <a
      href="/src/views/auth/login.php"
      class="auth-link"
    >
      Iniciá sesión
    </a>

  </p>

</div>


      </div>
    </div>
  </div>

</body>
</html>