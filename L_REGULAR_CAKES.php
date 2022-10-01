<?php 
    include "koneksi.php";
    $sql = "SELECT * fROM regular_cake";
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
        <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Montserrat:wght@400;700&family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Hello, world!</title>
  </head>
  <body>
   <!-- hero and navbar start -->
   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div id="manu" style="position:absolute;">
            <nav class="navbar">
                <h1>Rumah Kue</h1>
                <ul style="position: relative;">
                    <li><a href="landing.html">Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
        </div>
          <img src="./img/pexels-acharaporn-kamornboonyarush-1028714.jpg" class="d-block w-100" alt="..." style="height:100vh" >
          <div class="carousel-caption d-none d-md-block"style="position: absolute; top: 600px;">
            <h5 >Featured Menu</h5>
            <p>The best from our kitchen</p>
          </div>
        </div>
      </div>
    </div>
    <!-- hero and navbar end -->
    <!-- isi content start -->
   <div style="display: flex; text-align: center; justify-content: space-evenly; margin: 50px auto;" >
    <div style="border: 1px none black; width: 40%;"><hr style="border:black solid;"></div>
    <div><h2>REGULAR CAKES</h2></div>
    <div style="border: 1px none black; width: 40%;"><hr style="border:black solid;"></div>
   </div>
   
   

   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="width: 1550px;position: relative;left: 37px;">
    <!-- php start -->
    <?php while($card = mysqli_fetch_array($query)){ ?>
    <div class="col" style="width: 300px;">
    <a href="">
      <div class="image">
         <img class="image__img" src="foto/<?php echo $card[2] ?>" alt="Bricks" style="border-radius: 20px; margin-bottom: 80px;width: 300px;height: 300px;">
         <div class="image__overlays image__overlays--primary">
             <div style="text-align: center;margin: 0 auto; font-size: 30px;font-family: 'Poppins', sans-serif;font-weight: 500;" class="image__title"><?php echo $card['nama_kue']; ?></div>
                <p style="font-family: 'Poppins', sans-serif;font-weight: 400;" class="image__description">
                IDR <?php echo $card['harga_kue']; ?>
                </p>
            </div>
        </div>
        </a>
    </div>
    <?php } ?>
    <!-- php end -->
    
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