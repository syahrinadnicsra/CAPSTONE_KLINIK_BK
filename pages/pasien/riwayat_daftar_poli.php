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
                            <a href="?page=daftarpoli" class="nav-link">
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
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Riwayat Daftar Poli</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Riwayat Daftar Poli</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Daftar Poli</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="card box box-primary">
                                    <div class="card-header box-header"></div>
                                    <div class="card-body box-body table-responsive">
                                        <table id="example1" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Poli</th>
                                                    <th>Dokter</th>
                                                    <th>Hari</th>
                                                    <th>Mulai</th>
                                                    <th>Selesai</th>
                                                    <th>Antrian</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                    require_once __DIR__ . "/../../conf/conn.php";
                                                    $no = 0;
                                                    $query = mysqli_query($conn, "SELECT * FROM daftar_poli JOIN jadwal_periksa ON jadwal_periksa.id = daftar_poli.id_jadwal ORDER BY daftar_poli.id DESC");
                                                    //echo $query;
                                                    while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                <tr>
                                                    <td><?php echo $no = $no + 1; ?></td>
                                                    <td><?php echo $row['id_poli']; ?></td>
                                                    <td> <?= $row['id_dokter'] ?></td>
                                                    <td><?php echo $row['hari']; ?></td>
                                                    <td><?php echo $row['mulai']; ?></td>
                                                    <td> <?= $row['selesai'] ?></td>
                                                    <td><?php echo $no ?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-success" role="button" title="Detail Data"><i class="glyphicon glyphicon-edit">Detail</i></a>
                                                    </td>
                                                </tr>

                                            <?php } ?>
                                            <!--<td>1</td>
                                                    <td>Poli Gigi</td>
                                                    <td>Drg.Upin</td>
                                                    <td>Kamis</td>
                                                    <td>08:30:00</td>
                                                    <td>10:20:00</td>
                                                    <td>001</td>-->
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-secondary">
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
    <!-- Bootstrap 4 -->
    <script src="../../app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../app/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../app/dist/js/demo.js"></script>
</body>

</html>