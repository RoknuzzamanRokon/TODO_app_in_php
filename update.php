<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: gray;
            font-family: Arial, sans-serif;
        }

        .card {
            background-color: white;
            margin: 50px auto;
            padding: 20px;
            width: 400px;
        }


        h1 {
            text-align: center;
            color: black;
            font-size: 24px;
            margin-top: 0;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        textarea {
            border-radius: 5px;
            border: none;
            margin-bottom: 10px;
            padding: 10px;
        }

        input[type="text"] {
            background-color: #f2f2f2;
            font-size: 16px;
            font-weight: bold;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            border-radius: 5px;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            padding: 10px;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>



</head>

<?php
$id = $_GET['ID'];
include 'config.php';
$rowData = mysqli_query($con, "SELECT * from todo_list_table where id = $id");

$row = mysqli_fetch_array($rowData);

?>

<body>
    <div class="card">
        <div>
            <h1>Update List</h1>
        </div>

        <div>
            <form action="update_1.php" method="POST">
                <label for="title">Present</label>
                <input type="text" id="title" name="list" value="<?php echo $row["list"]; ?>">

                <input type="submit" name="submit_button" value="Update List">
                <input type="hidden" name = "id" value="<?php echo $row["id"]; ?>">
            </form>
        </div>
    </div>


</body>

</html>