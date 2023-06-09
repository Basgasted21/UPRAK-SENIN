<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Buku Baru</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #EEE2DE;
        }
    </style>
</head>
<body>
    <header class="text-center">
        <h3 class="mt-5">Formulir Pendaftaran Buku Baru</h3>
    </header>
    <div class="container">
        <form action="proses-tambah.php" method="post">
            <fieldset>
                <div class="mb-3">
                    <label for="judul" class="form-label mt-5">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" placeholder="Judul buku...">
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" placeholder="Pengarang buku...">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label mt-3">Genre Buku</label>
                    <input type="text" name="genre" class="form-control" placeholder="Genre buku...">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label mt-3">Penerbit Buku</label>
                    <input type="text" name="penerbit" class="form-control" placeholder="Penerbit buku...">
                </div>
                    <input type="submit" name="daftar" value="Daftar" class="btn btn-primary">
                </div>
            </fieldset>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
