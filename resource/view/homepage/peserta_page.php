<?php
  @include '../../../backend/connection.php';

  session_start();

  if($_SESSION['peserta-page']!= "logged"){
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
          <li class="nav-item">
            <a class="navbar-brand text-white" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="navbar-brand text-white" href="#">Pendaftaran</a>
          </li>

          <li class="nav-item">
            <a class="navbar-brand text-white" href="#">About</a>
          </li>
          
          <li class="nav-item">
            <a class="navbar-brand text-white" href="#">Contact</a>
          </li>

          <li class="nav-item">
            <a class="navbar-brand text-white" href="../login/logout.php"><button class="btn btn btn-danger rounded-pill px-4 pb-2">Log out</button></a>
          </li>
        </ul>
      </nav>
    <!-- End Nav -->

<!-- Body -->
<div id="carouselExampleIndicators" class="carousel slide w-80" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

<!-- Slide Gambar -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../img/valorant.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../img/ml.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://esports.id/img/article/446720191210042846.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<!-- End Slide Gambar -->

<br>
<br>
<br>

<!-- Start Kolom/Grid Welcome -->

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-5 ">
      <h7>#Welcome To PNB EC</h7>
      <h1>Apa Itu PNB EC ?</h1>
      <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, nihil modi fuga porro nam id quaerat sint, aliquid labore ipsam unde omnis! Quisquam et, cum provident aut impedit inventore voluptas.</h4>
      <h4>
        <li>Ayam Goreng</li>
        <li>Sate Babi</li>
        <li>Rumah</li>
      </h4>
    </div>
    <div class="col-md-5 text-center">
      <img src="../../img/ml.png" alt="" srcset="" width="100%">
    </div>
  </div>
</div>

<!-- End Kolom/Grid welcome -->
<br>
<br>



  <!-- Start Card Daftar Lomba-->
  <div class="col-md-12 text-center py-3">
      <h5 >#E-SPORT</h5>
      <h1>
          <span style="color: black;">E-SPORT</span>
          <span style="color: #5BC0BE;">PNB EC</span>
      </h1>

  </div>
  
  <!-- Card Valorant -->
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card rounded" style="width :auto; ">
        <img src="../../img/valorant.jpg" class="card-img-top" alt="...">
        
        <!-- Teks -->
        <div class="card-body p-3 mb-2 bg-dark text-white text-center">
          <h2 class="card-title">Valorant</h5>
          <h6 class="card-text">Game FPS 5 ORANG</h6>
          <a href="#" class="btn btn-success text-white">Daftar</a>
        </div>
        <!-- End Teks -->
      
      </div>
    </div>
  <!-- Syarat -->
    <div class="col-md-5">
      <h3>Syarat Valorant</h3>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae animi provident beatae aliquid inventore?
        Aliquam aperiam nihil iste voluptatem, similique a doloremque, iure deserunt vero dolorum voluptatum ad dignissimos atque?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio iusto nemo tenetur culpa hic quisquam similique possimus dolorum ab, laudantium adipisci deleniti soluta totam accusantium voluptatem necessitatibus impedit veniam!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quae reiciendis ab, consequatur fuga nihil hic ullam repudiandae amet dolorum soluta animi praesentium, repellendus dolores eaque, nesciunt saepe molestias iure?
      </p>
    </div>
  </div>
</div>
  <!-- End Syarat -->
  <!-- End Card Valorant -->

  <br>
  <br>

  <!-- Card Mobile Legends -->
  <div class="container-fluid">
  <div class="row justify-content-center">
    <!-- Syarat -->
      <div class="col-md-5">
        <h3>Syarat Valorant</h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae animi provident beatae aliquid inventore?
          Aliquam aperiam nihil iste voluptatem, similique a doloremque, iure deserunt vero dolorum voluptatum ad dignissimos atque?
        </p>
      </div>
      <!-- End Syarat -->
    <div class="col-md-5">
      <div class="card rounded" style="width :auto; ">
        <img src="../../img/valorant.jpg" class="card-img-top" alt="...">
        
        <!-- Teks -->
        <div class="card-body p-3 mb-2 bg-dark text-white text-center">
          <h2 class="card-title">Valorant</h5>
          <h6 class="card-text">Game FPS 5 ORANG</h6>
          <a href="#" class="btn btn-success text-white">Daftar</a>
        </div>
        <!-- End Teks -->
      
      </div>
    </div>
  </div>
  </div>
  <!-- End Card Mobile Legends -->

  <br>
  <br>

  <!-- Card PUBG-M -->
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card rounded" style="width :auto; ">
        <img src="../../img/valorant.jpg" class="card-img-top" alt="...">
        
        <!-- Teks -->
        <div class="card-body p-3 mb-2 bg-dark text-white text-center">
          <h2 class="card-title">PUBG-MOBILE</h5>
          <h6 class="card-text">Game BATTLE ROYALE 4 ORANG</h6>
          <a href="../lomba-pubg/form-lomba-pubg.php" class="btn btn-success text-white">Daftar</a>
        </div>
        <!-- End Teks -->
      
      </div>
    </div>
  <!-- Syarat -->
    <div class="col-md-5">
      <h3>Syarat PUBG-MOBILE</h3>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae animi provident beatae aliquid inventore?
        Aliquam aperiam nihil iste voluptatem, similique a doloremque, iure deserunt vero dolorum voluptatum ad dignissimos atque?
      </p>
    </div>
  </div>
</div>
  <!-- End Syarat -->

  <!-- End Card PUBG-M -->

</div>
<!-- End Card Daftar Lomba -->

</div>
<!-- End Body -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

  </body>
