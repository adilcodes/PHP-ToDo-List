<?php
// Fetching the id of the user who just logged in through his/her email which we sent through the url from the login page and get here by $_GET...we fetch the id here because we have to update the user data when he/she will click the edit profile button the id of the user that we fetch her will go through the url to edit page
include "database.php";
session_start();

if($_SESSION["u_mail"]==true){
    echo "";
}else{
    header("location:login.php");
}

if(isset($_GET["user_mail"])){
    $mail = $_GET["user_mail"];
    $query = "SELECT * FROM users WHERE user_mail='$mail'";
    $result = mysqli_query($connect, $query);
    $row=mysqli_fetch_array($result);
    $_SESSION["user_id"]=$row["user_id"];
}
?>
<!-- html started -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dashboard_style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 header">
                <div class="nav">
                    <button class="btn"><a style="text-decoration:none; color:#000;" href="logout.php">Log Out</a></button>
                    <button class="btn ml-2"><a style="text-decoration:none; color:#000;" href="edit_profile.php?user_id='<?php echo $_SESSION["user_id"]; ?>'">Edit Profile</a></button>
                </div>
                <div class="add-items">
                    <!-- <input type="text" class="form-control col-lg-4" placeholder="Add To-Do item">
                    <input type="submit" name="add" value="Add" class="btn btn-primary ml-2"> -->
                    <form class="form-inline col-lg-8 d-flex justify-content-center" method="post" action="add_item_process.php">
                        <div class="form-group mb-2 col-lg-8 ">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION["user_id"];?>">
                            <input type="text" name="item" class="form-control col-lg-12" placeholder="Add To Do items Here">
                        </div>
                        <input type="submit" name="add_item" value="Add" class="btn btn-primary mb-2">
                    </form>
                </div>
            </div>
            <div class="col-lg-12 data">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ToDo's</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Fetching data from "todoitems" table of database -->
                        <?php
                        $i = 1;
                        $query="SELECT * FROM todoitems WHERE user_id= " . $_SESSION['user_id'];
                        $result=mysqli_query($connect,$query);    

                        while($row=mysqli_fetch_array($result)){
                        $item_id = $row["item_id"];
                        $item = $row["item"]; //Fetching only todo items from the database
                        ?>
                        <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $item; ?></td>
                        <td><a href="delete_item.php?item_id=<?php echo $item_id; ?>"><button class="btn btn-danger" name="delete">Delete</button></a></td>
                        <?php }?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>