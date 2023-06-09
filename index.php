<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peminjaman Buku | SMK Telkom Jakarta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #FFE8D6;
        }

        .header {
            text-align: center;
            margin-top: 30px;
        }

        .title {
            margin-top: 30px;
            text-align: center;
        }

        .menu-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 40px;
            background-color: #FFFFFF;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .menu-container .nav-link {
            background-color: #FFCBB3;
            border-color: #FFCBB3;
        }

        .menu-container .nav-link:hover {
            background-color: #FFA785;
            border-color: #FFA785;
        }

        .menu-container .nav-link:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 171, 133, 0.5);
        }

        .menu-container .nav-link:active {
            background-color: #FFA785;
            border-color: #FFA785;
            box-shadow: none;
        }

        .menu-container .nav-link:disabled {
            background-color: #FFCBB3;
            border-color: #FFCBB3;
        }

        .logout-btn {
            background-color: #FF5148;
            border-color: #FF5148;
        }

        .logout-btn:hover {
            background-color: #FF322F;
            border-color: #FF322F;
        }

        .logout-btn:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 81, 72, 0.5);
        }

        .logout-btn:active {
            background-color: #FF322F;
            border-color: #FF322F;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <header class="header">
        <h3>Daftar Peminjaman Buku</h3>
        <h1>SMK Telkom Jakarta</h1>
    </header>

    <div class="container menu-container">
        <h4 class="title">Menu</h4>
        <nav>
            <?php if (isset($_GET['status'])): ?>
                <p class="text-center">
                    <?php if ($_GET['status'] == "sukses") {
                        echo "Pendaftaran buku baru berhasil";
                    } else {
                        echo "Pendaftaran gagal";
                    } ?>
                </p>
            <?php endif; ?>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary mb-3" href="form-tambah.php">Tambah Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="list-buku.php">Daftar Buku</a>
                </li>
            </ul>
            <a href="logout.php" class="btn logout-btn d-block mx-auto mt-5">Logout</a>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
