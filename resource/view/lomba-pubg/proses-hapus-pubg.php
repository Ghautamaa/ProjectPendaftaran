<?php
include '../../../backend/connection.php';

if (!isset($_GET['id']) || $_GET['id'] == null) {
    header("Location: tabel-lomba-pubg.php");
}

$id = $_GET['id'];

$sql = "DELETE FROM tb_pubg WHERE id = $id";
$query = mysqli_query($db, $sql);

if ($query) {
    header("Location: tabel-lomba-pubg.php?status=sukses");
} else {
    header("Location: tabel-lomba-pubg.php?status=gagal");
}
?>
