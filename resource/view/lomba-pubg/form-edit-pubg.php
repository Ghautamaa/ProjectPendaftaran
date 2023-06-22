<?php
include '../../../backend/connection.php';

if (!isset($_GET['id']) || $_GET['id'] == null) {
    header("Location: tabel-lomba-pubg.php");
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
    <title>Edit Pendaftaran Lomba PUBG-MOBILE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

  <body style="background-color: #E6F6F5;">

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
        <!-- End Status -->
    
  <!-- Form  -->
  <section id="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-2 m-2 text-center fw-bolder">
                <h2 style="color: #3A506B;">EDIT PENDAFTARAN LOMBA PUBG-MOBILE</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 rounded-3 mb-2 text-white px-5" style="background-color: #0B132B;">
                <form action="proses-edit-pubg.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="mb-1 pt-3">
                        <label for="tim" class="form-label ms-3 fw-bold">Nama Tim</label>
                        <input name="tim" type="text" value="<?php echo $peserta['tim'] ?>" class="form-control rounded-pill" id="tim" placeholder="Nama Tim">
                    </div>
                    <div class="mb-1">
                        <label for="ketua" class="form-label ms-3 fw-bold">Nama Ketua</label>
                        <input name="ketua" type="text" value="<?php echo $peserta['ketua'] ?>" class="form-control rounded-pill" id="ketua" placeholder="Nama Ketua">
                    </div>
                    <div class="mb-1">
                        <label for="anggota1" class="form-label ms-3 fw-bold">Nama Anggota 1</label>
                        <input name="anggota1" type="text" value="<?php echo $peserta['anggota1'] ?>" class="form-control rounded-pill" id="anggota1" placeholder="Nama Anggota 1">
                    </div>
                    <div class="mb-1">
                        <label for="anggota2" class="form-label ms-3 fw-bold">Nama Anggota 2</label>
                        <input name="anggota2" type="text" value="<?php echo $peserta['anggota2'] ?>" class="form-control rounded-pill" id="anggota2" placeholder="Nama Anggota 2">
                    </div>
                    <div class="mb-1">
                        <label for="anggota3" class="form-label ms-3 fw-bold">Nama Anggota 3</label>
                        <input name="anggota3" type="text" value="<?php echo $peserta['anggota3'] ?>" class="form-control rounded-pill" id="anggota3" placeholder="Nama Anggota 3">
                    </div> 
                    <div class="mb-1">
                        <label for="telp" class="form-label ms-3 fw-bold">No. Telepon/WA</label>
                        <input name="telp" type="text" value="<?php echo $peserta['telp'] ?>" class="form-control rounded-pill" id="telp" placeholder="No. Telepon/WA">
                    </div>   
                    <div class="d-flex justify-content-end">
                        <button name="submit" type="submit" class="btn btn-lg btn-success my-5 px-5 rounded-4 shadow fw-bold">Edit</button> 
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