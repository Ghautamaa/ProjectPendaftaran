<?php
include '../../../backend/config/connection.php';

// blum ad database, blum di test

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $namaTim = htmlspecialchars($_POST['namaTim']);
    $namaKetua = htmlspecialchars($_POST['namaKetua']);
    $namaAnggota1 = htmlspecialchars($_POST['namaAnggota1']);
    $namaAnggota2 = htmlspecialchars($_POST['namaAnggota2']);
    $namaAnggota3 = htmlspecialchars($_POST['namaAnggota3']);
    $namaAnggota4 = htmlspecialchars($_POST['namaAnggota4']);
    $noHP = htmlspecialchars($_POST['noHP']);

    $sql = "UPDATE tb_peserta_ml 
            SET namaTim ='$namaTim',
                namaAnggota1 = '$namaAnggota1',
                namaAnggota2 = '$namaAnggota2',
                namaAnggota3 = '$namaAnggota3',
                namaAnggota4 = '$namaAnggota4',
                noHP = '$noHP'
            WHERE id = $id
                ";
    
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