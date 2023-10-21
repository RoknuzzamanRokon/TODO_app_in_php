<?php
// $NAME = $_POST["name"];
// $EMAIL = $_POST[ 'email'];
// $PASSWORD_1 = $_POST[ 'password'];
// $PASSWORD_2 = $_POST['confirmPassword'];

// include "config.php";
// mysqli_query($con, "INSERT INTO user_table 
//     (name,email,password_1,password_2)
//     VALUES 
//     ('$NAME','$EMAIL','$PASSWORD_1','$PASSWORD_2')");

// header("location:login.php");


$NAME = $_POST["name"];
$EMAIL = $_POST['email'];
$PASSWORD_1 = $_POST['password'];
$PASSWORD_2 = $_POST['confirmPassword'];

if ($PASSWORD_1 === $PASSWORD_2) {
    include "config.php";

    $query = "INSERT INTO user_table (name, email, password_1) VALUES ('$NAME','$EMAIL','$PASSWORD_1')";
    $stmt = mysqli_prepare($con, $query);

    if (mysqli_stmt_execute($stmt)) {
        header("location: login.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
     echo "Passwords do not match. Please try again.";
    header("location: registration.php");
}

?>