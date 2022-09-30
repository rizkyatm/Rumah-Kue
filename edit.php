<?php
    include "koneksi.php";

    if(isset($_POST['ubah'])){
        $id_kue = $_POST['id_kue'];
        $nama_kue = $_POST['nama_kue'];
        $harga = $_POST['harga_kue'];
        $detail = $_POST['detail_kue'];
        $sql = "UPDATE `regular_cake` SET `nama_kue` = '$nama_kue', `harga_kue` = '$harga', `detail_kue` = '$detail' WHERE `regular_cake`.`id_kue` = $id_kue;";
        $query = mysqli_query($koneksi,$sql);
        if($query){
            header('location:table_regular.php');
        }else{
            header('Location: edit.php?status=gagal');
        }
    }
 ?>