<?php 
include "koneksi.php";
$sql = "SELECT * fROM promo";
$query = mysqli_query($koneksi,$sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="stylelanding.css">
    <!-- font poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brfamily=Montserrat:wght@400;700&family=Poppins:wght@100;400;500;700&display=swrel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- slider and navbar start -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div id="manu" style="position:absolute;">
            <nav class="navbar">
                <h1>Rumah Kue</h1>
                <ul style="position: relative;">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
        </div>
          <img src="./img/pexels-acharaporn-kamornboonyarush-1028714.jpg" class="d-block w-100" alt="..." style="height:100vh" >
          <div class="carousel-caption d-none d-md-block"style="position: absolute; top: 500px;">
            <h5 >Kebahagiaan dimulai dari sini.</h5>
            <p>Kue adalah kebahagiaan dalam bentuk yang nyata dan dapat dimakan.  </p>
          </div>
        </div>
         <div class="carousel-item ">
          <div id="manu" style="position:absolute;">
            <nav class="navbar">
                <h1>Rumah Kue</h1>
                <ul style="position: relative;">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
        </div>
          <img src="./img/pexels-ekaterina-bolovtsova-5702755.jpg" class="d-block w-100" alt="..." style="height:100vh" >
          <div class="carousel-caption d-none d-md-block"style="position: absolute; top: 500px;">
            <h5 >Hidup ini singkat, tapi pasti manis.</h5>
            <p>Jangan menunggu sampai terlambat. Makanlah sepotong kue itu!</p>
          </div>
        </div>
        <div class="carousel-item ">
          <div id="manu" style="position:absolute;">
            <nav class="navbar">
                <h1>Rumah Kue</h1>
                <ul style="position: relative;">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
        </div>
          <img src="./img/pexels-ruslan-khmelevsky-8732720.jpg" class="d-block w-100" alt="..." style="height:100vh" >
          <div class="carousel-caption d-none d-md-block"style="position: absolute; top: 500px;">
            <h5 >Jalani hidup yang manis!</h5>
            <p>Lihatlah dunia seperti kue ulang tahun raksasa. Ambil sepotong, tapi jangan terlalu banyak.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    <!-- slider and navbar end -->
    <!-- isi content start -->
   <div style="display: flex; text-align: center; justify-content: space-evenly; margin: 50px auto;" >
    <div style="border: 1px none black; width: 40%;"><hr style="border:black solid;"></div>
    <div><h2>PRODUCT</h2></div>
    <div style="border: 1px none black; width: 40%;"><hr style="border:black solid;"></div>
   </div>
   
   
   <div style="display: flex; justify-content: space-evenly; position: relative; left: 50px;">
    <div class="text-left">
      <a href="L_REGULAR_CAKES.php" style="text-decoration: none;">
        <div>
        <img src="./img/cake r.jpg" class="rounded" alt="..." style="width: 350px;  margin-left: -100px; filter: blur(1px);">
        <div class="detail_img" style="text-decoration:none;">Reguler Cake</div>
      </div>
      </a>
    </div>
    <div class="text-center">
      <a href="L_MOUSSE_CAKE.php"  style="text-decoration: none;">
        <div style="backdrop-filter: blur(5px);">
        <img src="./img/pexels-cats-coming-1359328.jpg" class="rounded" alt="..." style="width: 350px;  margin-left: -100px; filter: blur(1px);">
        <div class="detail_img1" style="text-decoration:none;">Mousse Cake</div>
      </div>
      </a>
    </div>
    <div class="text-right">
      <a href="L_TART.php"  style="text-decoration: none;">
        <div style="backdrop-filter: blur(5px);">
        <img src="./img/tart14.jpg" class="rounded" alt="..." style="width: 350px; height: 350px;  margin-left: -100px; filter: blur(1px);">
        <div class="detail_img2" style="text-decoration:none;">Tart</div>
      </div>
      </a>
    </div>
   </div>

  <div style="display: flex; text-align: center; justify-content: space-evenly; margin: 60px auto;" >
    <div style="border: 1px none black; width: 40%;"><hr style="border:black solid;"></div>
    <div><h2>BEST SELLER</h2></div>
    <div style="border: 1px none black; width: 40%;"><hr style="border:black solid;"></div>
   </div>


   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" style="width: 1550px; margin:0px auto 70px;padding-left:240px;"> 
    <!--php start -->
    <?php while($card = mysqli_fetch_array($query)){ ?>
    <div class="col" style="width: 300px;">
      <a href="detailpromo.php?id_kue=<?php echo $card['id_kue'] ?>">
      <div class="image">
         <img class="image__img" src="foto/<?php echo $card[2] ?>" alt="Bricks" style="border-radius: 20px; margin-bottom: 40px; margin-left: -100px; width: 350px; height: 350px;">
         <div class="image__overlay image__overlay--primary">
             <div style="text-align: center;margin: 0 auto; font-size: 20px;font-family: 'Poppins', sans-serif;font-weight: 500px; width: 200px; margin-bottom: 10px; " class="image__title"><?php echo $card['nama_kue'] ?></div>
             <p style="font-family: 'Poppins', sans-serif;font-weight: 400;" class="image__description">
             <?php echo $card['harga_kue'] ?>
             </p>
         </div>
     </div>
    </a>
 </div>
 <?php } ?>
 <!--php end -->  
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
    <!-- isi content end -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>