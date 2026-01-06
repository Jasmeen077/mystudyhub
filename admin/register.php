<?php
include "../admin/dashboard/controllers/Controller.php";

$register = new Controller();
$registerData = $register->register();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;

        }

        .card {
            width: 100%;
            max-width: 500px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card-footer {
            text-align: center;
        }

        .form-label {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="card-header bg-primary text-light text-center">
            Register Admin
        </div>
        <div class="card-body">

            <form action="" method="POST">
                <label class="form-label">Name</label>
                <input type="text" placeholder="Enter name" name="name" class="form-control">

                <label class="form-label">Email</label>
                <input type="email" placeholder="Enter email" name="email" class="form-control">

                <label class="form-label">Password</label>
                <input type="password" placeholder="Enter password" name="password" class="form-control">

                <div class="card-footer mt-3">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit">Register</button>
                    <br>
                    <a href="login.php" class="text-decoration-none">Already Register ? Login Here</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>