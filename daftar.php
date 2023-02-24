<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Form Pendaftaran Beasiswa Mahasiswa</title>

  <link rel="stylesheet" type="text/css" href="style-form.css" />

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    #wisata {
      padding-top: 95px;
      margin-top: -95px;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow fixed-top ">
    <h5 class="my-0 mr-md-auto font-weight-normal">Beasiswa Mahasiswa</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark"   href="index.php">Pilihan Beasiswa</a>
      <a class="p-2 text-dark" href="daftar.php">Daftar Beasiswa</a>
      <a class="p-2 text-dark" href="hasil.php">Hasil</a>
    </nav>
  </div>

  <main role="main">
    <div style="margin-top: 5rem;">
      <form action="proses_daftar.php" method="POST" name="pendaftaran" enctype="multipart/form-data">

        <h2 class="mb-4">Registrasi Beasiswa</h2>
        <div class="row">
          <label for="nama" class="col-sm-3 col-form-label">Masukkan Nama</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
        </div>

        <div class="row">
          <label for="email" class="col-sm-3 col-form-label">Masukkan Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
        </div>
        <br>

        <div class="row">
          <label for="hp" class="col-sm-3 col-form-label">Nomor HP</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="hp" name="hp" required>
          </div>
        </div>

        <div class="row">
          <label for="semester" class="col-sm-3 col-form-label">Semester saat ini</label>
          <div class="col-sm-9">
            <select class="form-control" id="semester" name="semester" required>
              <option value="">Pilih</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
          </div>
        </div>
        
        <div class="row">
          <label for="ipk" class="col-sm-3 col-form-label">IPK Terakhir</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="ipk" name="ipk" required readonly>
          </div>
        </div>

        <div id="form-beasiswa">

        </div>

        <div id="form-file">
        </div>

        <div class="row ml-1 mr-1" id="button-daftar">
          <div class="ml-auto">
            <button type="reset" id="cancel">Batal</button>
            <button type="submit" id="daftar">Daftar</button>
          </div>
        </div>


      </form>
    </div>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

  </main>

  <script>
    const ipk = 3.2;
    document.getElementById("ipk").value = ipk;

    let FormBeasiswa = document.getElementById('form-beasiswa')
    let FormFile = document.getElementById('form-file')
    let ButtonDaftar = document.getElementById('button-daftar')

    let PilihanBeasiswa = "<div class='row'><label for='beasiswa' class='col-sm-3 col-form-label'>Pilih Beasiswa</label><div class='col-sm-9'><select class='form-control' id='beasiswa' name='beasiswa' required><option value=''>Pilih</option><option value='Beasiswa Pendidikan Indonesia'>Beasiswa Pendidikan Indonesia</option><option value='Beasiswa Peningkatan Prestasi Akademik'>Beasiswa Peningkatan Prestasi Akademik</option><option value='Beasiswa BCA'>Beasiswa BCA</option></select></div></div>";
    
    let File = "<div class='row'><label for='file' class='col-sm-3 col-form-label'>Upload Berkas Syarat</label><div class='col-sm-9'><input type='file' class='form-control' id='berkas' name='berkas' accept='image/png, image/jpeg' required></div></div>";

    if (ipk >= 3.0){
        FormBeasiswa.innerHTML = PilihanBeasiswa;
        FormFile.innerHTML = File;
        ButtonDaftar.disabled = false;
    } else if (ipk < 3.0){
        ButtonDaftar.disabled = true;
    }

  </script>

  <script src="script.js"></script>

  <script src="js/jquery.slim.min.js"></script>

  <script src="js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>