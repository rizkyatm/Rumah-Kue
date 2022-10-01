<?php
    include "koneksi.php";

    if(isset($_POST['editt'])){
        $id_kue = $_POST['id_kue'];
        $nama_kue = $_POST['nama_kue'];
        $harga = $_POST['harga_kue'];
        $detail = $_POST['detail_kue'];
        $sql = "UPDATE `promo` SET `nama_kue` = '$nama_kue', `harga_kue` = '$harga', `detail_kue` = '$detail' WHERE `id_kue` = $id_kue;";
        $query = mysqli_query($koneksi,$sql);
        if($query){
            header('Location: table_best.php');
        }else{
            header('Location: edit_best.php?status=gagal');
        }
    }
?>