<?php 

include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM buku WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-buku.php');
    }else {
        echo "Gagal menghapus data...";
    }
}else {
    die("Gagal terhubung dengan situs...");
}

?>