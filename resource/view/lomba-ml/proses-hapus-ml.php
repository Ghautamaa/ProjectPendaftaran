<?php
include '../../../backend/connection.php';


// if (!isset($_GET['id']) || $_GET['id'] == null) {
//     header("Location: tabel-lomba-ml.php");
// }

$id = $_GET['id'];

$sql = "DELETE FROM tb_peserta WHERE id = $id";
$query = mysqli_query($db, $sql);

if ($query) {
    header("Location: tabel-lomba-ml.php?status=sukses");
} else {
    header("Location: tabel-lomba-ml.php?status=gagal");
}
?>
