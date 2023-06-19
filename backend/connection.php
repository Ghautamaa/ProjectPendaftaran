<?php
    $server     = 'localhost';
    $user       = 'root';
    $password   = '';
    $database   = 'db_pendaftaran';

    $db = mysqli_connect($server, $user, $password, $database);

    if ($db) {
        echo "berhasil";
    } else {
        die('gagal'.mysqli_connect_error());
    }


?>
