<?php

include("config.php");

if (isset($_POST['daftar'])) {
    $title = $_POST['judul'];
    $author = $_POST['pengarang'];
    $genre = $_POST['genre'];
    $publisher = $_POST['penerbit'];

    $sql = "INSERT INTO buku(judul, pengarang, genre, penerbit) VALUES ('$title', '$author', '$genre', '$publisher')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
        exit; // Stop further execution after redirect
    } else {
        header('Location: index.php?status=gagal');
        exit; // Stop further execution after redirect
    }
} else {
    die("Gagal terhubung dengan situs...");
}

?>
