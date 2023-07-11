<?php
include '../../../backend/connection.php';


if (isset($_POST['submit'])) {
    $tim = htmlspecialchars($_POST['tim']);
    $ketua = htmlspecialchars($_POST['ketua']);
    $anggota1 = htmlspecialchars($_POST['anggota1']);
    $anggota2 = htmlspecialchars($_POST['anggota2']);
    $anggota3 = htmlspecialchars($_POST['anggota3']);
    $telp = htmlspecialchars($_POST['telp']);

    $sql = "INSERT INTO tb_pubg (tim, ketua, anggota1, anggota2, anggota3, telp)
            VALUES ('$tim', '$ketua', '$anggota1', '$anggota2', '$anggota3', '$telp')";
    
    // Ngecek apakah berhasil ngirim apa kaga
    $query = mysqli_query($db, $sql);
    if ($query) {
        header("Location: form-lomba-pubg.php?status=sukses");
    } else {
        header("Location: form-lomba-pubg.php?status=gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}


?>