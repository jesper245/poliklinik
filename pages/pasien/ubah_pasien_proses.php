<?php
  include "../../conf/conn.php";
  if($_POST){$id = $_POST['id'];
    
    $namat = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $query = ("UPDATE pasien SET namat='$nama',alamat='$alamat',no_hp='$no_hp' WHERE id ='$id'");
    if(!mysqli_query($conn,$query)){die(mysql_error);
    }else{
        echo '<script>alert("Data Berhasil Diubah !!!");window.location.href="../../index.php?page=data_obat"</script>';}}
?>