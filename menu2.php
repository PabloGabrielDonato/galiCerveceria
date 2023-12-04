<?PHP
require 'dbconnection.php';

$sql = "SELECT *  FROM productos";
$result = mysqli_query($conexion, $sql);

$sql = "SELECT seccion  FROM productos WHERE seccion='ofertas'";
if ($resultOfertas = mysqli_query($conexion, $sql)) {
  $ofertas = mysqli_num_rows($resultOfertas);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Gali cerveceria </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- Varmenu style -->
  <link href="css/varmenu.css" rel="stylesheet" />
  <!-- BOX ICON -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<!-- Estilos propios de esta pagina -->
<style>
  <?php
  if ($ofertas == 0) {
  ?>.offer_section {
    display: none;
  }

  <?php } ?>
  /*  */

  .detail-box h5 {
    color: #ffbe33;
  }

  .food_section .box .detail-box {
    height: 200px;
  }

  .ofertas {
    justify-content: center;
  }
</style>

<body>
  <!-- Menu Bar -->
  <?php include('modulos/barmenu.php');
  ?>
  <!-- end Menu Bar -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom food_menu">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Nuesto menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".burger">Burger</li>
        <li data-filter=".pizza">Pizza</li>
        <li data-filter=".pasta">Pasta</li>
        <li data-filter=".fries">Fries</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">

          <?php
          if (mysqli_num_rows($result) > 0) {
            foreach ($result as $productos) {
          ?>
              <div class="col-sm-6 col-lg-4 all <?php echo $productos['categoria'] ?>">
                <div class="box">
                  <div>
                    <div class="img-box">
                      <div style=" border-radius: 50%; border: 5px solid var(--yellow); z-index: 1 !important; overflow: hidden; box-shadow: 5px 5px 15px gray;">
                        <img src="<?php echo $productos['imagen'] ?>" alt="<?php echo $productos['imagen'] ?>">
                      </div>
                    </div>
                    <div class="detail-box">
                      <h5>
                        <?php echo $productos['nombreProducto'] ?>
                      </h5>
                      <p>
                        <?php echo $productos['descripcion'] ?>
                      </p>
                      <div class="options">
                        <h6>
                          $20
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            };
          }
          ?>

        </div>
      </div>
      <div class="btn-box">
        <a href="index.php">
          Ir al inicio
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/barmenu.js"></script>
  <script src="js/custom.js"></script>

  <!-- Google Map -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script> -->
  <!-- End Google Map -->

  <script>
    // Parallax inicial
    var headerBg = document.getElementById('bg');
    window.addEventListener('scroll', function() {
      headerBg.style.opacity = 1 - +window.pageYOffset / 550 + '';
      headerBg.style.top = +window.pageYOffset + 'px';
      headerBg.style.backgroundPositionY = - +window.pageYOffset / 2 + 'px';
    });
  </script>

</body>

</html>