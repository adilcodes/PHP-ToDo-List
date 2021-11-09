<?php
include "database.php";
session_start();

if(isset($_POST["edit_profile"]){
    $user_id=$_POST["user_id"];
    $user_name=$_POST["user_name"];
    $user_mail=$_POST["user_mail"];
    $user_password=$_POST["user_password"];
}
?>