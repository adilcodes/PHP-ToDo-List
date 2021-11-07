<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Your Day Here!</title>
    <link rel="stylesheet" href="index_style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>

   <h1 class="main-heading text-center">Plan Your Day Here!</h1>
   <center><hr></center>
   <br><br>
    <div class=" card container con">
        
        <div>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <p class="text-center">Get started with your account</p>
            <p>
                <a href="" class="atext btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                <a href="" class="atext btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
            </p>
            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p>
            <form method="post" action="add_user_process.php">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input name="user_name" class="form-control" placeholder="Full name" type="text" required = "required">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                 </div>
                <input name="user_mail" class="form-control" placeholder="Email address" type="email" required = "required">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="user_password" class="form-control" placeholder="Create password" type="password" required = "required" minlength="8">
            </div> <!-- form-group// -->
            
            <!-- Getting msg from url(if repeat password is incorrect) -->
            <span style="color:red; font-size:16px;">
                    <?php
                            if(isset($_GET["msg"])){
                                echo $_GET['msg'];
                            }
                    ?>
            </span>
            <!-- Getting msg from url end -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="user_password_repeat" class="form-control" placeholder="Repeat password" type="password" required = "required">
            </div> <!-- form-group// -->    
            <div class="form-group">
                <button name="sign_up" type="submit" class="btn btn-primary btn-block"> Create Account  </button>
            </div> <!-- form-group// -->      
            <p class="text-center">Have an account? <a href="login.php" class="atext">Log In</a> </p>                                                                 
        </form>
        </article>
        </div> <!-- card.// -->
        
        </div> 
        <!--container end.//-->
        
</body>
</html>