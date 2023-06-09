<?php

include("config.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $title = $_POST['iJudul'];
    $author = $_POST['iPengarang'];
    $genre = $_POST['iGenre'];
    $publisher = $_POST['iPenerbit'];

    $sql = "UPDATE buku SET judul='$title', pengarang='$author', genre='$genre', penerbit='$publisher' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-buku.php');
        exit();
    } else {
        die("Gagal memperbarui data...");
    }
} else {
    die("Gagal mengakses situs...");
}
?>
