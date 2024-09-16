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
    <link rel="stylesheet" href="styleregister.css">
    
    <!-- link google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="user signup">
                <div class="imgbg"><img src="img/cake-2.jpg"></div>
                <div class="form">
                    <form method="POST">
                        <h2>Sign Up</h2>
                        <input name="email" type="email" placeholder="Email Address" required="required">
                        <input name="password" type="password" placeholder="Password" required="required">
                        <input name="submit" id="submit" type="submit" value="SIGN UP">
                        <p class="signupz">Already have an account? <a href="admin.php">Sign In.</a></p>
                    </form>
                    <?php
                    if(isset($_POST['submit'])){
                        $email = htmlspecialchars($_POST['email']);
                        $password = htmlspecialchars($_POST['password']);
                        $encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
                        

                        $query = mysqli_query($koneksi, "SELECT email FROM user WHERE email='$email' ");
                        $count = mysqli_num_rows($query);

                        if($count > 0){
                            echo '<script>alert("cannot register. this email is existed in database")</script>';
                        }else {
                            $queryInsert = mysqli_query($koneksi, "INSERT INTO user (email, password) VALUES('$email', '$encryptedpassword')");
                            
                            if($queryInsert){
                                echo '<script>alert("Register success")</script>'; 
                            }
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>