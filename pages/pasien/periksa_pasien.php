<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>PERIKSA</h1>
    </section>

    <!-- Main content -->
    
    <div class="box-body table-responsive">
              <table id="obat" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>NAMA pasien</th>
                  <th>Keluhan</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "conf/conn.php";
                $no=0;
                $query=mysqli_query($conn,"SELECT * FROM periksa ORDER BY id DESC");
                //echo $query;
                while ($row=mysqli_fetch_array($query))
                {
                ?>
                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['nama_pasien'];?></td>
                  <td><?php echo $row['keluhan'];?></td>
                  <td>
                    <a href="index_admin.php?page=memeriksa_pasien.php=<?=$row['id'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i>PERIKSA</a>
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
    $('#periksa').DataTable();
  });
</script>