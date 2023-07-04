<?php
include '../../../backend/connection.php';
if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $tim = htmlspecialchars($_POST['tim']);
    $ketua = htmlspecialchars($_POST['ketua']);
    $anggota1 = htmlspecialchars($_POST['anggota1']);
    $anggota2 = htmlspecialchars($_POST['anggota2']);
    $anggota3 = htmlspecialchars($_POST['anggota3']);
    $anggota4 = htmlspecialchars($_POST['anggota4']);
    $cadangan = htmlspecialchars($_POST['cadangan']);
    $telp = htmlspecialchars($_POST['telp']);


    $sql = "INSERT INTO tb_mlbb (tim, ketua, anggota1, anggota2, anggota3, anggota4, cadangan, telp, user_id)
            VALUES ('$tim', '$ketua', '$anggota1', '$anggota2', '$anggota3', '$anggota4', '$cadangan', '$telp', '$user_id')";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header("Location: form-lomba-ml.php?status=Sukses");
    } else {
        header("Location: form-lomba-ml.php?status=Gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}


?>