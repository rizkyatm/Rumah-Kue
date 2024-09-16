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
    <link rel="stylesheet" href="styleformedit_regular.css">

    <!-- icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- link css side-bar -->
    <link rel="stylesheet" href="style-sidebar.css">

    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

    <!-- link googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Montserrat:wght@400;700&family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- ini sidebar -->
    <div class="sidebar">
        <div class="dashboard">
            <i class="fa-solid fa-circle-user fa-2x"></i>
            <h2>ADMIN</h2>
        </div>

        <div class="list_menu">
             <ul>
                <li><iconify-icon icon="ic:baseline-cake" style="color: white; margin-left: 40px;" width="20" height="20">h</iconify-icon><a href="table_regular.php">REGULAR CAKE</a></li>
                <li><iconify-icon icon="cib:cakephp" style="color: #ffff; margin-left: 40px;" width="20" height="20"></iconify-icon><a href="table_mousse.php">MOUSSE CAKE</a></li>
                <li><iconify-icon icon="wpf:wedding-cake" style="color: white; margin-left: 40px;" width="20" height="20"></iconify-icon><a href="table_tart.php">TART</a></li>
                <li><iconify-icon icon="emojione-monotone:birthday-cake" style="color: white; margin-left: 40px;" width="20" height="20"></iconify-icon><a href="table_best.php">BEST SELLER</a></li>
            </ul>
        </div>
    </div>

    <div class="judul">
        <p>EDIT DATA</p>
    </div>
    <!-- ini konten kanan -->
    <div class="kotak-kanan">
        <form enctype="multipart/form-data" action="edit_regular.php" method="post">
        <table>
            <tr>
                <td><input value="<?php echo $pel['id_kue'] ?>" class="input" type="hidden" name="id_kue" required="required"></td>
            </tr>

            <tr>
            <td><Label>Nama Kue</Label></td>
            </tr>
            <tr>
                <td><input autocomplete="off" value="<?php echo $pel['nama_kue'] ?>" class="input" type="text" name="nama_kue" required="required"></td>
            </tr>

            <tr>
            <td><label>Harga Kue</label></td>
            </tr>
            <tr>
                <td><input autocomplete="off" value="<?php echo $pel['harga_kue'] ?>" class="input" type="text, number" name="harga_kue" required="required"></td>
            </tr>

            <tr>
            <td><label>Detail Kue</label></td>
            </tr>
            <tr>
                <td><input autocomplete="off" value="<?php echo $pel['detail_kue'] ?>" class="input" type="text" name="detail_kue" required="required"></td>
            </tr>
            
        </table>
        <input type="submit" name="editt" value="edit" class="btn-simpan">
        </form>
    </div>
</body>
</html>