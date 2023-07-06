<!-- Nav , footer, ikon blum -->
<?php 
    session_start();
    include '../../../backend/connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Peserta Lomba MLBB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <!-- CSS -->
    <style>
        .table thead tr th {
            background-color: #212a40;
            color: white;
        }
        body {
            background-image: url('../../img/ml_bg.jpg');
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
        }
    </style>
  </head>

  <body>

  <!-- PHP untuk menampilkan status -->
  <?php
    if($_SESSION['peserta-page'] == 'logged') {
        include "../homepage/peserta_page.php";
    } else {
        include "../homepage/admin_page.php";
    }

    $alert = "";
    if (isset ($_GET['status'])) {
        $status = $_GET['status'];
        if ($status == "Sukses") {
            $alert = "  <div class='alert alert-success alert-dismissible fade show mt-3' role='alert'>
                            <strong>$status</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        } else if ($status == "Gagal") {
            $alert = "  <div class='alert alert-danger alert-dismissible fade show mt-3' role='alert'>
                            <strong>$status</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
        }
    }
    ?>

        
    <!-- Tabel lomba ml  -->
    <section id="tabel">
        <div class="container">
        <!-- alert -->
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5 pt-5 text-center fw-bolder">
                <?php echo $alert; ?>
            </div>
        </div>
        <!-- alert end -->
        <!-- header form-->
        <div class="row justify-content-center">
            <div class="col-md-4 p-2 text-center text-white fw-bolder">
                    <h2>DAFTAR PESERTA LOMBA MLBB</h2>
                </div>
            </div>
            <!-- header tabel end -->
            <!-- tabel -->
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" style="border-radius: 10px; overflow: hidden; opacity: 0.8;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tim</th>
                                    <th>Ketua</th>
                                    <th>Anggota 1</th>
                                    <th>Anggota 2</th>
                                    <th>Anggota 3</th>
                                    <th>Anggota 4</th>
                                    <th>Cadangan</th>
                                    <th>No HP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT *
                                        FROM tb_mlbb";
                                $query = mysqli_query($db, $sql);
                                $no = 1;
                                while ($peserta = mysqli_fetch_assoc($query)) {
                                    echo "<tr>";
                                    echo "<td class='fw-bold'>".$no."</td>";
                                    echo "<td>".$peserta['tim']."</td>";
                                    echo "<td>".$peserta['ketua']."</td>";
                                    echo "<td>".$peserta['anggota1']."</td>";
                                    echo "<td>".$peserta['anggota2']."</td>";
                                    echo "<td>".$peserta['anggota3']."</td>";
                                    echo "<td>".$peserta['anggota4']."</td>";
                                    echo "<td>".$peserta['cadangan']."</td>";
                                    echo "<td>".$peserta['telp']."</td>";
                                    echo "<td><a href='form-edit-ml.php?id=".$peserta['id']."'><button class='btn btn-sm btn-warning text-white fw-bold'>Edit</button></a> |";
                                    echo "    <a href='proses-hapus-ml.php?id=".$peserta['id']."'><button class='btn btn-sm btn-danger text-white fw-bold' onclick=\"return confirm('Yakin?')\">Hapus</button></a></td>";
                                    echo "</tr>";
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-2">
                    <a href="cetak.php" class="btn btn-primary fw-bold">Cetak</a>
                    <a href="form-lomba-ml.php" class="btn btn-primary fw-bold">Tambah data</a>
                </div>
            </div>
            <!-- tabel  end-->
        </div>
    </section>
    <!-- Tabel lomba ml end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>