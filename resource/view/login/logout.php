<?php
@include '../../../backend/connection.php';

session_start();
unset($_SESSION['admin-page']);
unset($_SESSION['peserta-page']);
header('location:login.php');
session_destroy();



?>