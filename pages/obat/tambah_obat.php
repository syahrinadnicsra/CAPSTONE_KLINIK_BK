<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      TAMBAH DATA OBAT
    </h1>
    <ol class="breadcrumb">
      <li class="active">TAMBAH OBAT </li>
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
            <form role="form" method="post" action="../../pages/obat/tambah_obat_proses.php"> <!--setting aksi untuk tombol simpan-->
              <div class="box-body">
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id" class="form-control" placeholder="ID" required>
                </div>
                <div class="form-group">
                  <label>Nama Obat</label>
                  <input type="text" name="nama_obat" class="form-control" placeholder="Nama Obat" required>
                </div>
                <div class="form-group">
                  <label>Kemasan</label>
                  <input type="text" name="kemasan" class="form-control" placeholder="kemasan" required>
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" class="form-control" placeholder="harga" required>
                </div>
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