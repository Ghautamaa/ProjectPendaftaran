<?php
include '../../../../backend/connection.php';
session_start();
if (!isset($_GET['id']) || $_GET['id'] == null) {
    header("Location: tabel-edit-akun.php");
}

$id = $_GET['id'];

$sql = "SELECT * FROM tb_peserta WHERE id = $id";
$query = mysqli_query($db, $sql);
$peserta = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT AKUN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,200&display=swap" rel="stylesheet">
  </head>
<style>
    body {
        background-image: url('../../../img/Artboard1.png');
        background-size: fit;

        }
        
</style>
  <body style =" font-family: 'Montserrat', sans-serif;">
  <!-- Form  -->
  <section id="form">
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-4 p-2 m-2 mt-5 text-center fw-bolder">
                <h2 style="color: #FFF4F4; opacity: 0.9;">EDIT DAFTAR PESERTA</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 rounded-5 mb-2 text-white px-5" style="background-color: #212a40; opacity:0.8;">
                <form action="proses-edit-peserta.php" method="post">
                    <input name="id" type="hidden" value="<?php echo $id; ?>">
                    <div class="mb-1 mt-4 pt-3">
                        <label for="tim" class="form-label ms-3 fw-bold">Nama Team</label>
                        <input name="tim" type="text" value="<?php echo $peserta['tim'] ?>" class="form-control rounded-pill" id="tim" placeholder="tim">
                    </div>
                    <div class="mb-1 mt-3">
                        <label for="ketua" class="form-label ms-3 fw-bold">Ketua</label>
                        <input name="ketua" type="text" value="<?php echo $peserta['ketua'] ?>" class="form-control rounded-pill" id="ketua" placeholder="ketua">
                    </div>
                    <div class="mb-1 mt-3">
                        <label for="anggota1" class="form-label ms-3 fw-bold">Anggota 1</label>
                        <input name="anggota1" type="text" value="<?php echo $peserta['anggota1'] ?>" class="form-control rounded-pill" id="anggota1" placeholder="anggota1">
                    </div>
                    <div class="mb-1 mt-3">
                        <label for="anggota2" class="form-label ms-3 fw-bold">Anggota 2</label>
                        <input name="anggota2" type="text" value="<?php echo $peserta['anggota2'] ?>" class="form-control rounded-pill" id="anggota2" placeholder="anggota2">
                    </div>    
                    <div class="mb-1 mt-3">
                        <label for="anggota3" class="form-label ms-3 fw-bold">Anggota 3</label>
                        <input name="anggota3" type="text" value="<?php echo $peserta['anggota3'] ?>" class="form-control rounded-pill" id="anggota3" placeholder="anggota3">
                    </div>   
                    <div class="mb-1 mt-3">
                        <label for="anggota4" class="form-label ms-3 fw-bold">Anggota 4</label>
                        <input name="anggota4" type="text" value="<?php echo $peserta['anggota4'] ?>" class="form-control rounded-pill" id="anggota4" placeholder="anggota4">
                    </div>   
                    <div class="mb-1 mt-3">
                        <label for="notelp" class="form-label ms-3 fw-bold">No Telp/WA</label>
                        <input name="notelp" type="text" value="<?php echo $peserta['telp'] ?>" class="form-control rounded-pill" id="notelp" placeholder="expl. 0812345678">
                    </div>  
                    <div class="mb-1 mt-3">
                        <label for="kategori" class="form-label ms-3 fw-bold">Kategori Lomba</label>
                        <select class="form-select rounded-pill" aria-label="Default select example" name="kategori_id" id="kategori">
                            <option value="1">VALORANT</option>
                            <option value="2">PUBG</option>
                            <option value="3">MLBB</option>
                        </select>
                    </div>   
                    <div class="d-flex justify-content-between ms-1 my-4 mb-5 pt-4">
                        <a style="text-decoration: underline; color: #ffff; font-size: 14px;" class="color mt-3" href="tabel-edit-peserta.php">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-lg btn-success rounded-4 shadow fw-bold">Edit</button> 
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