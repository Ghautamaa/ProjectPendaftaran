<?php
include '../../../backend/connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $tim = htmlspecialchars($_POST['tim']);
    $ketua = htmlspecialchars($_POST['ketua']);
    $anggota1 = htmlspecialchars($_POST['anggota1']);
    $anggota2 = htmlspecialchars($_POST['anggota2']);
    $anggota3 = htmlspecialchars($_POST['anggota3']);
    $anggota4 = htmlspecialchars($_POST['anggota4']);
    $email = htmlspecialchars($_POST['email']);

    $sql = "UPDATE tb_valorant 
            SET tim ='$tim',
                ketua = '$ketua',
                anggota1 = '$anggota1',
                anggota2 = '$anggota2',
                anggota3 = '$anggota3',
                anggota4 = '$anggota4',
                email = '$email'
            WHERE id = $id";
    
    $query = mysqli_query($db, $sql);
    if ($query) {
        header("Location: tabel-lomba-valorant.php?status=sukses");
    } else {
        header("Location: tabel-lomba-valorant.php?status=gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}
?>