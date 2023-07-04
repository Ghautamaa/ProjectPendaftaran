<?php
include '../../../backend/connection.php';

if (!isset($_GET['id'])) {
    header("Location: tabel-lomba-ml.php");
}

$id = $_GET['id'];

$sql = "DELETE 
        FROM tb_mlbb 
        WHERE id = $id";
$query = mysqli_query($db, $sql);

if ($query) {
    header("Location: tabel-lomba-ml.php?status=Sukses");
} else {
    header("Location: tabel-lomba-ml.php?status=Gagal");
}
?>
