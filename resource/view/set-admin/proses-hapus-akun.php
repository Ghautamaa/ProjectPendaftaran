<?php

include '../../../backend/connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_user WHERE id = $id";
$query = mysqli_query($db, $sql);

if ($query) {
    header("Location: tabel-edit-akun.php?status=sukses");
} else {
    header("Location: tabel-edit-akun.php?status=gagal");
}
?>