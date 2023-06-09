
<?php 
include '../../../../backend/connection.php';
// session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA AKUN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <style>
        .table thead tr th {
            background-color: #0B132B;
            color: white;
        }
        body {
            background-color: #E6F6F5;
        }
        body {
        background-image: url('../../../img/Artboard1.png');
        background-size: cover;
        }
        
    </style>
  </head>

  <body style =" font-family: 'Montserrat', sans-serif;">
  <!-- Nav -->
  <nav class="navbar p-3 mb-2 bg-transparent text-white fixed-top ">
    <a class="navbar-brand" href="#" style="color : White;">
      <img src="https://stickershop.line-scdn.net/stickershop/v1/product/9738038/LINEStorePC/main.png" width="30" height="30" class="d-inline-block align-top" alt="">
      PNB EC
    </a>
    <ul class="nav ml-auto">
      <li class="nav-item dropdown d-flex align-items-center justify-content-center mt-1">
          <a class="nav-link  navbar-brand text-white d-flex align-items-center justify-content-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin<!-- <img src="../../../img/head.png" width="30" height="30" class="align-items-stretch" style="color: White;" alt=""> -->
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tabel-edit-akun.php">Data Akun</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../peserta/tabel-edit-peserta.php">Data Peserta Lomba</a></li>
          </ul>
      </li>
      <li class="nav-item d-flex align-items-center justify-content-center">
        <a class="navbar-brand text-white pt-2" href="../../layout/home.php">Home</a>
      </li>
          <li class="nav-item d-flex align-items-center justify-content-center">
            <a class="navbar-brand text-white" href="../../login/logout.php"><button class="btn btn btn-danger rounded-pill px-4 pb-2">Log out</button></a>
          </li>
          
        </ul>
        
      </nav>
      
    <!-- End Nav -->

    <!-- Tabel akun -->
    <section id="tabel">
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 text-center py-3 mt-5">
                    <h2 style="color: #FFF4F4; opacity: 0.9;">DAFTAR AKUN</h2>
                </div>
                <div class="col-md-12 rounded-5 mb-2">
                    <div class="table-responsive">
                    <table class="table table-striped table-hover" style="border-radius: 10px; overflow: hidden; opacity: 0.8;">
                        <thead >
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>level</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <!-- placeholder -->
                        <tbody>
                            <?php
                            
                            $sql = "SELECT *
                                    FROM tb_user
                                    WHERE id != 1";
                            $query = mysqli_query($db, $sql);
                            $no = 1;
                            while ($akun = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td class='text-center'>".$no."</td>";
                                echo "<td>".$akun['nama']."</td>";
                                echo "<td>".$akun['email']."</td>";
                                echo "<td>".$akun['level']."</td>";
                               
                                echo "<td class='text-center'><a href='form-edit-akun.php?id=".$akun['id']."'><button class='btn btn-sm btn-warning text-white fw-bold'>Edit</button></a> |     ";
                                echo "<a href='proses-hapus-akun.php?id=".$akun['id']."'><button class='btn btn-sm btn-danger text-white fw-bold' onclick=\"return confirm('Yakin?')\">Hapus</button></a></td>";
                                echo "</tr>";
                                $no++;
                            }

                            ?>
                            
                        </tbody>
                    </table>
                    </div>
                    <div class="d-flex justify-content-between">
                            <div>
                                <a href="cetak.php">
                                    <button class="btn btn-primary opacity-75 fw-bold mb-3">cetak</button>
                                </a>
                            </div>
                            <div>
                                <a href="form-tambah-akun.php">
                                    <button class="btn btn-primary opacity-75 fw-bold mb-3">Tambah data</button>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tabel akun  end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>