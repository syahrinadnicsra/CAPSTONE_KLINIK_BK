<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Poli</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Poli</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Poli</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <form method="POST" action="../../conf/auth_daftarpoli.php" enctype="multipart/form-data"> <!--codingan database ada pada auth_daftarpoli.php-->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="no_antrian">No Rekam Medis</label>
                                <input type="int" id="no_rm" name="no_rm" class="form-control" value="202312-xxx">
                            </div>
                            <div class="form-group">
                                <label for="id_poli">Pilih Poli</label>
                                <select id="id_poli" name="id_poli" class="form-control custom-select">
                                    <option selected disabled>Open this select menu</option>
                                    <option value="gigi">Poli Umum</option>
                                    <option value="umum">Poli Gigi</option>
                                    <option value="tht">Poli THT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_jadwal">Pilih Jadwal</label>
                                <select id="id_poli" name="id_jadwal" class="form-control custom-select">
                                    <option selected disabled>Open this select menu</option>
                                    <?php
                                    require_once __DIR__ . "/../../conf/conn.php";
                                    $no = 0;
                                    $query = mysqli_query($conn, "SELECT * FROM jadwal_periksa");
                                    //echo $query;
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $row['id'] ?>">Tanggal <?= $row['hari'] ?> (<?= $row['mulai'] ?>)</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="keluhan">Keluhan</label>
                                <textarea id="keluhan" name="keluhan" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="daftarpoli" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                    <br>
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