<?php
    $id = $_GET['ID'];

    include "config.php";
    mysqli_query($con, "DELETE FROM todo_list_table WHERE id = $id;");
    header("location:index.php");
?>