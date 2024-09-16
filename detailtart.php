<?php 
include "koneksi.php";
$id_kue = $_GET['id_kue'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="content.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<?php 
    $sql = "SELECT * FROM tart WHERE id_kue= '$id_kue'";
    $data = mysqli_query($koneksi, $sql);
    while($pel = mysqli_fetch_array($data)){
    ?>
    <div class="container-fluid" style="padding: 0px;">
        <div class="card mb-3" style="max-width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center; border: none;">
        <!-- card -->
            <div class="row g-0" style="display: flex; width: 100%; gap: 10px;">
                <div class="col-md-4" style="width: 374px; height: 358px; position: absolute; left: 131px; top: 146px;">
                <!-- img -->
                <img style="border-radius: 30px; width: 300px;height: 300px;"  src="foto/<?php echo $pel['foto_kue'] ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body" > 
                    <!-- card body/tulisan -->
                    <h5 style="position: absolute;width: 508px;height: 69px;left: 577px;top: 158px;font-family: 'Poppins';font-style: normal;font-weight: 300;font-size: 46px;line-height: 69px;color: #000000; width: fit-content;" class="card-title"><?php echo $pel['nama_kue']; ?></h5>
                    <p style="position: absolute;width: fit-content;height: 59px;left: 577px;top: 244px;font-family: 'Poppins';font-style: normal;font-weight: 275;font-size: 39px;line-height: 58px;opacity: 0.5;" class="card-text">IDR <?php echo $pel['harga_kue'] ?></p>
                    <hr style="position: absolute;width: 730px;height: 1px;left: 577px;top: 325px;">
                    <p style="position: absolute;width: 730px;height: 60px;left: 577px;top: 353px;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 20px;line-height: 30px;" class="card-text"><?php echo $pel['detail_kue'] ?></p>
                    <a href="L_TART.php"><button style="position: absolute;width: 107px;height: 40px;left: 1150px;top: 489px;background: #D9D9D9;border-radius: 20px;background: #D9D9D9;border-radius: 20px;color: black;border: none;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 20px;line-height: 30px;" class="btn btn-primary" type="button">Back</button></a>
                    
                </div>
                </div>
            </div>
        </div>
        <footer>
<div class="container">
  <div class="sec rumahkue">
      <h2>Rumah Kue</h2>
      <p>Rumah Kue merupakan perusahaan kue yang terus menetapkan kecepatan dan inovasi dalam industri kue yang berkembang pesat. Kami memiliki semangat untuk membuat kue yang luar biasa.</p>
      <ul class="media">
          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
      </ul>
  </div>
  <div class="produk">
      <h2>Product</h2>
      <ul>
          <li><a href="#">Regular Cake</a></li>
          <li><a href="#">Mousse Cake</a></li>
          <li><a href="#">Tart</a></li>
      </ul>
  </div>
  <div class="kontak">
      <h2>Contact Us</h2>
      <ul>
          <li><a href="#"><i class="fa-sharp fa-solid fa-phone"></i><span>rumahkue@gmail.com</span></a></li>
          <li><a href="#"><i class="fa-sharp fa-solid fa-envelope"></i><span>rumahkue@gmail.com</span></a></li>
      </ul>
  </div>
  <div class="alamat">
      <h2>Address</h2>
      <ul>
          <li><a href="#"><i class="fa-sharp fa-solid fa-location-dot"></i><span>169, Meikarta, Jawa Barat, Indonesia</span></a></li>
      </ul>
  </div>
</div>
</footer>
    </div>
    <?php }?>
    
</body>
</html>