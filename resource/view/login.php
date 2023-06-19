<?php
  include '../../backend/config/connection.php';
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

  <body style="background-color: #E6F6F5; font-family: 'Montserrat', sans-serif;">
    
  <!-- Form  -->  
  <section id="form">
    <div class="container justify-content-center align-content-center">
            <div class=" p-2 m-2 text-center fw-bolder">
                <h2 style="color: #3A506c ;">LOGIN</h2>
            </div>
            <div class="w-75 p-3 rounded-4 text-white px-5" style="background-color: #212a40;">
                <form action="" method="post" class="">
                    <div class="mb-1 pt-3">
                        <label for="namaTim" class="form-label ms-3 fw-bold">Email</label>
                        <input type="text" class="form-control rounded-pill" id="namaTim" placeholder="domain@aasd.asd">
                    </div>
                    <div class="mt-4">
                        <label for=" " class="form-label ms-3 fw-bold">Password</label>
                        <input type="text" class="form-control rounded-pill align-content-center" id="namaKetua" placeholder="*******">
                    <div class="d-flex justify-content-between ms-3 my-4">
                        <a style="text-decoration: none; color: #ffff;" class="color" href="daftar.php">Belum Punya Akun?</a>
                        <button type="submit" class="btn btn-lg btn-success rounded-4 shadow fw-bold">Daftar</button> 
                    </div>
                </form>
            </div>
    </div>
  </section>
  <!-- Form end -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>