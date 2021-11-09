<?php
session_start();
?>
<?php

session_destroy();
header("location:login.php?msg=Logout Successfully");

?>