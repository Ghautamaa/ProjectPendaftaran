<!-- <?php
  @include '../../../backend/connection.php';

  session_start();

  if(($_SESSION['admin-page']!="logged")&&($_SESSION['peserta-page']!="logged") ){
    header('location:../login/login.php');
  }
?> -->

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
        background-image: url(../../img/background_jadwal2.webp);
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
    <!-- Kondisi Nav -->
    <?php
      if ($_SESSION['peserta-page'] == 'logged') {
        include "../homepage/peserta_page.php";
      } else {
        include "../homepage/admin_page.php";
      }
    ?>
    <!-- end kondisi nav -->

    <!-- Slide Gambar -->
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../../img/ml.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="../../img/valorant.jpg" class="d-block w-100" >
        </div>
        <div class="carousel-item">
          <img src="../../img/pubg.webp" class="d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End Slide Gambar -->

    <!-- Start Kolom/Grid Welcome -->
    <div class="container-fluid pt-5">
      <div class="row justify-content-center">
        <div class="col-md-5 ">
          <h7>#Welcome To PNB EC</h7>
          <h1>Apa Itu PNB EC ?</h1>
          <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, nihil modi fuga porro nam id quaerat sint, aliquid labore ipsam unde omnis! Quisquam et, cum provident aut impedit inventore voluptas.</h4>
          <h4>
            <ul>
              <li>Ayam Goreng</li>
              <li>Sate Babi</li>
              <li>Rumah</li>
            </ul>
          </h4>
        </div>
        <div class="col-md-5 text-center">
          <img src="../../img/ml.png" alt="" srcset="" width="100%">
        </div>
      </div>
    </div>
    <!-- End Kolom/Grid welcome -->


    <!-- Start Card Daftar Lomba-->
    <div class="container-fluid pt-3" id="pendaftaran">
      <div class="col-md-12 text-center pt-5">
        <h5 >#E-SPORT</h5>
        <h1>
          <span style="color: black;">E-SPORT</span>
          <span style="color: #5BC0BE;">PNB EC</span>
        </h1>
      </div>

      <!-- Card Valorant -->
      <div class="row justify-content-center pt-5">
        <div class="col-md-3">
          <div class="card bg-dark" style="width :auto; ">
            <img src="../../img/val_bg4.png" class="card-img-top">
            <!-- Teks -->
            <div class="card-body text-white text-center">
              <h2 class="card-title">Valorant</h5>
              <h6 class="card-text">Game FPS 5 ORANG</h6>
              <a href="../lomba-valorant/form-lomba-valorant.php" class="btn btn-success text-white">Daftar</a>
            </div>
            <!-- End Teks -->
          </div>
        </div>
        <!-- Syarat -->
        <div class="col-md-7">
          <h3>Syarat Valorant</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae animi provident beatae aliquid inventore?
            Aliquam aperiam nihil iste voluptatem, similique a doloremque, iure deserunt vero dolorum voluptatum ad dignissimos atque?
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio iusto nemo tenetur culpa hic quisquam similique possimus dolorum ab, laudantium adipisci deleniti soluta totam accusantium voluptatem necessitatibus impedit veniam!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quae reiciendis ab, consequatur fuga nihil hic ullam repudiandae amet dolorum soluta animi praesentium, repellendus dolores eaque, nesciunt saepe molestias iure?
          </p>
        </div>
      </div>
      <!-- End Syarat -->
      <!-- End Card Valorant -->

      <!-- Card Mobile Legends -->
      <div class="row justify-content-center pt-5">
        <div class="col-md-3">
          <div class="card bg-dark" style="width :auto; ">
            <img src="../../img/val_bg4.png" class="card-img-top" style="width :auto; ">
            <!-- Teks -->
            <div class="card-body text-white text-center">
              <h2 class="card-title">ML</h5>
              <h6 class="card-text">Game MOBA 5 ORANG</h6>
              <a href="../lomba-ml/form-lomba-ml.php" class="btn btn-success text-white">Daftar</a>
            </div>
            <!-- End Teks -->
          </div>
        </div>
        <!-- Syarat -->
        <div class="col-md-7">
          <h3>Syarat Mobile Legend</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae animi provident beatae aliquid inventore?
            Aliquam aperiam nihil iste voluptatem, similique a doloremque, iure deserunt vero dolorum voluptatum ad dignissimos atque?
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum distinctio iusto nemo tenetur culpa hic quisquam similique possimus dolorum ab, laudantium adipisci deleniti soluta totam accusantium voluptatem necessitatibus impedit veniam!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quae reiciendis ab, consequatur fuga nihil hic ullam repudiandae amet dolorum soluta animi praesentium, repellendus dolores eaque, nesciunt saepe molestias iure?
          </p>
        </div>
      </div>
      <!-- End Syarat -->
      <!-- End Card Mobile Legends -->

      <!-- Card PUBG-M -->
      <div class="row justify-content-center pt-5">
        <div class="col-md-3">
          <div class="card bg-dark" style="width :auto; ">
            <img src="../../img/val_bg4.png" class="card-img-top"style="width :auto; " >    
            <!-- Teks -->
            <div class="card-body bg-dark text-white text-center">
              <h2 class="card-title">PUBG-MOBILE</h5>
              <h6 class="card-text">Game BATTLE ROYALE 4 ORANG</h6>
              <a href="../lomba-pubg/form-lomba-pubg.php" class="btn btn-success text-white">Daftar</a>
            </div>
            <!-- End Teks -->
          </div>
        </div>
        <!-- Syarat -->
        <div class="col-md-7">
          <h3>Syarat PUBG-MOBILE</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae animi provident beatae aliquid inventore?
            Aliquam aperiam nihil iste voluptatem, similique a doloremque, iure deserunt vero dolorum voluptatum ad dignissimos atque?
          </p>
        </div>
      </div>
      <!-- End Syarat -->
      <!-- End Card PUBG-M -->
    </div>
    <!-- End Card Daftar Lomba -->

    <!-- Jadwal Lomba -->
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
          <div class="bg-image rounded-4 p-3">
            <div style="text-align: center; color: white;">
              <h5>#jadwal</h5>
              <h1>Jadwal Lomba PNB EC</h1>
             </div>
            <div class="text-white" id="tb">
            <table class="table1 text-black d-flex justify-content-between px-4" >
                <tr>
                <th scope="row">1</th>
                <td class="">Valorant</td>
                <td class="non-transparent">Otto</td>
                <td class="non-transparent">@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td class="non-transparent">MLBB</td>
                <td class="non-transparent">Thornton</td>
                <td class="non-transparent">@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td class="non-transparent">PUBG-M</td>
                <td class="non-transparent">@twitter</td>
                <td class="non-transparent">@twitter</td>
              </tr>
              </table>  
            </div>
            
          </div>
        </div>
      </div>
    </div>      
    <!-- End Jadwal -->






</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>