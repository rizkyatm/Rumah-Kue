<?php 
include "koneksi.php";
$id_kue = $_GET['id_kue'];
$sql = "SELECT * FROM regular_cake WHERE id_kue='$id_kue'";
$query = mysqli_query($koneksi, $sql);
$pel = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kue</title>
    <!-- link css -->
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
    <div class="tambahdatamurid">
        <p>Tambah Data Murid</p>
        <form enctype="multipart/form-data" method="post" action="edit.php">
            <table>
                <tr>
                    <td></td>
                    <td><label class="label"><input class="input-tambahdata" required="required" type="hidden" min="0" name="id_kue"></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Nama Kue </label></td>
                    <td><input value="<?php echo $pel['nama_kue'] ?>" class="input-tambahdata" required="required" type="text" maxlength="60" name="nama_kue"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Harga </label></td>
                    <td><input value="<?php echo $pel['harga_kue'] ?>" class="input-tambahdata" required="required" type="text, number" name="harga_kue"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="tulisan"><label> Detail </label></td>
                    <td><input value="<?php echo $pel['detail_kue'] ?>" class="input-tambahdata" required="required" type="text" name="detail_kue"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input  id="button-simpan" type="submit" name="ubah" value="simpan">
                    </td>
                </tr>
                
            </table>
    </div>
</body>
</html>