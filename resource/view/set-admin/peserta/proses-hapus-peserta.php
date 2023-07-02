<?php

include '../../../../backend/connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_peserta WHERE id = $id";
$query = mysqli_query($db, $sql);

if ($query) {
    header("Location: tabel-edit-peserta.php?status=sukses");
} else {
    header("Location: tabel-edit-peserta.php?status=gagal");
}
?>