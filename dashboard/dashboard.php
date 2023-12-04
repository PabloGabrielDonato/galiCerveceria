<?php include('../dashboard/modulos/session_header.php'); ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Responsive Data Table - Sleek Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

  <!-- No Extra plugin used -->
  <link href='assets/plugins/data-tables/datatables.bootstrap4.min.css' rel='stylesheet'>
  <link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

<style>
  .content-wrapper {
    justify-content: center;
    align-items: center;
  }

  .content-wrapper img {
    width: 150%;
    opacity: .5;
  }
</style>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

  <div class="wrapper">

    <?php include('../dashboard/modulos/sidebar.php'); ?>

    <div class="page-wrapper">

      <?php include('../dashboard/modulos/header.php'); ?>

      <div class="content-wrapper">
        <div>
          <img src="../images/logo_gali.png" alt="">
        </div>
        <div class="content">
        </div>
      </div>

    </div>

  </div>


  <!-- Javascript -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/plugins/simplebar/simplebar.min.js"></script>
  <script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
  <script src='assets/plugins/data-tables/datatables.bootstrap4.min.js'></script>

  <script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

  <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">
  <script src="assets/options/optionswitcher.js"></script>
</body>

</html>