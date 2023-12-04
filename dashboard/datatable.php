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

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

  <!-- ====================================
    ——— WRAPPER
    ===================================== -->
  <div class="wrapper">
    <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
    <?php include('../dashboard/modulos/sidebar.php'); ?>

    <div class="page-wrapper">
      <?php include('../dashboard/modulos/header.php'); ?>
      <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
      <div class="content-wrapper">
        <!-- ====================================
          ——— CONTENT
          ===================================== -->
        <div class="content">
          <div class="row">
            <div class="col-12">
              <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                  <h2>Responsive Data Table</h2>
                </div>

                <div class="card-body">
                  <div class="responsive-data-table">
                    <table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
                      <thead>
                        <tr>
                          <th>First name</th>
                          <th>Last name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th>Extn.</th>
                          <th>E-mail</th>
                        </tr>
                      </thead>

                      <tbody>

                        <tr>
                          <td>Jennifer</td>
                          <td>Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                          <td>3431</td>
                          <td>j.acosta@datatables.net</td>
                        </tr>

                        <tr>
                          <td>Cara</td>
                          <td>Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                          <td>3990</td>
                          <td>c.stevens@datatables.net</td>
                        </tr>

                        <tr>
                          <td>Hermione</td>
                          <td>Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                          <td>1016</td>
                          <td>h.butler@datatables.net</td>
                        </tr>

                        <tr>
                          <td>Lael</td>
                          <td>Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                          <td>6733</td>
                          <td>l.greer@datatables.net</td>
                        </tr>

                        <tr>
                          <td>Jonas</td>
                          <td>Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                          <td>8196</td>
                          <td>j.alexander@datatables.net</td>
                        </tr>

                        <tr>
                          <td>Shad</td>
                          <td>Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                          <td>6373</td>
                          <td>s.decker@datatables.net</td>
                        </tr>

                        <tr>
                          <td>Michael</td>
                          <td>Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                          <td>5384</td>
                          <td>m.bruce@datatables.net</td>
                        </tr>

                        <tr>
                          <td>Donna</td>
                          <td>Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                          <td>4226</td>
                          <td>d.snider@datatables.net</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Content -->
      </div> <!-- End Content Wrapper -->

    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


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