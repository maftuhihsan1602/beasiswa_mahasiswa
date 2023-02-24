<?php
//koneksi ke database
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];

$beasiswa = $_POST['beasiswa'];
$status = "Belum Verifikasi";

$file = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];
// tentukan lokasi file akan dipindahkan
$dirUpload = "file_foto/";
// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$file);


$daftar = mysqli_query($db, "INSERT INTO mahasiswa VALUES ('', '$nama','$email','$hp','$semester','$ipk','$beasiswa','$file', '$status')");
if ($daftar) {
  echo "<script> alert ('Data Berhasil Disimpan')</script>";
  $last_id = mysqli_insert_id($db);
  header("refresh:0;hasil.php");
} else {
  echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>";
  echo mysqli_error($db);
}
