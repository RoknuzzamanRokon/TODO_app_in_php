<?php 
    $id = $_GET['ID'];

    include 'config.php';
    mysqli_query($con, "UPDATE `todo_list_table` SET `id`='[value-1]',`list`='[value-2]'");
    header("location:index.php");
?>