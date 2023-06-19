<?php
include '../../../backend/connection.php';

// blum ad database, blum di test

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $tim = htmlspecialchars($_POST['tim']);
    $ketua = htmlspecialchars($_POST['ketua']);
    $anggota1 = htmlspecialchars($_POST['anggota1']);
    $anggota2 = htmlspecialchars($_POST['anggota2']);
    $anggota3 = htmlspecialchars($_POST['anggota3']);
    $anggota4 = htmlspecialchars($_POST['anggota4']);
    $telp = htmlspecialchars($_POST['telp']);

    $sql = "UPDATE tb_peserta_ml 
            SET tim ='$tim',
                ketua = '$ketua',
                anggota1 = '$anggota1',
                anggota2 = '$anggota2',
                anggota3 = '$anggota3',
                anggota4 = '$anggota4',
                telp = '$telp'
            WHERE id = $id";
    
    $query = mysqli_query($db, $sql);
    if ($query) {
        header("Location: tabel-lomba-ml.php?status=sukses");
    } else {
        header("Location: tabel-lomba-ml.php?status=gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}
?>