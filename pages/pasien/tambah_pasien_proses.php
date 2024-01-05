<?php
    include "../../conf/conn.php";
    if($_POST){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $query = ("INSERT INTO pasien(id,nama,alamat,no_hp) 
           VALUES ('".$id."','".$nama."','".$alamat."','".$no_hp."')");
        if(!mysqli_query($conn,$query)){
            die(mysql_error);
        }else
        {
            echo '<script>alert("Data Berhasil Ditambahkan !!!"); window.location.href="../../index_admin.php?page=data_obat"</script>';
        }
    }
?>