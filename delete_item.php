<?php
include "database.php";
session_start();

if($_SESSION["u_mail"]==true){
    echo "";
}else{
    header("location:login.php");
}

if(isset($_GET["item_id"])){
    $item_id = $_GET["item_id"];
}

$query = "DELETE FROM todoitems WHERE item_id=$item_id";
$result = mysqli_query($connect,$query);
    if($result){
        header("location:dashboard.php");
    }else{
        echo "Item Not Deleted. Try again <a href='dashboard.php'>Go Back</a>";
    }

?>