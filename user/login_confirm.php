<?php
$EMAIL = $_POST["email"];
$PASSWORD = $_POST["password"];

include "config.php";

$result = mysqli_query($con, "SELECT * FROM user_table WHERE email = '$EMAIL' AND password_1='$PASSWORD'");

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // User with provided email and password found
        header("location: ../app/index.php");
    } else {
        // No matching user found
        header("location: error.php");
    }
} else {
    // Database query failed
    header("location: error.php");
}
?>


































// if($result) {
//     // Fetch and display data
//     while ($row = mysqli_fetch_assoc($result)) {

//         if($row['email'] = $EMAIL AND $row['password_1'] = $PASSWORD){
//             header("location: ../app/index.php");
//         } else{
//             header("location: error.php");
//         }
//     }
    
// } else {
//     header("location: error.php");
   
// }

// ?>



























































