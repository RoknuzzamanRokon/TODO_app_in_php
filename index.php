<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: purple;
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

<body>
    <div class="card">
        <div>
            <h1>Tudo List</h1>
        </div>

        <div>
            <form action="insert.php" method="POST">
                <label for="title">List</label>
                <input type="text" id="title" name="title">

                <input type="submit" name="submit_button" value="Add List">
            </form>
        </div>
    </div>


    <!-- get data -->
    <?php
    include 'config.php';
    $rowData = mysqli_query($con, "SELECT * from todo_list_table");
    ?>

    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
            <table class="table">
                <tbody>

                    <?php
                    while ($row = $rowData->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['list'] ?></td>
                            <td style="width: 10%;"><a href="update.php? ID=<?php echo $row['id'] ?>" class="btn btn-outline-success">Update</a></td>

                            <td style="width: 10%;"><a href="delete.php? ID= <?php echo $row['id'] ?>" class="btn btn-outline-danger">Delete</a></td>
                        </tr>

                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>