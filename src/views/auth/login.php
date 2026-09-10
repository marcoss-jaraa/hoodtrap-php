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
    Bienvenido a PDISC
  </h1>

  <p class="auth-subtitle mb-0">
    Ingresá con tu cuenta para continuar
  </p>

</div>


<form
  action="/src/controllers/auth/login.php"
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


  <div class="mb-4">

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
      placeholder="Ingresá tu contraseña"
      required
    >

  </div>


  <button
    type="submit"
    class="btn btn-primary auth-button w-100"
  >
    Ingresar
  </button>

</form>


<div class="text-center mt-4">

  <p class="text-muted small mb-0">

    ¿No tenés una cuenta?

    <a
      href="/src/views/auth/register.php"
      class="auth-link"
    >
      Registrate ahora
    </a>

  </p>

</div>


      </div>
    </div>
  </div>

</body>
</html>