<?php
session_start();
include '../../../backend/connection.php';
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = (md5($_POST['password']));

    $cek = "SELECT * FROM tb_user WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($db, $cek);

    if (mysqli_num_rows($result) > 0) {
        $take = mysqli_fetch_array($result);                                                                                    
        $level = $take['level'];

            if ($level == 'admin') {
                $_SESSION['admin-page'] = 'logged';
                $_SESSION['role'] = 'admin';
                header('Location: ../homepage/admin_page.php');
                exit();
            } elseif($level == 'peserta') {
                $_SESSION['peserta-page'] = 'logged';
                $_SESSION['role'] = 'peserta';
                header('Location: ../homepage/peserta_page.php');
                exit();
            }
    } else {
        $error2 [] = 'Email atau Password salah';
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

  <style>
    #form {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 90vh;
}
  body{
    background-image: url('../../img/Artboard1.png');
    background-size: cover;
  }
  </style>

  <body style="font-family: 'Montserrat', sans-serif;">
    
  <!-- Form  -->  
  <section id="form">
    <div class="container justify-content-center align-content-center">
      <div class=" p-2 m-2 pt-5 text-center fw-bolder">
          <h2 style="color: #eff9f9; opacity: 0.9;">LOGIN</h2>
      </div>        
            <div class="d-flex justify-content-center align-items-center w-100">
            <div class="w-50 p-3 rounded-4 text-white d-flex justify-content-center align-items-center " style="background-color: #212a40; opacity: 0.8;">
                <form method="post" class="w-100 p-3">
                    <div class="mb-1 pt-3">
                    <?php
                      if(isset($error2)){
                        foreach($error2 as $error2){
                          echo'
                          <div class=" text-center  justify-content-center align-items-center  rounded-4 w-100" style="background-color: #ff0000;">
                          <span class = "error-msg">'.$error2.'</span>
                          </div>';
                        }
                      }
                    ?>
                        <label for="namaTim" class="form-label ms-3 fw-bold">Email</label>
                        <input type="email" class="form-control rounded-pill" name="email" id="namaTim" placeholder="domain@aasd.asd">
                    </div>
                    <div class="mt-4">
                        <label for=" " class="form-label ms-3 fw-bold">Password</label>
                        <input type="password" class="form-control rounded-4 align-content-center" name="password" id="password" placeholder="*******">
                    <div class="d-flex justify-content-between ms-1 my-4 pt-4">
                        <a style="text-decoration: underline; color: #ffff; font-size: 14px;" class="color mt-3" href="register.php">Belum Punya Akun?</a>
                        <button type="submit" name="submit"  class="btn btn-lg btn-success rounded-4 shadow fw-bold">LOGIN</button> 
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



