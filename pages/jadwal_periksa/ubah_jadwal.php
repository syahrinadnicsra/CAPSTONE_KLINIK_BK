<?php
include __DIR__ . "/../../conf/conn.php";
$sql = "SELECT * FROM obat WHERE id='" . $_GET['id'] . "'";
//echo $sql;
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            UBAH DJADWAL PERIKSA
        </h1>
        <ol class="breadcrumb">
            <li class="active">UBAH JADWAL PERIKSA</li>
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
                        <h2>Ubah Jadwal Periksa</h2>
                    </div>
                    <!-- form start -->
                    <form role="form" method="post" action="../../pages/dokter/ubah_jadwal_proses.php">
                        <div class="card-body box-body">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="form-group">
                                <label>Dokter</label>
                                <input type="text" name="id_dokter" class="form-control" value="<?php echo $row['id_dokter']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Hari</label>
                                <input type="text" name="hari" class="form-control" value="<?php echo $row['hari']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Mulai</label>
                                <input type="text" name="mulai" class="form-control" value="<?php echo $row['mulai']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Selesai</label>
                                <input type="text" name="selesai" class="form-control" value="<?php echo $row['selesai']; ?>" required>
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