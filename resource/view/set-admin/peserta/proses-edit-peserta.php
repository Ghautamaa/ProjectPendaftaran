<?php
include '../../../../backend/connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $tim = $_POST['tim'];
    $ketua = $_POST['ketua'];
    $anggota1 = $_POST['anggota1'];
    $anggota2 = $_POST['anggota2'];
    $anggota3 = $_POST['anggota3'];
    $anggota4 = $_POST['anggota4'];
    $notelp = $_POST['notelp'];
    $kategori =$_POST['kategori_id'];

    $sql = "UPDATE tb_peserta 
            SET tim = '$tim',
                ketua = '$ketua',
                anggota1 = '$anggota1',
                anggota2 = '$anggota2',
                anggota3 = '$anggota3',
                anggota4 = '$anggota4',
                telp = '$notelp',
                kategori_id = '$kategori'
            WHERE id = '$id'";
    
    $query = mysqli_query($db, $sql);
    if ($query) {
        header("Location: tabel-edit-peserta.php?status=sukses");
    } else {
        header("Location: tabel-edit-peserta.php?status=gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}
?>