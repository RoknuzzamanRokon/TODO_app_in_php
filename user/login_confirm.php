<!-- <?php
        $EMAIL = $_POST["email"];
        $PASSWORD = $_POST["password"];

        include "config.php";
        mysqli_query($con, "SELECT * from user_table");
        header("location:app/index.php")
        ?> -->


<?php
$EMAIL = $_POST["email"];
$PASSWORD = $_POST["password"];

include "config.php";

// Use a prepared statement to fetch the user's data by email
$stmt = mysqli_prepare($con, "SELECT email, password_1 FROM user_table WHERE email = $EMAIL");
mysqli_stmt_bind_param($stmt, "s", $EMAIL);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) == 1) {
    // User with the provided email exists, fetch the password and verify it
    mysqli_stmt_bind_result($stmt, $user_id, $hashed_password);
    mysqli_stmt_fetch($stmt);

    if (password_verify($PASSWORD, $hashed_password)) {
        // Passwords match, set up a session or cookie and redirect to the protected page
        session_start();
        $_SESSION['user_id'] = $user_id;
        header("location: http://localhost:8080/todo/app/index.php");
    } else {
        header("location: login.php?error=incorrect_password");
    }
} else {
    header("location: login.php?error=user_not_found");
}

mysqli_stmt_close($stmt);
mysqli_close($con);
?>