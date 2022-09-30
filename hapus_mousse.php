<?php 
    include "koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM mousse_cake WHERE id_kue = '$_GET[id_kue]'");
    $row = mysqli_fetch_array($data);

    $foto = $row['foto_kue'];
    if(file_exists('foto/'.$foto)){
        unlink('foto/'.$foto);
    }
    $query = "DELETE FROM mousse_cake WHERE id_kue = '$_GET[id_kue]'";
    mysqli_query($koneksi,$query) or die ("sql error");
    header ('location:table_mousse.php');
?>