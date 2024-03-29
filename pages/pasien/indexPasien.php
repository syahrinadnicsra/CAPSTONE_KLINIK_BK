<?php
session_start();
require_once "../../conf/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Poliklinik</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../app/plugins/fontawesome-free/css/all.min.css">
  <script src="https://kit.fontawesome.com/79ba4adbee.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../app/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../app/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../app/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../app/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../app/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../app/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../app/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../app/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../../app/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!--<div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>-->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../../app/dist/img/logoudinusbaru.jpg" alt="Logo Udinus" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Poliklinik</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../app/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= $_SESSION['nama']; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="?page=daftarpoli" class="nav-link">
                <i class="nav-icon fa-solid fa-hospital"></i>
                <p>
                  Daftar Poli
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=riwayatdaftarpoli" class="nav-link">
                <i class="nav-icon fa-solid fa-person-booth"></i>
                <p>
                  Riwayat Daftar Poli
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <!-- Membuat link halaman-->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      if (isset($_GET['page'])) {
        if ($_GET['page'] == 'daftarpoli') {
          include __DIR__ . "/daftarpoli.php";
        } elseif ($_GET['page'] == 'riwayatdaftarpoli') {
          include __DIR__ . "/riwayat_daftar_poli.php";
        }
      } else {
        include __DIR__ . "/../../pages/home.php";  //home.php file untuk halaman dashboard
      }
    }
    ?>


    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="https://adminlte.io">Syahrina Dini Caesara</a>.</strong>
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">

      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../app/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../app/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../../app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../../app/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../../app/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../../app/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../app/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../app/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../app/plugins/moment/moment.min.js"></script>
  <script src="../../app/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../app/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../../app/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../app/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../app/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../app/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../../app/dist/js/pages/dashboard.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="../../app/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../app/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../app/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../app/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../app/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../app/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../app/plugins/jszip/jszip.min.js"></script>
  <script src="../../app/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../app/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../app/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../app/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../app/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#obat').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>