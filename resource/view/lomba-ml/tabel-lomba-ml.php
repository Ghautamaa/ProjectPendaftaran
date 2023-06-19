<!-- Baru front end aja ni -->
<!-- Font style sama icon blum di add -->
<!-- Nav sama footer juga -->

<!-- rapiin klo niat  -->
<!-- malas css -->

<!-- blum ad database, blum di test -->

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

    <!-- Tabel lomba ml  -->
    <section id="tabel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center py-3">
                    <h2 style="color: #3A506B;">DAFTAR PESERTA LOMBA MOBILE LEGENDS</h2>
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
                        <!-- placeholder -->
                        <tbody>
                            <?php
                            
                            // $sql = "SELECT * FROM tb_peserta_ml";
                            // $query = mysqli_query($db, $sql);
                            // $no = 1;
                            // while ($peserta = mysqli_fetch_array($query)) {
                            //     echo "<tr>";
                            //     echo "<td>".$no."</td>";
                            //     echo "<td>".$peserta['namaTim']."</td>";
                            //     echo "<td>".$peserta['namaAnggota1']."</td>";
                            //     echo "<td>".$peserta['namaAnggota2']."</td>";
                            //     echo "<td>".$peserta['namaAnggota3']."</td>";
                            //     echo "<td>".$peserta['namaAnggota4']."</td>";
                            //     echo "<td>".$peserta['noHP']."</td>";
                            //     echo "<td>";
                            //     echo "<td><a href='form-edit-ml.php?id=".$peserta['id']."'><button class='btn btn-sm btn-warning text-white fw-bold'>Edit</button></a> |";
                            //     echo "    <a href='proses-hapus-ml.php?id=".$peserta['id']."'><button class='btn btn-sm btn-danger text-white fw-bold'>Hapus</button></a></td>";
                            //     echo "</tr>";
                            //     $no++;
                            // }

                            ?>
                            <tr>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>
                                    <a href="form-edit-ml.php"><button class="btn btn-sm btn-warning text-white fw-bold">Edit</button></a> |
                                    <a href="href='form-edit-ml.php"><button class="btn btn-sm btn-danger text-white fw-bold" onclick="return ('Apakah anda yakin ingin menghapus ?')">Hapus</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>
                                    <a href=""><button class="btn btn-sm btn-warning text-white fw-bold">Edit</button></a> |
                                    <a href=""><button class="btn btn-sm btn-danger text-white fw-bold">Hapus</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>Lorem.</td>
                                <td>
                                    <a href=""><button class="btn btn-sm btn-warning text-white fw-bold">Edit</button></a> |
                                    <a href=""><button class="btn btn-sm btn-danger text-white fw-bold">Hapus</button></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Tabel lomba ml end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>