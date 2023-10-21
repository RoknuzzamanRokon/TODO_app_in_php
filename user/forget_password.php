<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <h2 class="text-center">Forget Password</h2>
                <form action="forget_pass_view.php" , method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username">
                    </div>
                    <div class="form-group">
                        <label for="password_1">Password</label>
                        <input type="password_1" class="form-control" id="password_1" name="password_1" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="password_2">Confirm Password</label>
                        <input type="password_2" class="form-control" id="password_2" name="password_2" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                    <label for="register">I am new User.<a href="registration.php">register</a></label>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>