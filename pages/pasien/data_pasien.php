<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>DATA PASIEN</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">

      <form role="form" method="post" action="pages/pasien/tambah_pasien_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama pasien</label>
                  <input type="text" name="nama_obat" class="form-control" placeholder="Nama Obat" required>
                </div>
                <div class="form-group">
                  <label>alamat</label>
                  <input type="text" name="kemasan" class="form-control" placeholder="kemasan" required>
                </div>
                <div class="form-group">
                  <label>no hp</label>
                  <input type="text" name="harga" class="form-control" placeholder="harga" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
              <br>
              <div class="box-header">
                <button type="reset" class="btn btn-secondary" role="button" title="Reset Data" value="Reset"><i class="glyphicon glyphicon-plus"></i>Reset</a>
              </div>
            </form>
            <br>

            <div class="box-body table-responsive">
              <table id="obat" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>NAMA pasien</th>
                  <th>alamat</th>
                  <th>no hp</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "conf/conn.php";
                $no=0;
                $query=mysqli_query($conn,"SELECT * FROM pasien ORDER BY id DESC");
                //echo $query;
                while ($row=mysqli_fetch_array($query))
                {
                ?>
                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['nama'];?></td>
                  <td><?php echo $row['alamat'];?></td>
                  <td><?php echo $row['no_hp'];?></td>
                  <td>
                    <a href="index_admin.php?page=ubah_pasien&id=<?=$row['id'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i>Ubah</a>
                    <a href="pages/pasien/hapus_pasien.php?id=<?=$row['id'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i>Hapus</a>
                  </td>
                </tr>

                <?php } ?>

                </tbody>
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

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#pasien').DataTable();
  });
</script>