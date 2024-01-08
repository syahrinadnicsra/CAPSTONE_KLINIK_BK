<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            DAFTAR PERIKSA PASIEN
        </h1>
        <ol class="breadcrumb">
            <li class="active">DAFTAR PERIKSA PASIEN</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card box box-primary">
                    <div class="card-header box-header">
                        <a href="?page=tambah_obat" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                    </div>
                    <div class="card-body box-body table-responsive">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No Urut</th>
                                    <th>Nama Pasien</th>
                                    <th>Keluhan</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                require_once __DIR__ . "/../../conf/conn.php";
                                $no = 0;
                                $query = mysqli_query($conn, "SELECT * FROM obat ORDER BY id DESC");
                                //echo $query;
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no = $no + 1; ?></td>
                                        <td><?php echo $row['nama_pasien']; ?></td>
                                        <td><?php echo $row['keluhan']; ?></td>
                                        <td>
                                            <a href="index.php?page=ubah_obat&id=<?= $row['id']; ?>" class="btn btn-primary" role="button" title="Periksa Data"><i class="glyphicon glyphicon-edit">Periksa</i></a>
                                        </td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Id</th>
                                    <th>Nama Obat</th>
                                    <th>Kemasan</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->