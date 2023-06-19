<?php
include '../../../backend/connection.php';

// udh ditest, mau jalan, di punyaku sih...

if (isset($_POST['submit'])) {
    $tim = htmlspecialchars($_POST['tim']);
    $ketua = htmlspecialchars($_POST['ketua']);
    $anggota1 = htmlspecialchars($_POST['anggota1']);
    $anggota2 = htmlspecialchars($_POST['anggota2']);
    $anggota3 = htmlspecialchars($_POST['anggota3']);
    $anggota4 = htmlspecialchars($_POST['anggota4']);
    $telp = htmlspecialchars($_POST['telp']);
    $kategori_id = htmlspecialchars($_POST['IdKategori']);
    $user_id = htmlspecialchars($_POST['IdUser']);

    $sql = "INSERT INTO tb_peserta (tim, ketua, anggota1, anggota2, anggota3, anggota4, telp, kategori_id, user_id)
            VALUES ('$tim', '$ketua', '$anggota1', '$anggota2', '$anggota3', '$anggota4', '$telp', '$kategori_id', '$user_id')";
    
    $query = mysqli_query($db, $sql);
    if ($query) {
        header("Location: form-lomba-ml.php?status=sukses");
    } else {
        header("Location: form-lomba-ml.php?status=gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}


?>