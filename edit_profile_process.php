<?php
include "database.php";
session_start();

if(isset($_POST["edit_profile"])){
    $user_id=$_POST["user_id"];
    $user_name=$_POST["user_name"];
    $user_mail=$_POST["user_mail"];
    $user_password=$_POST["user_password"];

    $query = "UPDATE users SET user_name='$user_name',user_mail='$user_mail',user_password='$user_password' WHERE user_id='$user_id'";
    $result = mysqli_query($connect,$query);
    if($result){
        header("location:updation_logout.php");
    }else{
        echo "Profile Not Updated. Try again";
    }
}
?>