<?PHP
session_start();
require '../dbconnection.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!-- Sweet Alert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="assets/plugins/nprogress/nprogress.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">

  <title>Sign In - Sleek Admin Dashboard Template</title>
</head>

<body class="" id="body">
  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-10">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="app-brand">
              <!-- <a href="/index.html"> -->
              <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                <g fill="none" fill-rule="evenodd">
                  <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                  <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                </g>
              </svg>
              <span class="brand-name">GALI Dashboard</span>
              <!-- </a> -->
            </div>
          </div>

          <div class="card-body p-5">
            <h4 class="text-dark mb-5">Login</h4>

            <!-- <form id="formLogin" action="../api/login.php" method="POST"> -->
            <form id="formLogin">
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  <input name="dni" type="number" class="form-control input-lg" id="dni" aria-describedby="textHelp" placeholder="DNI" required>
                </div>

                <div class="form-group col-md-12 ">
                  <input name="password" type="password" class="form-control input-lg" id="password" placeholder="Password" required>
                </div>

                <div class="col-md-12">
                  <div class="d-flex my-2 justify-content-between">
                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Ingresar</button>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Javascript -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sleek.js"></script>
  <script src="assets/options/optionswitcher.js"></script>

  <script>
    // === LOGIN DE USUARIO ===
    var formulario = document.getElementById("formLogin");
    document
      .getElementById("formLogin")
      .addEventListener("submit", function(e) {
        e.preventDefault();
        var datos = new FormData(formulario);
        // envia los datos a verificar contra la tabla USUARIOS
        fetch('../api/login.php', {
            method: "POST",
            body: datos,
            headers: {
              Accept: "application/json",
            },
          })
          .then((respuesta) => respuesta.json())
          .then((datos) => {
            if (datos == 0) {
              location.href = 'dashboard.php';
            } else if (datos == 1) {
              Swal.fire({
                icon: "error",
                title: "Ups..!",
                text: "Nombre de usuario incorrecto",
              }).then((result) => {
                location.href = 'login.php';
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Ups..!",
                text: "Password incorrecta",
              }).then((result) => {
                location.href = 'login.php';
              });
            }
          });
      });
    // === FIN ACTUALIZAR DATOS by ID ===
  </script>
</body>

</html>