<!-- Nav , footer, ikon blum -->

<?php
    include '../../../backend/connection.php';

    // set status
    $alert = "";
    if (isset ($_GET['status'])) {
        $status = $_GET['status'];
        if ($status == "Sukses") {
            $alert = "  <div class='alert alert-success alert-dismissible fade show mt-3' role='alert'>
                            <strong>$status</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        } else if ($status == "Gagal") {
            $alert = "  <div class='alert alert-danger alert-dismissible fade show mt-3' role='alert'>
                            <strong>$status</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Lomba MLBB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <!-- CSS -->
    <style>
        body {
            background-image: url('../../img/ml_bg.jpg');
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
        }
        .bg-form{
            background-color: #212a40;
            opacity: 0.8;
        }
    </style>
  </head>

  <body>
    <!-- Form daftar  -->
    <section id="form">
        <div class="container">
            <!-- alert -->
            <div class="row justify-content-center">
                <div class="col-md-7 mt-5 pt-5 text-center fw-bolder">
                    <?php echo $alert; ?>
                </div>
            </div>
            <!-- alert end -->
            <!-- header form-->
            <div class="row justify-content-center">
                <div class="col-md-4 p-2 text-center text-white fw-bolder">
                    <h2>PENDAFTARAN LOMBA MOBILE LEGENDS</h2>
                </div>
            </div>
            <!-- header form end -->
            <!-- form -->
            <div class="row justify-content-center">
                <div class="col-md-7 rounded-5 mb-2 text-white px-5 bg-form">
                    <form action="proses-simpan-ml.php" method="post">
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
                            <label for="anggota4" class="form-label ms-3 fw-bold">Nama Anggota 4</label>
                            <input required type="text" name="anggota4" class="form-control rounded-pill" id="anggota4" placeholder="Nama Anggota 4">
                        </div>   
                        <div class="mt-4">
                            <label for="cadangan" class="form-label ms-3 fw-bold">Nama Cadangan</label>
                            <input required type="text" name="cadangan" class="form-control rounded-pill" id="cadangan" placeholder="Nama Cadangan">
                        </div>   
                        <div class="mt-4">
                            <label for="telp" class="form-label ms-3 fw-bold">No. Telepon/WA</label>
                            <input required type="text" name="telp" class="form-control rounded-pill" id="telp" placeholder="No. Telepon/WA">
                        </div>   
                        <div class="d-flex justify-content-between">
                            <a href="tabel-lomba-ml.php" class="btn text-white fw-bold my-5 px-5">Tampil Data</button></a>
                            <button type="submit" name="submit" class="btn btn-lg btn-success my-5 px-5 rounded-4 shadow fw-bold">Daftar</button> 
                        </div>
                    </form>
                </div>
            </div>
            <!-- form end -->
        </div>
    </section>
    <!-- Form daftar end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>