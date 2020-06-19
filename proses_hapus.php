<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID yang dikirim oleh index.php melalui URL
$No = $_GET['No'];

// Query untuk menghapus data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("DELETE FROM barang WHERE No=:No");
$sql->bindParam(':No', $No);
$execute = $sql->execute(); // Eksekusi / Jalankan query

if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: home.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='Home.php'>Kembali</a>";
}
?>