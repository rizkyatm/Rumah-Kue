<?php 
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link css -->
    <link rel="stylesheet" href="stylelogin.css">

    <!-- link google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <section>
        <div class="container">
            <div class="user login">
                <div class="imgbg"><img src="img/cake-1.jpg"></div>
                <div class="form">
                    <form method="POST">
                        <h2>Sign In</h2>
                        <input name="email" type="email" placeholder="Email Address" required="required">
                        <input name="password" type="password" placeholder="Password" required="required">
                        <input name="submit" id="submit" type="submit" value="SIGN IN" required="required">
                        <p class="signupz">Dont have account? <a href="register.php">Sign Up.</a></p>
                    </form>
                    <?php
                    if(isset($_POST['submit'])){
                        $email = htmlspecialchars($_POST['email']);
                        $password = htmlspecialchars($_POST['password']);

                        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
                        $count = mysqli_num_rows($query);
                        
                        if($count > 0){
                            $data = mysqli_fetch_array($query);
                            if(password_verify($password, $data['password'])){
                                $_SESSION['logged_in'] = true;
                                $_SESSION['email'] = $data['email'];

                                header("location: table_regular.php");
                            }
                            else{
                                echo '<script>alert("Your password is invalid")</script>';
                            }
                        }else{
                            echo '<script>alert("Your account not exist")</script>';
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>