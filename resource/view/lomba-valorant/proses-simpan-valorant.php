<?php
include '../../../backend/connection.php';

if (isset($_POST['submit'])) {
    $tim = htmlspecialchars($_POST['tim']);
    $ketua = htmlspecialchars($_POST['ketua']);
    $anggota1 = htmlspecialchars($_POST['anggota1']);
    $anggota2 = htmlspecialchars($_POST['anggota2']);
    $anggota3 = htmlspecialchars($_POST['anggota3']);
    $anggota4 = htmlspecialchars($_POST['anggota4']);
    $email = htmlspecialchars($_POST['email']);
    // $kategori_id = htmlspecialchars($_POST['kategori_id']);
    // $user_id = htmlspecialchars($_POST['user_id']);

    $sql = "INSERT INTO tb_valorant (tim, ketua, anggota1, anggota2, anggota3, anggota4, email)
            VALUES ('$tim', '$ketua', '$anggota1', '$anggota2', '$anggota3', '$anggota4', '$email')";
    
    $query = mysqli_query($db, $sql);
    if ($query) {
        header("Location: form-lomba-valorant.php?status=sukses");
    } else {
        header("Location: form-lomba-valorant.php?status=gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}


?>