<?php
@include '../../../backend/connection.php';

session_start();
unset($_SESSION['admin-page']);
unset($_SESSION['peserta-page']);
unset($_SESSION['user_id']);
header('location:login.php');
session_destroy();



?>