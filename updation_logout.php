<?php
session_start();
?>
<?php

session_destroy();
header("location:login.php?successmsg=Profile Updated. Login to Proceed");

?>