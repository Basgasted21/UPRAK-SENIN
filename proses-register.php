<?php
include("config.php");

if (isset($_POST["register"])) {
    $username = $_POST['iUsername'];
    $password = $_POST['iPassword'];

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$hashPassword')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: form-login.php');
        exit();
    } else {
        echo mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .container {
            max-width: 400px;
        }
        .card {
            border-radius: 20px;
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }
        .card-body {
            background-color: #ffffff;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .btn-primary {
            background-color: #FFB6C1;
            border-color: #FFB6C1;
        }
        .btn-primary:hover {
            background-color: #FF92A4;
            border-color: #FF92A4;
        }
        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 182, 193, 0.5);
        }
        .btn-primary:active {
            background-color: #FF92A4;
            border-color: #FF92A4;
            box-shadow: none;
        }
        .btn-primary:disabled {
            background-color: #FFB6C1;
            border-color: #FFB6C1;
        }
    </style>
    <title>Registration Form</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Registration</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="iUsername" class="form-label">Username :</label>
                        <input type="text" class="form-control" name="iUsername" id="username">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="iEmail" class="form-label">Email :</label>
                        <input type="text" class="form-control" name="iEmail" id="email">
                    </div> -->
                    <div class="mb-3">
                        <label for="iPassword" class="form-label">Password :</label>
                        <input type="password" class="form-control" name="iPassword" id="password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100" name="register">Register!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
