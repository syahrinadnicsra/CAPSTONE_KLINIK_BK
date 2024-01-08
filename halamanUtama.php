<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik BK</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
    <script src="https://kit.fontawesome.com/79ba4adbee.js" crossorigin="anonymous"></script>
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="hold-transition login-page">
    <div class="container-fluid flex bg-sky-600 flex-col justify-center items-center text-white p-5" style="height: 300px;">
        <h1 class="font-weight-bold mb-3">Poliklinik</h1>
        <h5>
            "Bimbingan Karir 2023 - 2024 | Web Development"</h5>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-solid fa-hand-holding-medical fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3>Pasien</h3>
                        <p class="card-text">Apabila anda adalah seorang Pasien, silahkan Login sebagai Pasien. Jika belum memiliki akun, silahkan lakukan registrasi terlebih dahulu.</p>
                        <a href="pages/pasien/loginPasien.php" class="btn btn-primary btn-block">Login Pasien</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-solid fa-stethoscope fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3>Dokter</h3>
                        <p class="card-text">Apabila anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk
                            memulai melayani pasien</p>
                        <div class="d-grid">
                            <a href="pages/dokter/loginDokter.php" class="btn btn-primary btn-block">Login Dokter</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fa-solid fa-user-tie fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3>Admin</h3>
                        <p class="card-text">Apabila anda adalah seorang Admin, silahkan login untuk mengelola data</p>
                        <div class="d-grid">
                            <a href="pages/admin/loginAdmin.php" class="btn btn-primary btn-block">Login Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="app/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="app/dist/js/adminlte.min.js"></script>
</body>

</html>