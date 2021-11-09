<?php
include "database.php";
session_start();

if($_SESSION["u_mail"]==true){
    echo "";
}else{
    header("location:login.php");
}

if(isset($_POST["add_item"])){
    $user_id = $_POST["user_id"];
    $item=$_POST["item"];

    $query = "INSERT INTO todoitems VALUES(NULL, '$user_id', '$item')";
    $result = mysqli_query($connect,$query);
    if($result){
        header("location:dashboard.php");
    }else{
        echo "item not added. Try again <a href='dashboard.php'>Go Back</a>";
    }
}
?>