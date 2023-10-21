<?php
    include "config.php";

    
    echo $NAME = $_POST['username'];
    echo $EMAIL = $_POST["email"];
    echo $PASSWORD_1 = $_POST['password_1'];
    echo $PASSWORD_2 = $_POST['password_2'];

    mysqli_query($con, "UPDATE user_table SET name='$NAME',password_1 = '$PASSWORD_1', password_2 = '$PASSWORD_2' WHERE name = '$NAME'");
    header("location: login.php");
?>