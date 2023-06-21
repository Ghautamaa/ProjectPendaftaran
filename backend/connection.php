<?php
    $server     = 'localhost';
    $user       = 'root';
    $password   = '';
    $database   = 'db_pendaftaran';

    $db = mysqli_connect($server, $user, $password, $database);

    if ($db) {
        
    } else {
        die('gagal'.mysqli_connect_error());
    }
?>
