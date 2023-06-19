<?php
include '../../../backend/connection.php';

// blum di test, blum ada database

if (isset($_POST['submit'])) {
    $namaTim = htmlspecialchars($_POST['namaTim']);
    $namaKetua = htmlspecialchars($_POST['namaKetua']);
    $namaAnggota1 = htmlspecialchars($_POST['namaAnggota1']);
    $namaAnggota2 = htmlspecialchars($_POST['namaAnggota2']);
    $namaAnggota3 = htmlspecialchars($_POST['namaAnggota3']);
    $namaAnggota4 = htmlspecialchars($_POST['namaAnggota4']);
    $noHP = htmlspecialchars($_POST['noHP']);
    $IdKategori = htmlspecialchars($_POST['IdKategori']);
    $IdUser = htmlspecialchars($_POST['IdUser']);

    $sql = "INSERT INTO tb_peserta (tim, ketua, anggota1, anggota2, anggota3, anggota4, telp, kategori_id, user_id)
            VALUES ('$namaTim', '$namaKetua', '$namaAnggota1', '$namaAnggota2', '$namaAnggota3', '$namaAnggota4', '$noHP', '$IdKategori', '$IdUser')";
    
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