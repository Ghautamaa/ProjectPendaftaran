<?php
include '../../../backend/connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Lomba VALORANT </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
</head>
<style>
    body{
        background-image: url('../../img/val_bg4.png');
        background-size: cover;
    }
</style>

  <body style="background-color: #E6F6F5;font-family: 'Montserrat', sans-serif; " >
    
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-2 m-2 text-center fw-bolder">
                <h2 style="color: #FFF4F4; ">
                PENDAFTARAN LOMBA VALORANT
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 rounded-5 mb-2 text-white px-5" style="background-color: #212a40; opacity: 0.8;">
                <form action="proses-simpan-valorant.php" method="post">
                    <div class="mt-4 pt-3">
                        <label for="namaTim" class="form-label ms-3 fw-bold">Nama Tim</label>
                        <input type="text" class="form-control rounded-pill" id="tim" placeholder="Nama Tim" name="tim">
                    </div>
                    <div class="mt-4">
                        <label for="namaKetua" class="form-label ms-3 fw-bold">Nama Ketua</label>
                        <input type="text" class="form-control rounded-pill" id="ketua" placeholder="Nama Ketua" name="ketua">
                    </div>
                    <div class="mt-4">
                        <label for="namaAnggota1" class="form-label ms-3 fw-bold">Nama Anggota 1</label>
                        <input type="text" class="form-control rounded-pill" id="anggota1" placeholder="Nama Anggota 1" name="anggota1">
                    </div>
                    <div class="mt-4">
                        <label for="namaAnggota2" class="form-label ms-3 fw-bold">Nama Anggota 2</label>
                        <input type="text" class="form-control rounded-pill" id="anggota2" placeholder="Nama Anggota 2" name="anggota2">
                    </div>
                    <div class="mt-4">
                        <label for="namaAnggota3" class="form-label ms-3 fw-bold">Nama Anggota 3</label>
                        <input type="text" class="form-control rounded-pill" id="anggota3" placeholder="Nama Anggota 3" name="anggota3">
                    </div>
                    <div class="mt-4">
                        <label for="namaAnggota4" class="form-label ms-3 fw-bold">Nama Anggota 4</label>
                        <input type="text" class="form-control rounded-pill" id="anggota4" placeholder="Nama Anggota 4" name="anggota4">
                    </div>   
                    <div class="mt-4">
                        <label for="noHP" class="form-label ms-3 fw-bold">Email</label>
                        <input type="text" class="form-control rounded-pill" id="email" placeholder="abc@gmail.com" name="email">
                    </div>   
                    <div class="d-flex justify-content-between">
                    <a href="tabel-lomba-valorant.php" class="btn text-white fw-bold my-5 px-5">Tampil Data</button></a>
                        <button type="submit" class="btn btn-lg btn-danger my-5 px-5 rounded-4 shadow fw-bold" name="submit">Daftar</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
  </div>
  <!-- Form end -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>