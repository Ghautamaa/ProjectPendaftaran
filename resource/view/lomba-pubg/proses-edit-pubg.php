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
    $telp = htmlspecialchars($_POST['telp']);

    $sql = "UPDATE tb_peserta 
            SET tim ='$tim',
                ketua = '$ketua',
                anggota1 = '$anggota1',
                anggota2 = '$anggota2',
                anggota3 = '$anggota3',
                telp = '$telp'
            WHERE id = $id";
    
    $query = mysqli_query($db, $sql);
    if ($query) {
        header("Location: tabel-lomba-pubg.php?status=sukses");
    } else {
        header("Location: tabel-lomba-pubg.php?status=gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}
?>