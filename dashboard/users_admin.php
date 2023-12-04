<?php include('../dashboard/modulos/session_header.php'); ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>GALI-Administracion de Usuarios</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

  <!-- No Extra plugin used -->
  <link href='assets/plugins/data-tables/datatables.bootstrap4.min.css' rel='stylesheet'>
  <link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.6.0/css/searchBuilder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!-- Sweet Alert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

<style>
  td {
    font-size: 1.2rem !important;
  }

  .dataTables_filter {
    padding-left: 20px;
  }
</style>

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

          <button type="button" class="mb-1 btn btn-outline-success" onclick="altaNuevo()"><i class=" mdi mdi-plus mr-1"></i> Nuevo</button>

          <div class="row">
            <div class="col-12">
              <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                  <h2>Administración de Usuarios</h2>
                </div>

                <div class="card-body">
                  <div class="responsive-data-table">
                    <table id="tableUsers" class="table dt-responsive nowrap" style="width:100%">
                      <thead class="text-center">
                        <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>DNI</th>
                          <th>Acceso</th>
                          <th>Id</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>

                      <tbody>
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


  <!-- <form class="modal fade" id="modalUsers" action=" ../api/users.php" method="POST"> -->
  <form class="modal fade" id="modalUsers" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title editar" id="exampleModalLabel">Alta nuevo Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group row">
            <div class="col">
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
            </div>

            <div class="col">
              <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col">
              <input type="number" name="dni" id="dni" class="form-control" placeholder="DNI" required>
            </div>

            <div class="col">
              <select name="acceso" id="acceso" class="form-control">
                <option selected>Acceso...</option>
                <option value="Administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <input type="email" name="email" id="email" class="form-control mx-sm-3" placeholder="Email" required>
          </div>

          <div class="form-group row">
            <input type="password" name="ingresarPassword" id="ingresarPassword" class="form-control mx-sm-3 password" placeholder="Ingresar Password" required>
          </div>

          <div class="form-group row">
            <input type="password" name="confirmarPassword" id="confirmarPassword" class="form-control mx-sm-3 password" placeholder="Confirmar Password" required>
          </div>

        </div>

        <input type="text" name="opcion" id="opcion" value="" style="display: none;">
        <input type="text" name="id" id="id" value="" style="display: none;">

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" id="botonAceptar">Aceptar</button>
        </div>

      </div>
    </div>
  </form>

  <!-- Javascript -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
  <script src='assets/plugins/data-tables/datatables.bootstrap4.min.js'></script>
  <script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>
  <script src="https://cdn.datatables.net/searchbuilder/1.6.0/js/dataTables.searchBuilder.min.js"></script>
  <script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>

  <script src="assets/js/sleek.js"></script>

  <script>
    var opcion = ''; //variable del switch a consultar en: api/users.php

    $(document).ready(function() {
      listar();
    });

    // Accede y vuelca los datos del array en la tabla
    var listar = function() {
      opcion = 0;
      table = $("#tableUsers").DataTable({
        ajax: {
          method: "GET",
          url: "../api/users.php",
          data: {
            opcion: opcion
          },
        },
        columns: [{
            data: "nombre"
          },
          {
            data: "apellido"
          },
          {
            data: "dni"
          },
          {
            data: "acceso"
          },
          {
            data: "id"
          },
          {
            defaultContent: "<button type='button' class='btn btn-sm btn-outline-primary btnInfo'><i class='mdi mdi-information-variant' style='font-size: 0.875rem'></i></button>	<button type='button' class='btn btn-sm btn-outline-success btnEdit'><i class='mdi mdi-pencil' style='font-size: 0.875rem;'></i></button></button>	<button type='button' class='btn btn-sm btn-outline-danger btnDel'><i class='mdi mdi-trash-can-outline' style='font-size: 0.875rem'></i></button>"
          }
        ],
        buttons: ['searchBuilder'],
        // estilos de la taba - traducción al español
        dom: '"Bfrtilp"',
        // buttons: ["excelHtml5", "pdfHtml5", "print"],
        language: {
          zeroRecords: "No se encontraron resultados",
          lengthMenu: "Mostrar _MENU_ registros",
          infoFiltered: "(filtrado de un total de _MAX_ registros)",
          info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
          zeroRecords: "No se encontraron resultados",
          infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
          search: "Buscar:",
          paginate: {
            next: "Siguiente",
            previous: "Anterior",
          },
          searchPanes: {
            clearMessage: "Borrar todo",
            title: "Filtros Activos - %d",
            showMessage: "Mostrar Todo",
            collapseMessage: "Ocultar Todo",
          },
        },
        // oculta columnas
        columnDefs: [{
            targets: [4],
            visible: false,
          },
          // fija la columna acciones en la tabla
          {
            responsivePriority: 1,
            targets: 0
          },
          {
            responsivePriority: 5,
            targets: -1
          },
        ],
        // Agrega estilo a la celda de la fila indicada
        createdRow: function(row, data, index) {
          $("td", row).eq(2).css({
            "text-align": "center",
          });
          $("td", row).eq(3).css({
            "text-align": "center",
          });
          $("td", row).eq(4).css({
            "text-align": "center",
          });
        },
      });
      // ejecuta la funcion segun lo seleccionado del item: info - editar - borrar
      obtener_data_editar("#tableUsers tbody", table);
      obtener_data_info("#tableUsers tbody", table);
      obtener_data_borrar("#tableUsers tbody", table);
    }


    // Obtiene el ID para mostrar datos
    var obtener_data_info = function(tbody, table) {
      $(tbody).on("click", "button.btnInfo", function() {
        var data = table.row($(this).parents("tr")).data();
        id = data['id'];
        consultarUnUsuario(id);
      });
    }

    // Obtiene el ID para editar datos
    var obtener_data_editar = function(tbody, table) {
      $(tbody).on("click", "button.btnEdit", function() {
        var data = table.row($(this).parents("tr")).data();
        id = data['id'];
        consultarUnUsuario(id);
      });
    }

    // Obtiene el ID para Eliminar un dato
    var obtener_data_borrar = function(tbody, table) {
      $(tbody).on("click", "button.btnDel", function() {
        var data = table.row($(this).parents("tr")).data();
        id = data['id'];
        eliminarUsuario(id);
      });
    }

    // === ALTA de USUARIO ===
    function altaNuevo() {
      // cambia en ID del formulario de: modalUsers a => modalAlta 
      var form = document.getElementById("modalUsers");
      form.id = "modalAlta";

      // cambia el titulo del formulario
      const parrafo = document.querySelector(".editar");
      parrafo.textContent = "Alta Usuario"

      // limpia y habilita los imputs del formulario
      $("#modalAlta").trigger("reset");
      $(".form-control").prop('disabled', false);
      $(".form-select").prop('disabled', false);
      $('#botonAceptar').show();
      $(".password").show();
      // muestra el formulario 
      $('#modalAlta').modal('show');

      // variable para guardar los datos del formulario
      var formularioAlta = document.getElementById('modalAlta');
      document.getElementById('modalAlta').addEventListener('submit', function(e) {
        e.preventDefault(); //anula la accion por defecto del submit para ejecutarla via procedimiento
        // asigna a la variable opción del formulario el valor=1
        document.getElementById("opcion").value = 1;
        // Variable "datos" con toda la información del formulario
        var datos = new FormData(formularioAlta);

        // verifica si las passwords son iguales
        var password = $("#ingresarPassword").val();
        var confirmPassword = $("#confirmarPassword").val();

        if (password === confirmPassword) {
          // envia los datos a crear en la base de datos
          fetch(
              '../api/users.php', {
                method: 'POST',
                body: datos,
                headers: {
                  Accept: "application/json",
                },
              },
            )
            .then((respuesta) => respuesta.json())
            .then((datos) => {
              // oculta el formulario
              $('#modalAlta').modal('hide');
              // verifica los resultados obtenidos de la consulta
              if (datos == 1) {
                Swal.fire({
                  icon: 'success',
                  title: 'Ok!',
                  text: 'Usuario Ingresado con exito!',
                }).then((result) => {
                  refresh()
                });
              } else {
                Swal.fire({
                  icon: 'error',
                  title: 'Ups..!',
                  text: datos,
                })
              };
            });
        } else {
          // oculata el formulario
          $('#modalAlta').modal('hide');
          Swal.fire({
            icon: 'error',
            title: 'Ups..!',
            text: 'Las contraseñas no coinciden!',
          })
        };
      });
    }
    // === FIN alta de usuarios ===


    // === CONSULTAR DATOS ===
    function consultarUnUsuario(id) {
      // verifica si el formulario esta con id="modalAlta" y lo cambia al id="modalUsers"
      if (document.getElementById("modalAlta")) {
        var form = document.getElementById("modalAlta");
        form.id = "modalUsers";
      }
      opcion = 2;
      // muestra el formulario 
      $('#modalUsers').modal('show');

      // Mustra formulario modo Info
      $(document).on("click", ".btnInfo", function() {
        $(".form-control").prop('disabled', true);
        $(".form-select").prop('disabled', true);
        $('#botonAceptar').hide();
        $(".password").hide();
        // cambia el titulo del formulario
        const parrafo = document.querySelector(".editar");
        parrafo.textContent = "Información Usuario"
      });

      // Muestra formulario modo Edición
      $(document).on("click", ".btnEdit", function() {
        $(".form-control").prop('disabled', false);
        $(".form-select").prop('disabled', false);
        $(".password").prop('disabled', true);
        $('#botonAceptar').show();
        $(".password").hide();
        // cambia el titulo del formulario
        const parrafo = document.querySelector(".editar");
        parrafo.textContent = "Editar Usuario"
      });

      // consulta a base de datos según ID y opcion
      fetch(
          `../api/users.php?id=${id}&opcion=${opcion}`, {
            method: 'GET',
            headers: {
              Accept: "application/json",
              "Content-Type": "application/json",
            },
          },
        )
        .then((respuesta) => respuesta.json())
        .then((datos) => {
          // Carga el formulario con los datos obtenidos en la consulta
          $("#id").val(datos[0].id);
          $("#nombre").val(datos[0].nombre);
          $("#apellido").val(datos[0].apellido);
          $("#dni").val(datos[0].dni);
          $("#acceso").val(datos[0].acceso);
          $("#email").val(datos[0].email);
        });
    }
    // === FIN consultar datos ===
    // === GRABA LOS CAMBIOS en la BD by ID ===
    // variable para guardar los datos del formulario
    var formularioEdit = document.getElementById("modalUsers");

    document
      .getElementById("modalUsers")
      .addEventListener("submit", function(e) {
        e.preventDefault();
        // asigna a la variable opción del formulario el valor=3
        document.getElementById("opcion").value = 3;
        // Variable "datos" con toda la información del formulario
        var datos = new FormData(formularioEdit);
        // envian los datos a modificar en la base de datos
        fetch('../api/users.php', {
            method: "POST",
            body: datos,
            headers: {
              Accept: "application/json",
            },
          })
          .then((respuesta) => respuesta.json())
          .then((datos) => {
            // oculta el formulario
            $("#modalUsers").modal("hide");
            // verifica los resultados obtenidos de la consulta
            if (datos == 1) {
              Swal.fire({
                icon: "success",
                title: "Ok!",
                text: "Datos actualizados!",
              }).then((result) => {
                refresh();
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Ups..!",
                text: "Las modificaiones NO pudieron registrarse!",
              });
            }
          });
      });
    // === FIN ACTUALIZAR DATOS by ID ===

    // === ELIMINAR USUARIO ===
    function eliminarUsuario(id) {
      // Busca los datos del usuario a eliminar
      opcion = 2;
      fetch(`../api/users.php?id=${id}&opcion=${opcion}`, {
          method: "GET",
          headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
          },
        })
        .then((respuesta) => respuesta.json())
        .then((datos) => {
          nombreUsuario = datos[0].nombre;
          apellidoUsuario = datos[0].apellido;
          // muestra al usuarios a eliminar y pide confirmación
          Swal.fire({
            title: "Esta seguro?",
            text: "Aceptar para borrar: " + nombreUsuario + " " + apellidoUsuario,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar",
          }).then((result) => {
            // Si confirma elimina al usuario
            if (result.isConfirmed) {
              opcion = 4;
              fetch(`../api/users.php?id=${id}&opcion=${opcion}`, {
                  method: "GET",
                  headers: {
                    Accept: "application/json",
                    "Content-Type": "application/json",
                  },
                })
                .then((respuesta) => respuesta.json())
                .then((datos) => {
                  $("#formAlta").modal("hide");
                  if (datos == 1) {
                    Swal.fire({
                      icon: "success",
                      title: "Ok!",
                      text: "Eliminación con exito!",
                    }).then((result) => {
                      // window.location.reload();
                      refresh();
                    });
                  } else {
                    Swal.fire({
                      icon: "error",
                      title: "Ups..!",
                      text: "El dato seleccionado no pudo eliminarse!",
                    });
                  }
                });
            }
          });

        })

    }
    // === FIN eliminar usuario ===

    // actualiza la tabla sin recargar la página
    function refresh() {
      table.ajax.reload(null, false);
    }
  </script>
</body>

</html>