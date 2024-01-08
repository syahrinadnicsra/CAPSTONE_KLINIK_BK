<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

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
                        <h2>Tambah Jadwal Periksa</h2>
                    </div>
                    <div class="card-body">
                        <!-- form start -->
                        <form role="form" method="post" action="../../pages/jadwal_periksa/tambah_jadwal_proses.php"> <!--setting aksi untuk tombol simpan-->
                            <div class="box-body">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="id" class="form-control" placeholder="ID" required>
                                </div>
                                <div class="form-group">
                                    <label>Dokter</label>
                                    <input type="text" name="id_dokter" class="form-control" placeholder="ID Dokter" required>
                                </div>
                                <div class="form-group">
                                    <label>Hari</label>
                                    <input type="text" name="hari" class="form-control" placeholder="hari" required>
                                </div>
                                <div class="form-group">
                                    <label>Mulai</label>
                                    <input type="text" name="mulai" class="form-control" placeholder="mulai" required>
                                </div>
                                <div class="form-group">
                                    <label>Selesai</label>
                                    <input type="text" name="selesai" class="form-control" placeholder="selesai" required>
                                </div>
                            </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="card-footer box-footer">
                        <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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