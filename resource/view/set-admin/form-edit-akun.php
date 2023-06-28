<?php
include '../../../backend/connection.php';
session_start();
if (!isset($_GET['id']) || $_GET['id'] == null) {
    header("Location: tabel-edit-akun.php");
}

$id = $_GET['id'];

$sql = "SELECT * FROM tb_user WHERE id = $id";
$query = mysqli_query($db, $sql);
$akun = mysqli_fetch_array($query);
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

  <body style="background-color: #E6F6F5;">
    
  <!-- Form  -->
  <section id="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-2 m-2 text-center fw-bolder">
                <h2 style="color: #3A506B;">EDIT DAFTAR AKUN</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 rounded-3 mb-2 text-white px-5" style="background-color: #0B132B;">
                <form action="proses-edit-akun.php" method="post">
                    <input name="id" type="hidden" value="<?php echo $id; ?>">
                    <div class="mb-1 pt-3">
                        <label for="nama" class="form-label ms-3 fw-bold">Nama</label>
                        <input name="nama" type="text" value="<?php echo $akun['nama'] ?>" class="form-control rounded-pill" id="email" placeholder="Nama">
                    </div>
                    <div class="mb-1">
                        <label for="email" class="form-label ms-3 fw-bold">Email</label>
                        <input name="email" type="text" value="<?php echo $akun['email'] ?>" class="form-control rounded-pill" id="nama" placeholder="Email">
                    </div>   
                    <div class="mb-1 mt-4">
                        <label for="level" class="form-label ms-3 fw-bold">level</label>
                        <select class="form-select" aria-label="Default select example" name="level" id="level" >
                            <option value="admin">Admin</option>
                            <option value="peserta">Peserta</option>
                        </select>
                        <!-- <input name="level" type="text" value="<?php echo $akun['level'] ?>" class="form-control rounded-pill" id="level" placeholder="level"> -->
                    </div>  
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-lg btn-success my-5 px-5 rounded-4 shadow fw-bold">Edit</button> 
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