<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku yang Dipinjam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #FCE7EC;
        }

        .header {
            text-align: center;
            margin-top: 30px;
        }

        .table-container {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 40px;
            background-color: #FFFFFF;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #FF847C;
            border-color: #FF847C;
        }

        .btn-primary:hover {
            background-color: #FF6B66;
            border-color: #FF6B66;
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 132, 124, 0.5);
        }

        .btn-primary:active {
            background-color: #FF6B66;
            border-color: #FF6B66;
            box-shadow: none;
        }

        .btn-danger {
            background-color: #F95D6A;
            border-color: #F95D6A;
        }

        .btn-danger:hover {
            background-color: #F94653;
            border-color: #F94653;
        }

        .btn-danger:focus {
            box-shadow: 0 0 0 0.2rem rgba(249, 93, 106, 0.5);
        }

        .btn-danger:active {
            background-color: #F94653;
            border-color: #F94653;
            box-shadow: none;
        }

        .btn-edit {
            background-color: #6CB2FF;
            border-color: #6CB2FF;
        }

        .btn-edit:hover {
            background-color: #5B9CFF;
            border-color: #5B9CFF;
        }

        .btn-edit:focus {
            box-shadow: 0 0 0 0.2rem rgba(108, 178, 255, 0.5);
        }

        .btn-edit:active {
            background-color: #5B9CFF;
            border-color: #5B9CFF;
            box-shadow: none;
        }
    </style>
</head>
<body>
    <header class="header">
        <h4 class="mt-4">Buku yang sudah dipinjam</h4>
    </header>

    <div class="container table-container">
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Genre</th>
                    <th>Penerbit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM buku";
                $query = mysqli_query($db, $sql);
                $no = 1;

                while ($buku = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$buku['judul']."</td>";
                    echo "<td>".$buku['pengarang']."</td>";
                    echo "<td>".$buku['genre']."</td>";
                    echo "<td>".$buku['penerbit']."</td>";
                    echo "<td>";
                    echo "<div class='d-flex justify-content-left'>";
                    echo "<a href='form-edit.php?id=".$buku['id']."' class='btn btn-edit me-2'>Edit</a>";
                    echo "<a href='proses-delete.php?id=".$buku['id']."' class='btn btn-danger'>Hapus</a>";
                    echo "</div>";
                    echo "</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>

        <div class="d-flex justify-content-end">
            <a href="form-tambah.php" class="btn btn-primary mt-2">Tambah Baru</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
