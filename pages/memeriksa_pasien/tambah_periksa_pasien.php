<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            PERIKSA PASIEN
        </h1>
        <ol class="breadcrumb">
            <li class="active">PERIKSA PASIEN</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card box box-primary">
                    <!-- /.box-header -->
                    <div class="card-header box-header">
                        <h2>Tambah Data Obat</h2>
                    </div>
                    <div class="card-body">
                        <!-- form start -->
                        <form role="form" method="post" action="../../pages/obat/tambah_periksa_pasien_proses.php"> <!--setting aksi untuk tombol simpan-->
                            <div class="box-body">
                                <div class="form-group">
                                    <label>No</label>
                                    <input type="text" name="id" class="form-control" placeholder="ID" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Pasien</label>
                                    <input type="text" name="nama_pasien" class="form-control" placeholder="Nama Pasien" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Periksa</label>
                                    <input type="time" name="tgl_periksa" class="form-control" placeholder="Tanggal Periksa" required>
                                </div>
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input type="text-area" name="catatan" class="form-control" placeholder="Catatan" required>
                                </div>
                                <label for="id_jadwal">Obat</label>
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

                    </div>
                    <!-- /.box-body -->
                    <div class="card-footer box-footer">
                        <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i>Simpan</button>
                    </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</body>

</html>