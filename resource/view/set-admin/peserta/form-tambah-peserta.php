<?php
session_start();
include '../../../../backend/connection.php';

if (isset($_POST['submit'])) {
    $tim = $_POST['tim'];
    $ketua = $_POST['ketua'];
    $anggota1 = $_POST['anggota1'];
    $anggota2 = $_POST['anggota2'];
    $anggota3 = $_POST['anggota3'];
    $anggota4 = $_POST['anggota4'];
    $notelp = $_POST['telp'];
    $kategori = $_POST['kategori_id']; 
    $user_id = $_POST['user_id'];

    $cek = "SELECT * from tb_peserta where tim = '$tim'";
    $result = mysqli_query($db, $cek);

    if (mysqli_num_rows($result) > 0){
        $error1 [] = 'nama team sudah digunakan';
    }
    else {
            $sql = "INSERT INTO tb_peserta (tim, ketua, anggota1, anggota2, anggota3, anggota4, telp, kategori_id, user_id)
                    VALUES ('$tim', '$ketua', '$anggota1', '$anggota2', '$anggota3', '$anggota4', '$notelp', '$kategori', '$user_id')";
            $query = mysqli_query($db, $sql); 
            header("Location: tabel-edit-peserta.php");
            
        }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,200&display=swap" rel="stylesheet">
  </head>

  <body style="background-color: #E6F6F5;  font-family: 'Montserrat', sans-serif;">
  <style>
    #form {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;
  }
  body{
    background-image: url('../../../img/Artboard1.png');
    background-size: fit;
    background-repeat: no-repeat;
  }
  </style>
  <!-- Form  -->  
  <section id="form">
    <div class="container h-100 justify-content-center align-content-center">
            <div class=" p-2 m-2 pt-5 text-center fw-bolder">
                <h2 style="color: #FFF4F4  ; opacity: 0.9;">TAMBAH PESERTA</h2>
              </div>
            <div class="form-container w-100 d-flex justify-content-center align-items-center" >
              <div class="w-50 mb-5 p-3 rounded-4 text-white px-5 justify-content-center align-content-center" style="background-color: #212a40; opacity: 0.8;">
                <form action="" method="post" class="W-50 ">
                    <div class="mb-1 pt-3">
                    <?php
                      if(isset($error1)){
                        foreach($error1 as $error1){
                          echo'
                          <div class=" text-center  justify-content-center align-items-center  rounded-4 w-100" style="background-color: #ff0000;">
                          <span class = "error-msg">'.$error1.'</span>
                          </div>';
                        }
                      }
                    ?>
                        <label for="tim" class="form-label ms-3 ">Nama Team</label>
                        <input type="text" class="form-control rounded-4" id="tim" placeholder="ERERQI" name="tim">
                    </div>
                    <div class="mt-4">
                        <label for="ketua" class="form-label ms-3 ">Ketua</label>
                        <input type="text" class="form-control rounded-4 align-content-center" id="ketua" placeholder="Your Name" name="ketua">
                    </div>
                    <div class="mb-1 pt-3">
                          <label for="anggota1" class="form-label ms-3">Anggota 1</label>
                          <input type="text" class="form-control rounded-4" id="anggota1" placeholder="Nama" name="anggota1">
                    </div>
                    <div class="mb-1 pt-3">
                          <label for="anggota2" class="form-label ms-3">Anggota 2</label>
                          <input type="text" class="form-control rounded-4" id="anggota2" placeholder="Nama" name="anggota2">
                    </div>
                    <div class="mb-1 pt-3">
                          <label for="anggota3" class="form-label ms-3">Anggota 3</label>
                          <input type="text" class="form-control rounded-4" id="anggota3" placeholder="Nama" name="anggota3">
                    </div>
                    <div class="mb-1 pt-3">
                          <label for="anggota4" class="form-label ms-3">Anggota 4</label>
                          <input type="text" class="form-control rounded-4" id="anggota4" placeholder="Nama" name="anggota4">
                    </div>
                    <div class="mb-1 pt-3">
                          <label for="telp" class="form-label ms-3">Nomor Telp/WA</label>
                          <input type="number" class="form-control rounded-4" id="telp" placeholder="explm. 08123456789 " name="telp">
                    </div>
                    <div class="mb-1 pt-3">
                        <label for="kategori" class="form-label ms-3 fw-bold">Kategori Lomba</label>
                        <select class="form-select rounded-pill" aria-label="Default select example" name="kategori_id" id="kategori">
                            <option value="1">VALORANT</option>
                            <option value="2">PUBG</option>
                            <option value="3">MLBB</option>
                        </select>
                    </div> 
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                    <div class="d-flex justify-content-between ms-1 my-4 pt-4">
                        <a style="text-decoration: underline; color: #ffff; font-size: 14px;" class="color mt-3" href="tabel-edit-peserta.php">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-lg btn-secondary  rounded-4" class="background-color: #44908F;">Daftar</button> 
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