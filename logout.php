<?php
session_start();
if($_SESSION["u_mail"]==true){
    echo "";
}else{
    header("location:login.php");
}
?>
<?php

session_destroy();
header("location:login.php?msg=Logout Successfully");

?>