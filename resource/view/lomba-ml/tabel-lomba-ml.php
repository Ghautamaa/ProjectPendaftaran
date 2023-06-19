<!-- Font style sama icon blum di add -->
<!-- Nav sama footer juga -->

<!-- rapiin klo niat  -->
<!-- malas css -->

<!-- // udh ditest, mau jalan, di punyaku sih... -->

<?php 
    include '../../../backend/connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Peserta Lomba ML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .table thead tr th {
            background-color: #0B132B;
            color: white;
        }
        body {
            background-color: #E6F6F5;
        }
    </style>
  </head>

  <body>

  <!-- PHP untuk menampilkan status -->
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
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center py-3">
                    <h2 style="color: #3A506B;">DAFTAR PESERTA LOMBA MLBB</h2>
                </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table table-striped table-hover" style="border-radius: 10px; overflow: hidden;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tim</th>
                                <th>Nama Ketua</th>
                                <th>Nama Anggota 1</th>
                                <th>Nama Anggota 2</th>
                                <th>Nama Anggota 3</th>
                                <th>Nama Anggota 4</th>
                                <th>No HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            $sql = "SELECT *
                                    FROM tb_peserta 
                                    WHERE kategori_id = 3";
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
                                echo "<td>".$peserta['telp']."</td>";
                                echo "<td><a href='form-edit-ml.php?id=".$peserta['id']."'><button class='btn btn-sm btn-warning text-white fw-bold'>Edit</button></a> |";
                                echo "    <a href='proses-hapus-ml.php?id=".$peserta['id']."'><button class='btn btn-sm btn-danger text-white fw-bold'>Hapus</button></a></td>";
                                echo "</tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                            <a href="form-lomba-ml.php">
                                <button class="btn btn-primary fw-bold mb-3">Tambah data</button>
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