<?php
include "config.php";

$List = $_POST['list'];
$ID = $_POST['id'];
mysqli_query($con, "UPDATE todo_list_table set list='$List' WHERE id = $ID;");
header("location:index.php");
