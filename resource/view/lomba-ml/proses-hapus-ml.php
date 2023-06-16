<?php

// blum di test, blum ad database

include '../../../backend/config/connection.php';

if (!isset($_GET['id']) || $_GET['id'] == null) {
    header("Location: tabel-lomba-ml.php");
}

$id = $_GET['id'];

$sql = "DELETE FROM tb_peserta_ml WHERE id = $id";
$query = mysqli_query($db, $sql);
?>