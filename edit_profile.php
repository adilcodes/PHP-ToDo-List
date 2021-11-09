<?php
//Fetching data of the specific user by id who want to update his/her profile...
include "database.php";
session_start();

if(isset($_GET["user_id"])){
    $user_id=$_GET["user_id"];
}

$query="SELECT * FROM users WHERE user_id=$user_id";
$result=mysqli_query($connect,$query);

$row=mysqli_fetch_array($result);
     $user_id=$row["user_id"];
     $user_name=$row["user_name"];
     $user_mail=$row["user_mail"];
     $user_password=$row["user_password"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="editprofile_style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>

    <div class="container">
        <div>
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Edit Profile</h4>
            <form method="post" action="edit_profile_process.php">
            <div class="form-group input-group">
            <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input name="user_name" class="form-control" type="text" value="<?php echo $user_name?>">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                 </div>
                <input name="user_mail" class="form-control" type="email" value="<?php echo $user_mail?>">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name="user_password" class="form-control" type="password"  minlength="8" value="<?php echo $user_password?>">
            </div> <!-- form-group// -->
      
            <div class="form-group">
                <button name="edit_profile" type="submit" class="btn btn-primary btn-block"> Edit Profile  </button>
            </div> <!-- form-group// -->      
            <!-- <p class="text-center">Have an account? <a href="login.php" class="atext">Log In</a> </p>                                                                  -->
        </form>
        </article>
        </div> <!-- card.// -->
        
        </div> 
        <!--container end.//-->
        
</body>
</html>