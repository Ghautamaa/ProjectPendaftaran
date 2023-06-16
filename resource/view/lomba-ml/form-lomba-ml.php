<!-- Baru front end aja ni -->
<!-- Font style sama icon blum di add -->
<!-- Nav sama footer juga -->

<!-- rapiin klo niat  -->
<!-- malas css -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Lomba Mobile Legends</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

  <body style="background-color: #E6F6F5;">
    
  <!-- Form  -->
  <section id="form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 p-2 m-2 text-center fw-bolder">
                <h2 style="color: #3A506B;">PENDAFTARAN LOMBA MOBILE LEGENDS</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 rounded-3 mb-2 text-white px-5" style="background-color: #0B132B;">
                <form action="proses-simpan-ml.php" method="post">
                    <div class="mb-1 pt-3">
                        <label for="namaTim" class="form-label ms-3 fw-bold">Nama Tim</label>
                        <input required type="text" name="namaTim" class="form-control rounded-pill" id="namaTim" placeholder="Nama Tim">
                    </div>
                    <div class="mb-1">
                        <label for="namaKetua" class="form-label ms-3 fw-bold">Nama Ketua</label>
                        <input required type="text" name="namaKetua" class="form-control rounded-pill" id="namaKetua" placeholder="Nama Ketua">
                    </div>
                    <div class="mb-1">
                        <label for="namaAnggota1" class="form-label ms-3 fw-bold">Nama Anggota 1</label>
                        <input required type="text" name="namaAnggota1" class="form-control rounded-pill" id="namaAnggota1" placeholder="Nama Anggota 1">
                    </div>
                    <div class="mb-1">
                        <label for="namaAnggota2" class="form-label ms-3 fw-bold">Nama Anggota 2</label>
                        <input required type="text" name="namaAnggota2" class="form-control rounded-pill" id="namaAnggota2" placeholder="Nama Anggota 2">
                    </div>
                    <div class="mb-1">
                        <label for="namaAnggota3" class="form-label ms-3 fw-bold">Nama Anggota 3</label>
                        <input required type="text" name="namaAnggota3" class="form-control rounded-pill" id="namaAnggota3" placeholder="Nama Anggota 3">
                    </div>
                    <div class="mb-1">
                        <label for="namaAnggota4" class="form-label ms-3 fw-bold">Nama Anggota 4</label>
                        <input required type="text" name="namaAnggota4" class="form-control rounded-pill" id="namaAnggota4" placeholder="Nama Anggota 4">
                    </div>   
                    <div class="mb-1">
                        <label for="noHP" class="form-label ms-3 fw-bold">No. Telepon/WA</label>
                        <input required type="text" name="noHP" class="form-control rounded-pill" id="noHP" placeholder="No. Telepon/WA">
                    </div>   
                    <div class="d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-lg btn-success my-5 px-5 rounded-4 shadow fw-bold">Daftar</button> 
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