<?php
include '../../../../backend/connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $level = $_POST['level'];


    $sql = "UPDATE tb_user 
            SET email = '$email',
                nama = '$nama',
                level = '$level'
            WHERE id = '$id'";
    
    $query = mysqli_query($db, $sql);
    if ($query) {
        header("Location: tabel-edit-akun.php?status=sukses");
    } else {
        header("Location: tabel-edit-akun.php?status=gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}
?>