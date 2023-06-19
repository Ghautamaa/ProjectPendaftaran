<?php
include '../../../backend/config/connection.php';

// blum di test, blum ada database

if (isset($_POST['submit'])) {
    $namaTim = htmlspecialchars($_POST['']);
    $namaKetua = htmlspecialchars($_POST['namaKetua']);
    $namaAnggota1 = htmlspecialchars($_POST['namaAnggota1']);
    $noHP = htmlspecialchars($_POST['noHP']);

    $sql = "INSERT INTO tb_peserta_ml (namaTim, namaKetua, namaAnggota1, namaAnggota2, namaAnggota3, namaAnggota4, noHP)
            VALUES ('$namaTim', '$namaKetua', '$namaAnggota1', '$namaAnggota2', '$namaAnggota3', '$namaAnggota4', '$noHP')";
    
    $query = mysqli_query($db, $sql);
    if ($query) {
        header("Location: index.php?status=sukses");
    } else {
        header("Location: index.php?status=gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}
?>