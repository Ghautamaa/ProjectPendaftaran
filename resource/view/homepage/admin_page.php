<?php
  @include '../../../backend/connection.php';

  session_start();

  if($_SESSION['admin-page']!="logged"){
    header('location:../login/login.php');
  }
?>

<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>

      /* Buat table */
      .bg-image {
        background-image: url(../../img/ml.png);
        background-size: cover;
        background-position: center;
      }

      #tb {
      background-color: rgba(255, 255, 255, 0.50);
      } 
  .table1, th, td {
    border: 1px  #999;
    padding: 8px 20px;
    background-color: rgba(255, 255, 255, 0.);
  }
    </style>



<title>Home PNB EC</title>
</head>
<body>
  <!-- Nav -->
  <nav class="navbar p-3 mb-2 bg-dark text-white fixed-top">
    <a class="navbar-brand" href="#" style="color : White;">
      <img src="https://stickershop.line-scdn.net/stickershop/v1/product/9738038/LINEStorePC/main.png" width="30" height="30" class="d-inline-block align-top" alt="">
      PNB EC
    </a>
    <ul class="nav ml-auto">
      <li class="nav-item dropdown">
          <a class="nav-link  navbar-brand text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../../img/head.png" width="30" height="30" class="align-items-stretch" style="color: White; padding: -0px; margin: 0; " alt="">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../set-admin/form-edit-akun.php">Daftar Akun</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Daftar Peserta Lomba</a></li>
          </ul>
      </li>
      <li class="nav-item">
        <a class="navbar-brand text-white pt-2" href="#">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="navbar-brand text-white" href="#">Pendaftaran</a>
      </li>
          <li class="nav-item">
            <a class="navbar-brand text-white" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand text-white" href="../login/logout.php"><button class="btn btn btn-danger rounded-pill px-4 pb-2">Log out</button></a>
          </li>
          
        </ul>
        
      </nav>
      
    <!-- End Nav -->

  <!-- Body -->
  <?php
  
  @include '../layout/home.php'; 
  ?>
  </body>
</html>