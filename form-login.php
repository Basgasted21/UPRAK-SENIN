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
            background-color: #FFE8D6;
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
    <title>Login Form</title>
</head>
<body>
    <header class="text-center">
        <h3 class="mt-3">Login</h3>
    </header>
    <nav>
        <?php if(isset($_GET['status'])): ?>
            <h4>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Akun berhasil dibuat!";
                    } elseif ($_GET['status'] == 'belum_login') {
                        echo "Login terlebih dahulu!";
                    } else{
                        die("Salah Password/Akun!");
                    }
                ?>
            </h4>
        <?php endif; ?>
    </nav>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Login Form</h4>
            </div>
            <div class="card-body">
                <form action="proses-login.php" method="post">
                    <fieldset>
                        <div class="mb-3">
                            <label for="iUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="iUsername" name="iUsername" placeholder="Masukkan username....">
                        </div>
                        <div class="mb-3">
                            <label for="iPassword" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="iPassword" name="iPassword" placeholder="Masukkan password...">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                        </div>
                    </fieldset>
                </form>
                <p class="mt-3 text-center">
                    Belum punya akun? Daftar <a href="proses-register.php">di sini</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
