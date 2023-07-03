<?php
include '../../../backend/connection.php';

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($db ,$_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = (md5($_POST['password']));
    $kpassword = (md5($_POST['kpassword']));

    $cek = "SELECT * from tb_user where email = '$email'";
    $result = mysqli_query($db, $cek);

    $cek2 = "SELECT * from tb_user where nama = '$username' ";
    $result2 = mysqli_query($db, $cek2);

    if (mysqli_num_rows($result) > 0){
        $error1 [] = 'email   sudah digunakan';

    } elseif  (mysqli_num_rows($result2) > 0){
        $error2 [] = 'usename sudah digunakan';
    }
    else {
        if ($password !=  $kpassword){
            $error3 []= 'konfirmasi password tidak sesuai';
        }else {
          $berhasil [] = 'Berhasil Regristrasi';
            $sql = "INSERT INTO tb_user
                    VALUES ('','$email', '$password', '$username','peserta')";
            $query = mysqli_query($db, $sql);
            header("Location: ../login/login.php");
            
        }
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
    background-image: url('../../img/Artboard1.png');
    background-size: cover;
  }
  </style>
  <!-- Form  -->  
  <section id="form">
    <div class="container justify-content-center align-content-center">
            <div class=" p-2 m-2 pt-5 text-center fw-bolder">
                <h2 style="color: #FFF4F4  ; opacity: 0.9;">REGISTER</h2>
                <?php
                        if(isset($berhasil)){
                          foreach($berhasil as $berhasil){
                            echo'
                            <div class=" text-center  justify-content-center align-items-center  rounded-4 w-100" style="background-color: #ff0000;">
                            <span class = "error-msg">'.$berhasil.'</span>
                            </div>';
                          }
                        }
                      ?>
              </div>
            <div class="form-container w-100 d-flex justify-content-center align-items-center" >
              <div class="w-50 p-3 rounded-4 text-white px-5 justify-content-center align-content-center" style="background-color: #212a40; opacity: 0.8;">
                <form action="" method="post" class="W-50">
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
                    
                        <label for="email" class="form-label ms-3 ">Email</label>
                        <input type="text" class="form-control rounded-4" id="email" placeholder="domain@aasd.asd" name="email">
                    </div>
                    <div class="mt-4">
                        <?php
                          if(isset($error2)){
                            foreach($error2 as $error2){
                              echo'
                              <div class=" text-center  justify-content-center align-items-center rounded-3 w-100" style="background-color: #ff0000;">
                              <span class = "error-msg">'.$error2.'</span>
                              </div>';
                            }
                          }     
                        ?>
                        <label for="username" class="form-label ms-3 ">Username</label>
                        <input type="text" class="form-control rounded-4 align-content-center" id="username" placeholder="Your Name" name="username">
                    </div>
                    <div class="mb-1 pt-3">
                          <label for="password" class="form-label ms-3">Password</label>
                          <input type="password" class="form-control rounded-4" id="password" placeholder="●●●●●●●●●●" name="password">
                    </div>
                    <div class="mb-1 pt-3">
                          <?php
                              if(isset($error3)){
                                foreach($error3 as $error3){
                                  echo'
                                  <div class=" text-center  justify-content-center align-items-center rounded-3 w-100" style="background-color: #ff0000;">
                                  <span class = "error-msg">'.$error3.'</span>
                                  </div>';
                                }
                              }     
                          ?>
                          <label for="kpassword" class="form-label ms-3">Konfirmasi Password</label>
                          <input type="password" class="form-control rounded-4" id="kpassword" placeholder="●●●●●●●●●●" name="kpassword">
                    </div>
                    <div class="d-flex justify-content-between ms-1 my-4 pt-4">
                        <a style="text-decoration: underline; color: #ffff; font-size: 14px;" class="color mt-3" href="login.php">Suda Punya Akun?</a>
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