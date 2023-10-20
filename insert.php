<?php 
    $LIST = $_POST['title'];

    include 'config.php';
    mysqli_query($con, "INSERT INTO todo_list_table (list) values('$LIST')");
    header("location:index.php");
?>