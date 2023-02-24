<?php
//koneksi ke database
include '../koneksi.php';

$id = $_GET['id_mhs'];
$status = $_GET['status'];

  if($status == "Belum Verifikasi"){
    $update = mysqli_query($db, "UPDATE mahasiswa SET status='Terverifikasi' WHERE id_mhs='$id'");

  } 
  
  else if ($status == "Terverifikasi"){
    $update = mysqli_query($db, "UPDATE mahasiswa SET status='Belum Verifikasi' WHERE id_mhs='$id'");
  }

if ($update) {
  echo "<script> alert ('Data Berhasil Disimpan')</script>";
  $last_id = mysqli_insert_id($db);
  header("refresh:0;tampil.php?");
} else {
  echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>";
  echo mysqli_error($db);
}
