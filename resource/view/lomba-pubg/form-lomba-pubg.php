<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Lomba PUBG-Mobile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
        background-image: url('https://gamebrott.com/wp-content/uploads/2021/03/youtubegaming2560_1440.jpg');
        font-family: 'Montserrat', sans-serif;
        background-size: cover;
    }
    .bg-form{
        background-color: #212a40;
        opacity: 0.8;
    }
    </style>

</head>

  <body>
    

    <!-- PHP untuk menampilkan status pendaftaran -->
    <?php
    if (isset ($_GET['status'])) {
        $status = $_GET['status'];

        echo "<div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-md-8 rounded-3 mb-2 text-white px-5'>";
        if ($status == "sukses") {
            echo "      <div class='alert alert-success alert-dismissible fade show mt-3' role='alert'>
                            <strong>$status</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        } else {
            echo "      <div class='alert alert-danger alert-dismissible fade show mt-3' role='alert'>
                            <strong>$status</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        }
        echo "      </div>";
        echo "  </div>";
        echo "</div>";
    }
    ?>

  <!-- Form  -->
  <section id="form">
    <!-- Biar Form berada ditengah -->
    <div class="container">
        <!-- Form dan isi dalam form Ditengah -->
        <div class="row justify-content-center">
            <!-- Teks Ditengah -->
            <div class="col-md-4 p-2 m-2 text-center fw-bolder">
                <!-- Warna Teks -->
                <h2 style="color: White;">PENDAFTARAN LOMBA PUBG-MOBILE</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 rounded-3 mb-2 text-white px-5" style="background-color: #0B132B; opacity: 0.8;">
                <form action="proses-simpan-pubg.php" method="post">
                    <!-- input id kategori & id user, edit klo gk perlu -->
                    <input type="hidden" name="kategori_id" value="2">
                    <input type="hidden" name="user_id" value="1">
                    <!--  -->
                    <div class="mt-4 pt-3">
                        <label for="tim" class="form-label ms-3 fw-bold">Nama Tim</label>
                        <input required type="text" name="tim" class="form-control rounded-pill" id="tim" placeholder="Nama Tim">
                    </div>
                    <div class="mt-4">
                        <label for="ketua" class="form-label ms-3 fw-bold">Nama Ketua</label>
                        <input required type="text" name="ketua" class="form-control rounded-pill" id="ketua" placeholder="Nama Ketua">
                    </div>
                    <div class="mt-4">
                        <label for="anggota1" class="form-label ms-3 fw-bold">Nama Anggota 1</label>
                        <input required type="text" name="anggota1" class="form-control rounded-pill" id="anggota1" placeholder="Nama Anggota 1">
                    </div>
                    <div class="mt-4">
                        <label for="anggota2" class="form-label ms-3 fw-bold">Nama Anggota 2</label>
                        <input required type="text" name="anggota2" class="form-control rounded-pill" id="anggota2" placeholder="Nama Anggota 2">
                    </div>
                    <div class="mt-4">
                        <label for="anggota3" class="form-label ms-3 fw-bold">Nama Anggota 3</label>
                        <input required type="text" name="anggota3" class="form-control rounded-pill" id="anggota3" placeholder="Nama Anggota 3">
                    </div>
                    <div class="mt-4">
                        <label for="telp" class="form-label ms-3 fw-bold">No. Telepon/WA</label>
                        <input required type="text" name="telp" class="form-control rounded-pill" id="telp" placeholder="No. Telepon/WA">
                    </div>   
                    <div class="d-flex justify-content-between">
                    <a href="tabel-lomba-pubg.php" class="btn text-white fw-bold my-5 px-5">Tampil Data</button></a>
                        <button type="submit" name="submit" class="btn btn-lg btn-success my-5 px-5 rounded-4 shadow fw-bold">Daftar</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
  <!-- Form end -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>