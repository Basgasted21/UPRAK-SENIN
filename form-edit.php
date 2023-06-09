<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-buku.php');
    exit();
}

$id = $_GET['id'];

// // Sanitize the input to prevent SQL injection
// $id = mysqli_real_escape_string($db, $id);

$sql = "SELECT * FROM buku WHERE id=$id";
$query = mysqli_query($db, $sql);
$buku = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Tidak berhasil menemukan data...");
}
?>

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
        body{
            background-color: #EEE2DE;
        }
    </style>
</head>
<body>
    <header>
        <h3 class="text-center">Formulir Edit Buku</h3>
    </header>
    <div class="container">
        <form action="proses-edit.php" method="post">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $buku['id']; ?>">
                <div class="mb-3">
                    <label for="iJudul" class="form-label mt-5">Judul Buku</label>
                    <input type="text" name="iJudul" class="form-control" placeholder="Judul buku..." value=" <?php echo $buku['judul']; ?>">
                </div>
                <div class="mb-3">
                    <label for="iPengarang" class="form-label mt-3">Pengarang</label>
                    <input type="text" name="iPengarang" class="form-control" placeholder="Pengarang buku..." value=" <?php echo $buku['pengarang']; ?>">
                </div>
                <div class="mb-3">
                    <label for="iGenre" class="form-label mt-3">Genre Buku</label>
                    <input type="text" name="iGenre" class="form-control" placeholder="Genre buku..." value=" <?php echo $buku['genre']; ?>">
                </div>
                <div class="mb-3">
                    <label for="iPenerbit" class="form-label mt-3">Penerbit Buku</label>
                    <input type="text" name="iPenerbit" class="form-control" placeholder="Penerbit buku..." value=" <?php echo $buku['penerbit']; ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                </div>
            </fieldset>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
