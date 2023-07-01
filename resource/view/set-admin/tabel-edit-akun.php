<!-- Baru front end aja ni -->
<!-- Font style sama icon blum di add -->
<!-- Nav sama footer juga -->

<!-- rapiin klo niat  -->
<!-- malas css -->

<!-- blum ad database, blum di test -->

<?php 
include '../../../backend/connection.php';
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Peserta Lomba Valorant</title>
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
        background-image: url('../../img/Artboard1.png');
        background-size: cover;
        }
        
    </style>
  </head>

  <body style =" font-family: 'Montserrat', sans-serif;">

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
    
    <!-- Tabel lomba ml  -->
    <section id="tabel">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 text-center py-3 mt-5">
                    <h2 style="color: #FFF4F4;">DAFTAR AKUN</h2>
                </div>
                <div class="col-md-12 rounded-5 mb-2">
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
                                    FROM tb_user";
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
                    <div class="d-flex justify-content-end">
                            <a href="form-tambah-akun.php">
                                <button class="btn btn-primary opacity-75 fw-bold mb-3">Tambah data</button>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tabel lomba ml end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>