<?php
include "database.php";
?>

<?php

      if(isset($_POST["sign_up"])){
                $user_name = $_POST["user_name"];
                $user_mail = $_POST["user_mail"];
                $user_password = $_POST["user_password"];
                $user_password_repeat = $_POST["user_password_repeat"];

                if($user_password==$user_password_repeat){

                $query = "INSERT INTO users VALUES(NULL, '$user_name', '$user_mail', '$user_password')";

                $result = mysqli_query($connect,$query);

                if($result){
                             //echo "Added";
                             header("location:login.php?msg=Account Created Successfully. Login to proceed");
                            }else{
                                   //echo "Error";
                                   header("location:index.php?msg=Something went wrong Try again!");
                            }
                                                        }else{
                                                               header("location:Registration.php?msg=Your repeat password is incorrect");
                                                        }
                                   }




?>