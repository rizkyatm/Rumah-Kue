<?php 
    include "koneksi.php";
    $foto = $_FILES['foto_kue']['name'];
    $file_tmp = $_FILES['foto_kue']['tmp_name'];
    $nama = $_POST['nama_kue'];
    $harga = $_POST['harga_kue'];
    $detail = $_POST['detail_kue'];

    move_uploaded_file($file_tmp, 'foto/'.$foto);
    $query = "INSERT INTO `mousse_cake` (`id_kue`, `nama_kue`, `foto_kue`, `harga_kue`, `detail_kue`) VALUES (NULL, '$nama', '$foto', '$harga', '$detail');";
    mysqli_query($koneksi, $query)
    or die("SQL Error");
    header("location:table_mousse.php")
?>
