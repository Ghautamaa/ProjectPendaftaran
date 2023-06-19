<?php
    $server     = 'localhost';
    $user       = 'root';
    $password   = '';
    $database   = 'db_pendaftaran';

    $db = mysqli_connect($server, $user, $password, $database);

    if ($db) {
        // Echo cuma untuk ngecek 
        
        // echo "berhasil";
    } else {
        die('gagal'.mysqli_connect_error());
    }


?>
