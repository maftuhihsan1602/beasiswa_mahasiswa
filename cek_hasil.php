<?php
    include'koneksi.php';

        $daftar = mysqli_query($db, "SELECT * FROM mahasiswa WHERE nama = '$_GET[nama]'");
        $data = mysqli_fetch_object($daftar);
?>

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
    <h5 class="my-0 mr-md-auto font-weight-normal"> Data Beasiswa</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark"   href="index.php">Pilihan Beasiswa</a>
      <a class="p-2 text-dark" href="daftar.php">Daftar Beasiswa</a>
      <a class="p-2 text-dark" href="hasil.php">Hasil</a>
    </nav>
  </div>

  <main role="main">
    <div style="margin-top: 5rem;">
      <form action="#" method="POST" name="pendaftaran">

        <h2 class="mb-4">Data Beasiswa Anda</h2>
        <div class="row">
          <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" value="<?php echo $data->nama ?>" required readonly>
          </div>
        </div>

        <div class="row">
          <label for="email" class="col-sm-3 col-form-label">Masukkan Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data->email ?>" required readonly>
          </div>
        </div>
        <br>

        <div class="row">
          <label for="hp" class="col-sm-3 col-form-label">Nomor HP</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="hp" name="hp" value="<?php echo $data->hp ?>" required readonly>
          </div>
        </div>

        <div class="row">
          <label for="semester" class="col-sm-3 col-form-label">Semester</label>
          <div class="col-sm-9">
            <input text="text" class="form-control" id="semester" name="semester" value="<?php echo $data->semester ?>" required readonly>
          </div>
        </div>  
        <br>

        <div class="row">
          <label for="ipk" class="col-sm-3 col-form-label">IPK</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="ipk" name="ipk" value="<?php echo $data->ipk ?>" required readonly>
          </div>
        </div>

        <div class="row">
          <label for="beasiswa" class="col-sm-3 col-form-label">Pilih Beasiswa</label>
          <div class="col-sm-9">
            <input type="text" value="<?php echo $data->beasiswa ?>" id="beasiswa" name="beasiswa" readonly>
          </div>
        </div>

        <div class="row">
          <label for="beasiswa" class="col-sm-3 col-form-label">Nama File</label>
          <div class="col-sm-9">
            <input type="text" value="<?php echo $data->file ?>" id="file" name="file" readonly>
          </div>
        </div>

        <div class="row">
          <label for="beasiswa" class="col-sm-3 col-form-label">Foto</label>
          <div class="col-sm-9">
            <img src ="file_foto/<?php echo $data->file ?>" width="200px" height="200px">
          </div>
        </div>
        <br>  
        <div class="row">
          <label for="beasiswa" class="col-sm-3 col-form-label">Status</label>
          <div class="col-sm-9">
            <input type="text" value="<?php echo $data->status ?>" id="status" name="status" required readonly>
          </div>
        </div>

      </form>
    </div>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

  </main>

  <script src="script.js"></script>

  <script src="js/jquery.slim.min.js"></script>

  <script src="js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>