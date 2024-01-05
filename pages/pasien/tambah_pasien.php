<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH DATA PASIEN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH PASIEN </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/pasien/tambah_pasien_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id" class="form-control" placeholder="ID" required>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="nama" required>
                </div>
                <div class="form-group">
                  <label>alamat</label>
                  <input type="text" name="alamat" class="form-control" placeholder="alamat" required>
                </div>
                <div class="form-group">
                  <label>no_hp</label>
                  <input type="text" name="no_hp" class="form-control" placeholder="no_hp" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
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