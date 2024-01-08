<?php
include __DIR__ . "/../../conf/conn.php";
$sql = "SELECT * FROM periksapasien WHERE id='" . $_GET['id'] . "'";
//echo $sql;
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Periksa Pasien
        </h1>
        <ol class="breadcrumb">
            <li class="active">Periksa Pasien</li>
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
                        <h2>Ubah Data Obat</h2>
                    </div>
                    <!-- form start -->
                    <form role="form" method="post" action="../../pages/memeriksa_pasien/edit_periksa_pasien_proses.php">
                        <div class="card-body box-body">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="form-group">
                                <label>Nama Pasien</label>
                                <input type="text" name="nama_pasien" class="form-control" value="<?php echo $row['nama_pasien']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggaal Periksa</label>
                                <input type="text" name="tgl_periksa" class="form-control" value="<?php echo $row['tgl_periksa']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Catatan</label>
                                <input type="text" name="catatan" class="form-control" value="<?php echo $row['catatan']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Obat</label>
                                <input type="text" name="obat" class="form-control" value="<?php echo $row['obat']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Total Harga</label>
                                <input type="text" name="total_hrg" class="form-control" value="<?php echo $row['total_hrg']; ?>" required>
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