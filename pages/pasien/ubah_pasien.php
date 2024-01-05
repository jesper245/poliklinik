<?php
include  "conf/conn.php";
$sql="SELECT * FROM pasien WHERE id='".$_GET['id']."'";
//echo $sql;
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH DATA PASIEN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH PASIEN</li>
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
            <form role="form" method="post" action="pages/pasien/ubah_pasien_proses.php">
              <div class="box-body">
                <input type="hidden" name="id_dokter" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control"  value="<?php echo $row['nama']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>" required>
                </div>
                <div class="form-group">
                  <label>No. HP</label>
                  <input type="text" name="no_hp" class="form-control" value="<?php echo $row['no_hp']; ?>" required>
                </div>
                  <?php
                  include  "conf/conn.php";
                  $sql="SELECT id, nama FROM pasien";
                  //echo $sql;
                  $query = "SELECT id, nama FROM pasien";
                  $result = $conn->query($query);
               ?>
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