<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id_artikel'];
// Ambil Data yang Dikirim dari Form
$judul = $_POST['judul'];
$isi = $_POST['isi'];
var_dump($judul);
var_dump($isi);
// Proses ubah data ke Database
$sql = "UPDATE artikel SET judul='$judul', isi='$isi' WHERE id_artikel=$id";
$execute = $conn->query($sql); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: home_admin.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='update.php?id_artikel=$id'>Kembali Ke Form</a>";
}
?>