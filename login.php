<?php
include "database.php";
// Starting a session

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Start</title>
    <link rel="stylesheet" href="login_style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
<!-- Upper Design// -->
<div style="overflow: hidden;">
  <svg
    preserveAspectRatio="none"
    viewBox="0 0 1200 120"
    xmlns="http://www.w3.org/2000/svg"
    style="fill: #8ad1f6; width: 100%; height: 172px; transform: scaleX(-1);"
  >
    <path d="M321.39 56.44c58-10.79 114.16-30.13 172-41.86 82.39-16.72 168.19-17.73 250.45-.39C823.78 31 906.67 72 985.66 92.83c70.05 18.48 146.53 26.09 214.34 3V0H0v27.35a600.21 600.21 0 00321.39 29.09z" />
  </svg>
</div>

<br><br><br>
<!-- login form// -->
    <div class=" card container con" style="width: 25em;">
        <div>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Login To Start</h4>
            <p class="text-center">Plan Your Day Freely With Us</p>
            <p class="divider-text">
                <span class="bg-light"><i class="fas fa-sign-in-alt" style="font-size:15px;"></i></span>
            </p>
            <form method="post">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                 </div>
                <input name="u_mail" class="form-control" placeholder="Email address" type="email" required = "required">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="u_password" class="form-control" placeholder="Your password" type="password" required = "required" minlength="8">
            </div> <!-- form-group// -->                                     
            <div class="form-group">
                <button name="log_in" type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div> <!-- form-group// -->   
            <p class="text-center">Don't have an account? <a href="index.php" class="atext">Create Account</a> </p>                                                                 
        </form>
        </article>
        </div> <!-- card.// -->
        
        </div> 
        <!--login form/container end.//-->

         <!-- Getting Message from Url -->
         <br>
        <span style="color:#333; font-size:16px;">
         <?php
           if(isset($_GET["msg"])){
               echo $_GET['msg'];
           }
         ?>
        </span>

        <!-- php code to login -->

    <?php
       if(isset($_POST["log_in"])){

        $u_mail = $_POST["u_mail"];
        $u_password = $_POST["u_password"];

        $query = "SELECT * FROM users WHERE user_mail='$u_mail' && user_password='$u_password'";
        
        $result = mysqli_query($connect,$query);
        $rowcount = mysqli_num_rows($result);

        if($rowcount==true){
            header("location:dashboard.php?user_mail=$u_mail");
        }else{
            echo "<script>alert('Your email or password is incorrect')</script>";
        }
    
    }


    ?>


</body>
</html>