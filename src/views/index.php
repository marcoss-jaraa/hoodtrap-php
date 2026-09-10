<?php
include('./_layouts/layout.php');

$userName = htmlspecialchars($_SESSION['user']['name'] ?? 'Usuario');
?>

<section class="py-3">

  <div class="card welcome-card">

    <div class="card-body p-4 p-md-5 text-center">

      <div
        class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-4"
        style="width: 70px; height: 70px; font-size: 30px; font-weight: bold;"
      >
        P
      </div>


      <span class="badge text-bg-primary rounded-pill px-3 py-2 mb-3">
        Panel principal
      </span>


      <h1 class="display-6 fw-bold mb-3">
        ¡Hola, <?= $userName ?>!
      </h1>


      <p class="lead text-muted mb-4">
        Bienvenido a PDISC.
        Tu sesión se inició correctamente
        y ya podés utilizar la aplicación.
      </p>


      <div class="row g-3 mt-2">

        <div class="col-md-6">

          <div class="card info-card">

            <div class="card-body p-4">

              <h2 class="h5 fw-bold mb-3">
                Tu cuenta
              </h2>

              <p class="text-muted mb-0">
                Tu usuario está conectado correctamente
                y tu sesión se encuentra activa.
              </p>

            </div>

          </div>

        </div>


        <div class="col-md-6">

          <div class="card info-card">

            <div class="card-body p-4">

              <h2 class="h5 fw-bold mb-3">
                Proyecto PDISC
              </h2>

              <p class="text-muted mb-0">
                Esta es la página principal
                de nuestra aplicación.
              </p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>


  </main>

</body>
</html>